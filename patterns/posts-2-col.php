<?php
/**
 * Title: List of posts, 2 columns
 * Slug: saija/posts-2-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":14,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[6]},"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
  <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
  <!-- wp:cover {"useFeaturedImage":true,"dimRatio":30,"overlayColor":"base-2","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":false,"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"
    style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
    <span aria-hidden="true"
      class="wp-block-cover__background has-base-2-background-color has-background-dim-30 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
      <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->
    </div>
  </div>
  <!-- /wp:cover -->

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
  <div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:post-date /-->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
      <!-- wp:post-terms {"term":"category","className":"is-style-pill","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:post-excerpt {"moreText":""} /-->

  <!-- wp:spacer {"height":"1rem"} -->
  <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  <!-- /wp:post-template -->

  <!-- wp:query-no-results -->
  <!-- wp:paragraph -->
  <p>No results found.</p>
  <!-- /wp:paragraph -->
  <!-- /wp:query-no-results -->

  <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
  <!-- wp:query-pagination-previous /-->

  <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
