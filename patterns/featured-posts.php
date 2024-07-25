<?php
/**
 * Title: Featured posts
 * Slug: saija/featured-posts
 *
 * @package saija
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"
  style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}}} -->
  <div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
    <!-- wp:column {"width":"15%","style":{"border":{"right":{"width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|30","top":"0"}}}} -->
    <div class="wp-block-column"
      style="border-right-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--30);flex-basis:15%">
      <!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"36px","bottom":"0"},"margin":{"top":"-36px"}},"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group" style="margin-top:-36px;padding-top:36px;padding-bottom:0">
        <!-- wp:heading {"fontSize":"x-large"} -->
        <h2 class="wp-block-heading has-x-large-font-size">Latest Posts</h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
          <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View All</a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"left":"0"}}}} -->
    <div class="wp-block-column" style="padding-left:0">
      <!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[6]}},"namespace":"core/posts-list"} -->
      <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"top":{"style":"none","width":"0px"},"right":[],"bottom":{"color":"var:preset|color|base-2","width":"1px"},"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"
          style="border-top-style:none;border-top-width:0px;border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
          <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"1.5rem"}},"fontFamily":"body"} /-->

          <!-- wp:post-date {"fontSize":"medium"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
        <p class="has-base-2-color has-text-color has-link-color">No latest posts available</p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
