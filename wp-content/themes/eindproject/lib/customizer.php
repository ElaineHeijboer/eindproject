<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

    //Add option for logo upload
    $wp_customize->add_section('site_logo', array(
        'title' => __('Logo', 'sage'),
        'priority' => 30,
        'description' => __('Upload a logo to replace the default site name and description in the header', 'sage')
    ));
    $wp_customize->add_setting('site_logo');

    $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'site_logo', array(
        'label' => __('Logo', 'sage'),
        'section' => 'title_tagline',
        'settings' => 'site_logo',
    )));
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
