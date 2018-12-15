<?php

namespace App;

/**
 * Admin clean-up; removes unnecessary components
 */
add_action( 'admin_init', function() {
    /**
     * Dashboard widget de-register
     */
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
});

/**
 * Hide or create new menus and items in the admin bar.
 * Indentation shows sub-items.
 * @link https://codex.wordpress.org/Class_Reference/WP_Admin_Bar/add_menu
 * Code snippet from @link https://github.com/vincentorback/clean-wordpress-admin/blob/master/admin-bar.php
 */
add_action( 'wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );        // Remove the WordPress logo
    $wp_admin_bar->remove_menu( 'about' );          // Remove the about WordPress link
    $wp_admin_bar->remove_menu( 'wporg' );          // Remove the about WordPress link
    $wp_admin_bar->remove_menu( 'documentation' );  // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu( 'support-forums' ); // Remove the support forums link
    $wp_admin_bar->remove_menu( 'feedback' );       // Remove the feedback link
    $wp_admin_bar->remove_menu( 'updates' );        // Remove the updates link
    $wp_admin_bar->remove_menu( 'comments' );       // Remove the comments link
  }, 999);
  
/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
