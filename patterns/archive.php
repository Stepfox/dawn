<?php
/**
 * Title: archive
 * Slug: dawn/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","customId":"6a751b"} /-->

<!-- wp:group {"customId":"70d3db","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":231,"minHeightUnit":"px","customGradient":"radial-gradient(rgba(0,0,0,0) 5%,rgb(0,0,0) 70%)","customId":"85207c","style":{"spacing":{"margin":{"top":"0px","bottom":"-30px"},"padding":{"top":"40px","bottom":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<div class="wp-block-cover has-white-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:-30px;padding-top:40px;padding-bottom:40px;min-height:231px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:radial-gradient(rgba(0,0,0,0) 5%,rgb(0,0,0) 70%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"customId":"81aecb","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"},"blockGap":"40px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:query-title {"type":"archive","textAlign":"left","font_size_tablet":"50px","font_size_mobile":"35px","customId":"cc4579","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"42","fontFamily":"montserrat"} /-->

<!-- wp:heading {"level":5,"customId":"9160df","style":{"typography":{"textTransform":"uppercase"}}} -->
<h5 class="wp-block-heading" style="text-transform:uppercase"><?php esc_html_e('Popular Posts This Week', 'dawn');?></h5>
<!-- /wp:heading -->

<!-- wp:group {"customId":"8de29f","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]},"customId":"5ac5d0","animation":"fadeIn","animation_delay":"0","animation_duration":"1","layout":{"type":"default"},"customPostsPerPage":"4"} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"345b99","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"185px","customId":"76d082","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true,"customId":"db8012","style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"fontSize":"20","fontFamily":"montserrat"} /-->

<!-- wp:read-more {"content":"Read More","customId":"b70c51","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"tablet_padding":{"top":"20px","left":"20px","right":"20px","bottom":"20px"},"customId":"1c773e","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"customId":"67bf9e","layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"customId":"786db8","custom_css":"this_block{z-index:1;}","animation":"fadeInUp","animation_delay":"0","animation_duration":"1","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:columns {"customId":"0ec81d"} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%","width_desktop":"75%","customId":"52bbe7","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--xs);flex-basis:75%"><!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"9fb88a","layout":{"type":"default"},"customPostsPerPage":9} -->
<div class="wp-block-query"><!-- wp:post-template {"customId":"5a549e","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:template-part {"slug":"blog-roll","customId":"4923b3"} /-->
<!-- /wp:post-template -->

<!-- wp:stepfox/query-loop-load-more {"width_desktop":"100%","customId":"34c2cc","custom_css":"this_block{text-align:center;}","backgroundColor":"primary","textColor":"white","fontFamily":"montserrat","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"10px","bottom":"10px"}},"typography":{"textTransform":"uppercase"}}} -->
<button type="button" class="wp-block-stepfox-query-loop-load-more query-loop-load-more-button has-white-color has-primary-background-color has-text-color has-background has-link-color has-montserrat-font-family" style="padding-top:10px;padding-bottom:10px;text-transform:uppercase">Load More</button>
<!-- /wp:stepfox/query-loop-load-more --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","width_desktop":"25%","customId":"fb3973","style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/300x600-dawn-ad.jpg","dimRatio":0,"customOverlayColor":"#595761","isUserOverlayColor":false,"minHeight":625,"minHeightUnit":"px","customId":"808ddc"} -->
<div class="wp-block-cover" style="min-height:625px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#595761"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/300x600-dawn-ad.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","customId":"3bc9c0","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"14","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"customId":"18d5b7","customPostsPerPage":4} -->
<div class="wp-block-query"><!-- wp:heading {"customId":"6e0596","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"24","fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-montserrat-font-family has-24-font-size"><?php esc_html_e('LATEST NEWS', 'dawn');?></h2>
<!-- /wp:heading -->

<!-- wp:post-template {"customId":"135116"} -->
<!-- wp:template-part {"slug":"small-featured","customId":"918525"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","customId":"731c57","tablet_justify":"flex-start"} /-->