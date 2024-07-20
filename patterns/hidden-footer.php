<?php
/**
 * Title: Footer
 * Slug: saija/hidden-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package saija
 * @since 1.0.0
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(353deg,rgb(223,249,255) 13%,rgba(247,223,223,0.61) 36%,rgb(249,249,249) 66%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background"
  style="background:linear-gradient(353deg,rgb(223,249,255) 13%,rgba(247,223,223,0.61) 36%,rgb(249,249,249) 66%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%">
      <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
      <div class="wp-block-group">
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
        <div class="wp-block-group">
          <!-- wp:heading {"className":"has-medium-font-size","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large","fontFamily":"heading"} -->
          <h2 class="wp-block-heading has-medium-font-size has-heading-font-family has-large-font-size"
            style="font-style:normal;font-weight:600">Connect</h2>
          <!-- /wp:heading -->

          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
          <div class="wp-block-group">
            <!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
            <!-- wp:navigation-link {"label":"Team","url":"#"} /-->

            <!-- wp:navigation-link {"label":"History","url":"#"} /-->

            <!-- wp:navigation-link {"label":"Careers","url":"#"} /-->
            <!-- /wp:navigation -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
        <div class="wp-block-group">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
          <div class="wp-block-group">
            <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
            <h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:600">Explore</h2>
            <!-- /wp:heading -->

            <!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
            <!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->

            <!-- wp:navigation-link {"label":"Terms and Conditions","url":"#"} /-->

            <!-- wp:navigation-link {"label":"Contact Us","url":"#"} /-->
            <!-- /wp:navigation -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"10%"} -->
    <div class="wp-block-column" style="flex-basis:10%"></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%">
      <!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
      <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
        <!-- wp:heading {"style":{"typography":{"fontSize":"7rem"}},"fontFamily":"inter"} -->
        <h2 class="wp-block-heading has-inter-font-family" style="font-size:7rem">🌏</h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"typography":{"fontSize":"7rem"}},"fontFamily":"inter"} -->
        <h2 class="wp-block-heading has-inter-font-family" style="font-size:7rem">04:12</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"right","fontSize":"x-large"} -->
        <p class="has-text-align-right has-x-large-font-size">Yogyakarta, Indonesia</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0"}}}} -->
  <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:0">
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-2","fontSize":"small"} -->
    <p class="has-contrast-2-color has-text-color has-link-color has-small-font-size">
      Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>. <?php echo esc_html__( 'Copyright &copy;', 'saija' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'saija' ) ); ?></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
