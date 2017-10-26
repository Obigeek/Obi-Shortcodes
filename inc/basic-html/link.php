<?php

/*
Obi Shortcodes
Link Module
Version: 1.0.0
*/

/* ----- Main Function ----- */
function obishortcodes_link_main($atts, $content = null) {
  extract(shortcode_atts(array(
    'a' => false,
    'class' => false,
    'id' => false
  ), $atts));

  // Ensure theres some content
  if (!isset($content)) {
    return;
  }

  // Ensures theres a link
  if ($a == false) {
    return;
  }

  // Build the output
  $output = '<a href="' . $a . '" ';

  // Add a class?
  if ($class != false) {
    $output .= 'class="' . $class . '" ';
  }

  // Add an ID
  if ($id != false) {
    $output .= 'id="' . $id . '" ';
  }

  // Add the closing bracket
  $output .= '>';

  // Add the content
  $output .= do_shortcode($content);

  // Close up
  $output .= '</a>';

  // Return
  return $output;
}

/* ----- Register Shortcodes ----- */
function obishortcode_register_link() {
  add_shortcode('link', 'obishortcodes_link_main');
  add_shortcode('a', 'obishortcodes_link_main');
}
add_action('init', 'obishortcode_register_link');
