<?php
/**
 * Title: Default archive template
 * Slug: saija/template-page-archive
 * Template Types: archive
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"
  style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large"} -->
  <h2 class="wp-block-heading alignwide has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">
    Blog</h2>
  <!-- /wp:heading -->

  <!-- wp:pattern {"slug":"saija/posts-2-col"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
