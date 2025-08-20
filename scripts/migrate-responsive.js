const fs = require('fs');
const path = require('path');

const THEME_ROOT = '/Users/step/Local Sites/ufc/app/public/wp-content/themes/buzzed';
const TARGET_DIRS = [path.join(THEME_ROOT, 'parts'), path.join(THEME_ROOT, 'templates')];

function walk(dir, files = []) {
  if (!fs.existsSync(dir)) return files;
  for (const entry of fs.readdirSync(dir)) {
    const p = path.join(dir, entry);
    const stat = fs.statSync(p);
    if (stat.isDirectory()) {
      walk(p, files);
    } else if (/\.(html|php)$/i.test(entry)) {
      files.push(p);
    }
  }
  return files;
}

function ensure(rs, prop, device) {
  if (!rs[prop]) rs[prop] = {};
  if (device && !rs[prop][device]) rs[prop][device] = typeof rs[prop][device] === 'object' ? rs[prop][device] : '';
}

function migrateAttributes(attrs) {
  if (!attrs || typeof attrs !== 'object') return attrs;
  attrs.responsiveStyles = attrs.responsiveStyles || {};
  const rs = attrs.responsiveStyles;

  // Simple device-specific mappings
  const simpleMaps = [
    ['width_desktop', 'width', 'desktop'],
    ['width_tablet', 'width', 'tablet'],
    ['width_mobile', 'width', 'mobile'],
    ['desktop_display', 'display', 'desktop'],
    ['tablet_display', 'display', 'tablet'],
    ['mobile_display', 'display', 'mobile'],
    ['font_size_tablet', 'font_size', 'tablet'],
    ['font_size_mobile', 'font_size', 'mobile']
  ];
  for (const [src, prop, device] of simpleMaps) {
    if (attrs[src] !== undefined && attrs[src] !== '') {
      ensure(rs, prop);
      rs[prop][device] = attrs[src];
      delete attrs[src];
    }
  }

  // Box-object mappings (padding/margin)
  const boxMaps = [
    ['tablet_padding', 'padding', 'tablet'],
    ['tablet_margin', 'margin', 'tablet'],
    ['desktop_margin', 'margin', 'desktop']
  ];
  for (const [src, prop, device] of boxMaps) {
    if (attrs[src] && typeof attrs[src] === 'object') {
      ensure(rs, prop);
      rs[prop][device] = attrs[src];
      delete attrs[src];
    }
  }

  // desktop_pos: { top, right, bottom, left } -> individual responsiveStyles sides
  if (attrs.desktop_pos && typeof attrs.desktop_pos === 'object') {
    const pos = attrs.desktop_pos;
    for (const side of ['top', 'right', 'bottom', 'left']) {
      if (pos[side] !== undefined && pos[side] !== '') {
        ensure(rs, side);
        rs[side].desktop = pos[side];
      }
    }
    delete attrs.desktop_pos;
  }

  return attrs;
}

function processContent(content) {
  return content.replace(/<!--\s*wp:([a-zA-Z0-9\/\-]+)\s*(\{[\s\S]*?\})\s*-->/g, (match, blockName, json) => {
    try {
      const attrs = JSON.parse(json);
      const migrated = migrateAttributes(attrs);
      return `<!-- wp:${blockName} ${JSON.stringify(migrated)} -->`;
    } catch (e) {
      return match; // leave unchanged if JSON parse fails
    }
  });
}

function main() {
  const files = TARGET_DIRS.flatMap((d) => walk(d));
  let changed = 0;
  for (const file of files) {
    const oldContent = fs.readFileSync(file, 'utf8');
    const newContent = processContent(oldContent);
    if (newContent !== oldContent) {
      fs.writeFileSync(file, newContent, 'utf8');
      changed++;
      console.log('migrated', file);
    }
  }
  console.log('done', changed);
}

main();


