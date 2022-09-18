<?php
/**
 * Enqueue Parent & Child Both Theme's CSS
 */
add_action(
  'wp_enqueue_scripts',
  function () {
    /**
     * Parent Theme CSS
     */
    wp_enqueue_style(
      'parent-theme-style',
      get_template_directory_uri() . '/style.css'
    );
    /**
     * Child Theme CSS
     */
    wp_enqueue_style(
      'child-theme-style',
      get_stylesheet_directory_uri() . '/style.css',
      ['parent-theme-style']
    );
  }
);