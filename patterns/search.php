<?php
/**
 * Title: search
 * Slug: buzzed/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","customId":"c58d6b"} /-->

<!-- wp:cover {"overlayColor":"dark","isUserOverlayColor":true,"minHeight":339,"minHeightUnit":"px","customId":"85207c","style":{"spacing":{"margin":{"top":"0px","bottom":"-30px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<div class="wp-block-cover has-white-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:-30px;min-height:339px"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"customId":"81aecb","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:query-title {"type":"search","textAlign":"center","customId":"089104","animation_delay":"0","animation_duration":"0","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800"}},"fontSize":"30","fontFamily":"oswald"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"width":700,"buttonText":"Search","width_desktop":"700px","customId":"52f27e","custom_css":"this_block  * {margin:0;}","style":{"border":{"radius":"0px","color":"#434343","width":"4px"},"spacing":{"margin":{"right":"0","left":"0"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"primary"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"desktop_margin":{"top":"0px","left":"","right":"","bottom":""},"customId":"cc8983","custom_css":"this_block{\nz-index:1;\nposition:relative;\n}"} -->
<div class="wp-block-group"><!-- wp:group {"customId":"4080d0","style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"customId":"d76502","animation":"fadeInUp","animation_delay":"0","animation_duration":"1","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"backgroundColor":"white"} -->
<div class="wp-block-columns has-white-background-color has-background" style="border-radius:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:column {"width":"75%","width_desktop":"75%","customId":"a8b84b"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"customId":"b786e1","layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]},"customId":"b68204","layout":{"type":"default"},"customPostsPerPage":"9"} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"5a549e","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:template-part {"slug":"blog-roll","customId":"4923b3"} /-->
<!-- /wp:post-template -->

<!-- wp:stepfox/query-loop-load-more {"width_desktop":"100%","customId":"cb6638","custom_css":"this_block{text-align:center;}","backgroundColor":"primary","textColor":"white","fontFamily":"montserrat","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"10px","bottom":"10px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800"}}} -->
<button type="button" class="wp-block-stepfox-query-loop-load-more query-loop-load-more-button has-white-color has-primary-background-color has-text-color has-background has-link-color has-montserrat-font-family" style="padding-top:10px;padding-bottom:10px;font-style:normal;font-weight:800;text-transform:uppercase">Load More</button>
<!-- /wp:stepfox/query-loop-load-more --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","width_desktop":"25%","customId":"48ef23"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"customId":"cf4254","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"width":"1px"}},"backgroundColor":"light-gray","borderColor":"gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-gray-border-color has-light-gray-background-color has-background" style="border-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"customId":"ba5246","style":{"typography":{"textTransform":"uppercase","lineHeight":"0"},"spacing":{"padding":{"left":"5px"},"margin":{"bottom":"20px"}}},"fontSize":"18","fontFamily":"oswald","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-oswald-font-family has-18-font-size" style="margin-bottom:20px;padding-left:5px;line-height:0;text-transform:uppercase"><!-- wp:heading {"level":4,"desktop_margin":{"top":"","left":"-20px","right":"","bottom":""},"customId":"feb518","style":{"typography":{"textTransform":"uppercase","lineHeight":"0.9"},"spacing":{"padding":{"left":"5px"},"margin":{"bottom":"20px"}},"border":{"left":{"color":"var:preset|color|primary","width":"15px"}}},"fontSize":"18","fontFamily":"oswald"} -->
<h4 class="wp-block-heading has-oswald-font-family has-18-font-size" style="border-left-color:var(--wp--preset--color--primary);border-left-width:15px;margin-bottom:20px;padding-left:5px;line-height:0.9;text-transform:uppercase"><?php esc_html_e('Newsroll', 'buzzed');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":7,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"ce2cf7","layout":{"type":"default"},"customPostsPerPage":7} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"cf74de","style":{"spacing":{"blockGap":"11px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"customId":"ef7f66","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"width_desktop":"100%","customId":"9ef842","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"customId":"9cc983","custom_css":"this_block{display:block;}","align":"full","style":{"typography":{"lineHeight":"1.2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull" style="line-height:1.2"><!-- wp:post-date {"format":"M j, Y","customId":"8965c4","custom_css":"this_block{display:inline;float:left;}","style":{"spacing":{"margin":{"right":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"15px"}}} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true,"customId":"1e4663","custom_css":"this_block{float:none;}\nthis_block :where(a) {\n    display: inline;\n}","align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.4","letterSpacing":"-0.2px"}},"fontSize":"14","fontFamily":"raleway"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"fcbc8f","align":"full","style":{"spacing":{"blockGap":"5px"}},"fontSize":"14","fontFamily":"oswald","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-oswald-font-family has-14-font-size"><!-- wp:paragraph {"customId":"8045e5"} -->
<p><?php esc_html_e('by', 'buzzed');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"customId":"33184d","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","customId":"6b4b8c"} /-->