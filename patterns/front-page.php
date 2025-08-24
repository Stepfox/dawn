<?php
/**
 * Title: front-page
 * Slug: dawn/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","customId":"b65d0c"} /-->

<!-- wp:group {"customId":"a5668b"} -->
<div class="wp-block-group"><!-- wp:group {"customId":"de3d03","responsiveStyles":{"margin":{"desktop":{"top":"20px","bottom":"20px"}}},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:columns {"customId":"a106e4","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%","customId":"afe18d","responsiveStyles":{"width":{"desktop":"25%","tablet":"33%","mobile":"100%"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":"11","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"ff0d80","customPostsPerPage":2,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"7a20e4","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"small-featured-card","customId":"3a37fc"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","customId":"59a1c7"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"27","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"5542ec","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"6027c0","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#936d70","isUserOverlayColor":false,"minHeight":310,"minHeightUnit":"px","contentPosition":"bottom center","customId":"aa3b85","linkToPost":true,"responsiveStyles":{"gap":{"desktop":"5px"},"min_height":{"desktop":"310px"}},"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="min-height:310px" data-link-to-post="true"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#936d70"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"customId":"cf51e9","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","customId":"43c50b","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"11px","right":"11px"}},"border":{"radius":"100px"},"typography":{"lineHeight":"1.1","textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|white"}},"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary","fontSize":"14","fontFamily":"oswald"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"textAlign":"center","customId":"c38376","fontSize":"14"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"customId":"271510","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"30","fontFamily":"oswald"} /-->

<!-- wp:group {"customId":"769bfd","style":{"spacing":{"blockGap":"5px"}},"fontSize":"20","fontFamily":"oswald","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-oswald-font-family has-20-font-size"><!-- wp:paragraph {"customId":"284278"} -->
<p><?php esc_html_e('by', 'dawn');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"customId":"4dbeb0","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","customId":"51c17a","style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"85f3f0","customPostsPerPage":2,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"50ffc9","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"small-featured-card","customId":"ef2334"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"81c1a7","layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"customId":"30efe2"} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%","customId":"078b3f","responsiveStyles":{"width":{"desktop":"75%"}}} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dawn_logo_background_neon-1024x269.jpg","dimRatio":40,"isUserOverlayColor":true,"minHeight":89,"minHeightUnit":"px","gradient":"primary","isDark":false,"customId":"df9c4c","responsiveStyles":{"borderRadius":{"desktop":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"borderWidth":{"desktop":{"top":"2px","right":"2px","bottom":"2px","left":"2px"}},"min_height":{"desktop":"89px"}},"style":{"border":{"radius":"10px","width":"2px"},"color":{"duotone":["#000000","#00b792"]},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","borderColor":"primary"} -->
<div class="wp-block-cover is-light has-border-color has-primary-border-color has-white-color has-text-color has-link-color" style="border-width:2px;border-radius:10px;min-height:89px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dawn_logo_background_neon-1024x269.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"customId":"df0372","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","customId":"9cf75d","responsiveStyles":{"font_size":{"desktop":"25px"},"textAlign":{"desktop":"center"}},"style":{"typography":{"fontSize":"25px"}},"fontFamily":"oswald"} -->
<p class="has-text-align-center has-oswald-font-family" style="font-size:25px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Get %1$sDAWN%2$s magazine, latest news and much more', 'dawn' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"customId":"44609c"} -->
<div class="wp-block-buttons"><!-- wp:button {"customId":"3f0464","responsiveStyles":{"line_height":{"desktop":"0.7"},"padding":{"desktop":{"left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"borderRadius":{"desktop":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"className":"is-style-fill","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"typography":{"lineHeight":"0.7"}},"fontSize":"22","fontFamily":"oswald"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-oswald-font-family has-22-font-size has-custom-font-size wp-element-button" href="https://stepfoxthemes.com/themes/dawn-magazine-theme/" style="border-radius:10px;padding-right:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg);line-height:0.7"><?php esc_html_e('BUY NOW', 'dawn');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"customId":"b0487d","responsiveStyles":{"margin":{"desktop":{"top":"20px","bottom":"20px"}}},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"customId":"c794f9","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"27"} -->
<p class="has-27-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest in Futurism', 'dawn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"customId":"ddad1a"} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33%","customId":"5c7624","responsiveStyles":{"width":{"desktop":"33%"}}} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"8","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"9b4efd","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"56436b","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"medium-featured-card","customId":"425a93"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%","customId":"f3aeb2"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":"15","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"9aa2e5","customPostsPerPage":6,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"67b5fc","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:template-part {"slug":"thumbnail-card","customId":"7ffd2a"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"customId":"929e17","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"customId":"b46f28","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"27"} -->
<p class="has-27-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest in Futurism', 'dawn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"146d5c","style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"customId":"aa93b7","layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"2cc52d","customPostsPerPage":3,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"a18043","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:template-part {"slug":"blog-roll-card","customId":"2935b6"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","customId":"fa3e03"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"customId":"d0a52e","responsiveStyles":{"padding":{"desktop":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"borderWidth":{"desktop":{"top":"2px","right":"2px","bottom":"2px","left":"2px"}}},"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:2px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"customId":"d5a94e","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"27"} -->
<h2 class="wp-block-heading has-27-font-size" style="text-transform:uppercase"><?php esc_html_e('Popular posts', 'dawn');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"db0d12","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"365fc9","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"medium-featured-card","customId":"a1b5ed"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"ff00c3","customPostsPerPage":4,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"f90a82","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"thumbnail-card","customId":"232dc0"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cover {"url":"https://stepfoxthemes.com/dawn-2/wp-content/uploads/sites/45/2017/06/dawn_logo_background_neon.jpg","hasParallax":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":276,"minHeightUnit":"px","gradient":"primary","customId":"952c89","align":"full","style":{"border":{"top":{"width":"1px","color":"var:preset|color|primary"},"right":{"width":"0px","style":"none"},"bottom":{"width":"1px","color":"var:preset|color|primary"},"left":{"width":"0px","style":"none"}},"color":{"duotone":["#000000","#00b792"]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;min-height:276px"><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(https://stepfoxthemes.com/dawn-2/wp-content/uploads/sites/45/2017/06/dawn_logo_background_neon.jpg)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"customId":"8e1273","responsiveStyles":{"margin":{"desktop":{"top":"20px","bottom":"20px"}}},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"customId":"b13fbf","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"27"} -->
<p class="has-27-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest in Futurism', 'dawn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"802d02","customPostsPerPage":5,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"b7a5cb","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":5}} -->
<!-- wp:template-part {"slug":"center-featured-card","customId":"7d0d1d"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"customId":"400efe","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"customId":"8d2295","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"27"} -->
<p class="has-27-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest in Futurism', 'dawn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"customId":"fce7a2"} -->
<div class="wp-block-columns"><!-- wp:column {"customId":"dc9e43"} -->
<div class="wp-block-column"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"38e92f","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"5178cc","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"blog-roll-card","customId":"108f17"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"customId":"3837b0"} -->
<div class="wp-block-column"><!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"0afd88","customPostsPerPage":3,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"ff4790","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"thumbnail-card","customId":"ce63da"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"customId":"edb805"} -->
<div class="wp-block-column"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"a36015","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"5dd3d9","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"medium-featured-card","customId":"8b6f56"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"customId":"e730b3"} -->
<div class="wp-block-column"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"cacd67","customPostsPerPage":4,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"d90363","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"customId":"8b5dd4","responsiveStyles":{"gap":{"desktop":"0px"}},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"customId":"69edda","responsiveStyles":{"width":{"desktop":"100%"},"padding":{"desktop":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"margin":{"desktop":{"top":"0px","bottom":"0px"}}},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"customId":"e8e18f","align":"full","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"16"} /-->

<!-- wp:group {"customId":"d9c85f","align":"full","style":{"spacing":{"blockGap":"5px"}},"fontSize":"14","fontFamily":"oswald","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-oswald-font-family has-14-font-size"><!-- wp:paragraph {"customId":"3f8ddc"} -->
<p><?php esc_html_e('by', 'dawn');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"customId":"3d8408","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"857cc3","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"customId":"c33f1d","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"27"} -->
<p class="has-27-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest in Futurism', 'dawn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"d7a0e4","responsiveStyles":{"margin":{"desktop":{"top":"20px","bottom":"20px"}}},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:columns {"customId":"62e500","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%","customId":"83db4d","responsiveStyles":{"width":{"desktop":"25%","mobile":"100%"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dawn_logo_background_neon-1024x269.jpg","dimRatio":60,"isUserOverlayColor":true,"minHeight":324,"minHeightUnit":"px","gradient":"primary","customId":"4f8ac8","responsiveStyles":{"borderRadius":{"desktop":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"borderWidth":{"desktop":{"top":"2px","right":"2px","bottom":"2px","left":"2px"}},"min_height":{"desktop":"324px"}},"style":{"border":{"radius":"10px","width":"2px"},"color":{"duotone":["#000000","#00b792"]},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","borderColor":"primary"} -->
<div class="wp-block-cover has-border-color has-primary-border-color has-white-color has-text-color has-link-color" style="border-width:2px;border-radius:10px;min-height:324px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dawn_logo_background_neon-1024x269.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"customId":"1335bc","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","customId":"d2a152","responsiveStyles":{"font_size":{"desktop":"25px"},"textAlign":{"desktop":"center"}},"style":{"typography":{"fontSize":"25px"}},"fontFamily":"oswald"} -->
<p class="has-text-align-center has-oswald-font-family" style="font-size:25px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Get %1$sDAWN%2$s magazine, latest news and much more', 'dawn' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"customId":"38336d"} -->
<div class="wp-block-buttons"><!-- wp:button {"customId":"796d87","responsiveStyles":{"line_height":{"desktop":"0.7"},"padding":{"desktop":{"left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"borderRadius":{"desktop":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"className":"is-style-fill","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"typography":{"lineHeight":"0.7"}},"fontSize":"22","fontFamily":"oswald"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-oswald-font-family has-22-font-size has-custom-font-size wp-element-button" href="https://stepfoxthemes.com/themes/dawn-magazine-theme/" style="border-radius:10px;padding-right:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg);line-height:0.7"><?php esc_html_e('BUY NOW', 'dawn');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","customId":"7addad","responsiveStyles":{"width":{"desktop":"50%","mobile":"100%"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"861889","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"8d6de4","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:embed {"url":"https://vimeo.com/136604696","type":"video","providerNameSlug":"vimeo","responsive":true,"customId":"298da3","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://vimeo.com/136604696
</div></figure>
<!-- /wp:embed -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","customId":"aea4d4","responsiveStyles":{"width":{"desktop":"25%","mobile":"100%"},"gap":{"desktop":"30px"}},"style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"efe9c6","customPostsPerPage":1,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"049fb6","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:template-part {"slug":"blog-roll-card","customId":"cb4b1c"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"14392c","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"customId":"127df1","responsiveStyles":{"text_transform":{"desktop":"uppercase"}},"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"27"} -->
<p class="has-27-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest in Futurism', 'dawn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"customId":"60ead0","style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"customId":"d7be3a","layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"32e43a","customPostsPerPage":4,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"b0ca3b","responsiveStyles":{"gap":{"desktop":"20px"}},"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:template-part {"slug":"blog-roll-card","customId":"47d480"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","customId":"41a3a0"} /-->