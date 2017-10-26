<?php

/*
Obi Shortcodes
Header Module
Version: 1.0.0
*/

/* ---------- Main Atts Array ---------- */
$obis_head_attsArray = array(
  'class' => false,
  'id' => false,
  'link' => false
);

/* ----- Main Function ----- */
function obishortcodes_header_worker($header, $content, $link = false, $class = false, $id = false) {
  // Check Header tag is valid
  if (!obishortcodes_header_identCheck($header)) { return; }

  // Start building the output
  if ($link !== false) {
    $output = '<a href="' . $link . '"><' . $header . ' ';
  } else {
    $output = '<' . $header . ' ';
  }

  // Do we need to add an id?
  if ($id !== false) {
    $output .= 'id="' . $id . '" ';
  }

  // Do we need to add a class?
  if ($class !== false) {
    $output .= 'class="' . $class . '">';
  } else {
    $output .= '>';
  }

  // Add the content
  $output .= do_shortcode($content);

  // Close the header
  $output .= '</' . $header . '>';
  if ($link !== false) {
    $output .= '</a>';
  }

  // Return
  return $output;
}

/* ----- Ident Checker ----- */
function obishortcodes_header_identCheck($ident) {
  $array = array(
    'h1',
    'h2',
    'h3',
    'h4',
    'h5',
    'h6'
  );

  if (in_array($ident, $array, true)) {
    return true;
  } else {
    error_log('Obishortcodes Header Module: Ident not in array - ' . $ident);
    return false;
  }
}

/* ----- Shortcode Functions ----- */
// H1
function obishortcodes_header_h1($atts, $content = null) {
  // Extract Stuff
  global $obis_head_attsArray;
  extract(shortcode_atts($obis_head_attsArray, $atts));

  // Ensure Content is set
  if (!isset($content)) { return; }

  // Set the Header Type
  $header = 'h1';

  // Call worker funciton
  return obishortcodes_header_worker($header, $content, $link, $class, $id);
}

// H2
function obishortcodes_header_h2($atts, $content = null) {
  // Extract Stuff
  global $obis_head_attsArray;
  extract(shortcode_atts($obis_head_attsArray, $atts));

  // Ensure Content is set
  if (!isset($content)) { return; }

  // Set the Header Type
  $header = 'h2';

  // Call worker funciton
  return obishortcodes_header_worker($header, $content, $link, $class, $id);
}

// H3
function obishortcodes_header_h3($atts, $content = null) {
  // Extract Stuff
  global $obis_head_attsArray;
  extract(shortcode_atts($obis_head_attsArray, $atts));

  // Ensure Content is set
  if (!isset($content)) { return; }

  // Set the Header Type
  $header = 'h3';

  // Call worker funciton
  return obishortcodes_header_worker($header, $content, $link, $class, $id);
}

// H4
function obishortcodes_header_h4($atts, $content = null) {
  // Extract Stuff
  global $obis_head_attsArray;
  extract(shortcode_atts($obis_head_attsArray, $atts));

  // Ensure Content is set
  if (!isset($content)) { return; }

  // Set the Header Type
  $header = 'h4';

  // Call worker funciton
  return obishortcodes_header_worker($header, $content, $link, $class, $id);
}

// H5
function obishortcodes_header_h5($atts, $content = null) {
  // Extract Stuff
  global $obis_head_attsArray;
  extract(shortcode_atts($obis_head_attsArray, $atts));

  // Ensure Content is set
  if (!isset($content)) { return; }

  // Set the Header Type
  $header = 'h5';

  // Call worker funciton
  return obishortcodes_header_worker($header, $content, $link, $class, $id);
}

// H6
function obishortcodes_header_h6($atts, $content = null) {
  // Extract Stuff
  global $obis_head_attsArray;
  extract(shortcode_atts($obis_head_attsArray, $atts));

  // Ensure Content is set
  if (!isset($content)) { return; }

  // Set the Header Type
  $header = 'h6';

  // Call worker funciton
  return obishortcodes_header_worker($header, $content, $link, $class, $id);
}

/* ----- Register Shortcodes ----- */
function obishortcode_register_header() {
  add_shortcode('h1', 'obishortcodes_header_h1');
  add_shortcode('h2', 'obishortcodes_header_h2');
  add_shortcode('h3', 'obishortcodes_header_h3');
  add_shortcode('h4', 'obishortcodes_header_h4');
  add_shortcode('h5', 'obishortcodes_header_h5');
  add_shortcode('h6', 'obishortcodes_header_h6');
}
add_action('init', 'obishortcode_register_header');
