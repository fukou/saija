<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package saija
 * @since 1.0.0
 */

/**
 * Register block styles.
 */

if (!function_exists('saija_block_styles')):
  /**
   * Register custom block styles
   *
   * @since 1.0.0
   * @return void
   */
  function saija_block_styles()
  {

    register_block_style(
      'core/details',
      array(
        'name' => 'arrow-icon-details',
        'label' => __('Arrow icon', 'saija'),
        /*
         * Styles for the custom Arrow icon style of the Details block
         */
        'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
      )
    );
    register_block_style(
      'core/post-terms',
      array(
        'name' => 'pill',
        'label' => __('Pill', 'saija'),
        /*
         * Styles variation for post terms
         * https://github.com/WordPress/gutenberg/issues/24956
         */
        'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
          color: var(--wp--preset--color--white);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
          text-decoration: none !important;
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-2);
          color: var(--wp--preset--color--white);
				}',
      )
    );
    register_block_style(
      'core/list',
      array(
        'name' => 'checkmark-list',
        'label' => __('Checkmark', 'saija'),
        /*
         * Styles for the custom checkmark list block style
         * https://github.com/WordPress/gutenberg/issues/51480
         */
        'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
      )
    );
    register_block_style(
      'core/navigation-link',
      array(
        'name' => 'arrow-link',
        'label' => __('With arrow', 'saija'),
        /*
         * Styles for the custom arrow nav link block style
         */
        'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
      )
    );
    register_block_style(
      'core/heading',
      array(
        'name' => 'asterisk',
        'label' => __('With asterisk', 'saija'),
        'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
      )
    );
  }
endif;

add_action('init', 'saija_block_styles');

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 * @return void
 */
if (!function_exists('saija_stylesheets')):
  function saija_stylesheets()
  {
    wp_enqueue_style(
      'saija-style',
      get_stylesheet_uri(),
      [],
      wp_get_theme()->get('Version')
    );
  }
endif;

add_action('wp_enqueue_scripts', 'saija_stylesheets');

if (!function_exists('saija_block_stylesheets')):
  /**
   * Enqueue custom block stylesheets
   *
   * @since 1.0.0
   * @return void
   */
  function saija_block_stylesheets()
  {
    /**
     * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
     * for a specific block. These will only get loaded when the block is rendered
     * (both in the editor and on the front end), improving performance
     * and reducing the amount of data requested by visitors.
     *
     * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
     */
    wp_enqueue_block_style(
      'core/button',
      array(
        'handle' => 'saija-button-style-outline',
        'src' => get_parent_theme_file_uri('assets/css/button-outline.css'),
        'ver' => wp_get_theme(get_template())->get('Version'),
        'path' => get_parent_theme_file_path('assets/css/button-outline.css'),
      )
    );
  }
endif;

add_action('init', 'saija_block_stylesheets');


/**
 * Enqueue the marquee JS files.
 *
 * @since 1.0.0
 * @return void
 */
if (!function_exists('saija_marquee_scripts')):
  function saija_marquee_scripts()
  {

    wp_enqueue_script('marquee', get_theme_file_uri('assets/js/marquee.js'), array(), wp_get_theme('saija')->get('Version'), array('in_footer' => true));

  }
endif;
add_action('wp_enqueue_scripts', 'saija_marquee_scripts');

/**
 * Enqueue the clock JS files.
 *
 * @since 1.0.0
 * @return void
 */
if (!function_exists('saija_clock_scripts')):
  function saija_clock_scripts()
  {

    wp_enqueue_script('clock', get_theme_file_uri('assets/js/clock.js'), array(), wp_get_theme('saija')->get('Version'), array('in_footer' => true));

  }
endif;
add_action('wp_enqueue_scripts', 'saija_clock_scripts');

/**
 * Enqueue the marquee JS files.
 *
 * @since 1.0.0
 * @return void
 */
if (!function_exists('saija_header_scripts')):
  function saija_header_scripts()
  {

    wp_enqueue_script('header', get_theme_file_uri('assets/js/header-sticky.js'), array(), wp_get_theme('saija')->get('Version'), array('in_footer' => true));

  }
endif;
add_action('wp_enqueue_scripts', 'saija_header_scripts');
