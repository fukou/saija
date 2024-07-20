<?php
/**
 * Title: Featured works with date and cover
 * Slug: saija/featured-work
 *
 * @package saija
 * @since 1.0.0
 */
?>

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list"} -->
<div class="wp-block-query"><!-- wp:post-template -->
  <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"},"padding":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"width":"1px"}}}} -->
  <div class="wp-block-columns" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:column {"width":"30%"} -->
    <div class="wp-block-column" style="flex-basis:30%">
      <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"35%"}},"layout":{"type":"default"}} -->
      <div class="wp-block-group">
        <!-- wp:post-date {"format":"Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large","fontFamily":"heading"} /-->

        <!-- wp:paragraph -->
        <p></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":""} -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
      <div class="wp-block-group">
        <!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"customOverlayColor":"#eeeeee","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"width":"1px","radius":"16px"}}} -->
        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"
          style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
          <span aria-hidden="true" class="wp-block-cover__background has-background-dim"
            style="background-color:#eeeeee"></span>
          <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group">
                <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.75rem","fontStyle":"normal","fontWeight":"600"}}} /-->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-excerpt {"excerptLength":10,"style":{"typography":{"fontSize":"1rem"}}} /-->
          </div>
        </div>
        <!-- /wp:cover -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
  <!-- /wp:post-template -->

  <!-- wp:query-no-results -->
  <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
  <p></p>
  <!-- /wp:paragraph -->
  <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
 