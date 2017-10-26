<?php

/*
Obi Shortcodes
Boxes Module
Version: 1.0.0
*/

/* ----- Main Arrays ----- */
// Attributes
$Obis_boxes_attArray = array(
  'header' => false,
  'theme' => 'light',
  'class' => null,
  'id' => null,
  'link' => null,
);

// Box Types
$Obis_boxes_typesArray = array(
  'warning',
  'info',
  'note'
);

// Themes
$Obis_boxes_themesArray = array(
  'light',
  'dark',
  'boxed'
);

/* ----- Worker Function ----- */
function obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link) {
  // Check for valid input
  if (!obishortcodes_boxes_validType($box_type)) { return; }
  if (!obishortcodes_boxes_validTheme($theme)) { return; }

  // Start building output
  $output = '<div class="obibox-' . $box_type . '-' . $theme . ' ';

  // Add class?
  if (!att_blank($class)) {
    $output .= $class;
  }
  $output .= '" ';

  // Add an ID?
  if (!att_blank($id)) {
    $output .= ' id="' . $id . '" ';
  }

  // Close the Div
  $output .= '>';

  // Add the header
  if (!att_blank($link)) {
    $output .= '<a href="' . $link . '"><h4>' . $header . '</h4></a>';
  } else {
    $output .= '<h4>' . $header . '</h4>';
  }

  // Add the content
  $output .= '<span>' . do_shortcode($content) . '</span>';

  // Close the Div
  $output .= '</div>';

  return $output;
}

/* ----- Valid Input Checks ----- */
// Type
function obishortcodes_boxes_validType($box_type) {
  global $Obis_boxes_typesArray;

  if (in_array($box_type, $Obis_boxes_typesArray, true)) {
    return true;
  } else {
    error_log('Obi Shortcodes - Boxes: Box Type Not Valid: ' . $box_type);
    return false;
  }
}

// Theme
function obishortcodes_boxes_validTheme($theme) {
  global $Obis_boxes_themesArray;

  if (in_array($theme, $Obis_boxes_themesArray, true)) {
    return true;
  } else {
    error_log('Obi Shortcodes - Boxes: Box Theme Not Valid: ' . $theme);
    return false;
  }
}

/* ----- Shortcode Functions ----- */
/* --- General --- */
// Warning
function obishortcodes_boxes_generalWarning($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'warning';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Note
function obishortcodes_boxes_generalNote($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'note';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Info
function obishortcodes_boxes_generalInfo($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'info';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

/* --- Light --- */
// Warning
function obishortcodes_boxes_lightWarning($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'warning';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'light';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Note
function obishortcodes_boxes_lightNote($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'note';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'light';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Info
function obishortcodes_boxes_lightInfo($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'info';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'light';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

/* --- Dark --- */
// Warning
function obishortcodes_boxes_darkWarning($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'warning';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'dark';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Note
function obishortcodes_boxes_darkNote($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'note';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'dark';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Info
function obishortcodes_boxes_darkInfo($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'info';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'dark';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

/* --- Boxed --- */
// Warning
function obishortcodes_boxes_boxedWarning($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'warning';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'boxed';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Note
function obishortcodes_boxes_boxedNote($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'note';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'boxed';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

// Info
function obishortcodes_boxes_boxedInfo($atts, $content = null) {
  global $Obis_boxes_attArray;
  extract(shortcode_atts($Obis_boxes_attArray, $atts));

  $box_type = 'info';
  if (att_blank($header)) {
    $header = ucfirst($box_type);
  }

  $theme = 'boxed';

  return obishortcodes_boxes_worker($box_type, $theme, $header, $content, $class, $id, $link);
}

/* ----- Register Shortcodes ----- */
function obishortcode_register_boxes() {
  $cheatVar = 'general';
  add_shortcode('warning', 'obishortcodes_boxes_' . $cheatVar . 'Warning');
  add_shortcode('note', 'obishortcodes_boxes_' . $cheatVar . 'Note');
  add_shortcode('info', 'obishortcodes_boxes_' . $cheatVar . 'Info');

  $cheatVar = 'light';
  add_shortcode('warning_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Warning');
  add_shortcode('note_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Note');
  add_shortcode('info_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Info');

  $cheatVar = 'dark';
  add_shortcode('warning_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Warning');
  add_shortcode('note_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Note');
  add_shortcode('info_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Info');

  $cheatVar = 'boxed';
  add_shortcode('warning_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Warning');
  add_shortcode('note_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Note');
  add_shortcode('info_' . $cheatVar, 'obishortcodes_boxes_' . $cheatVar . 'Info');
}
add_action('init', 'obishortcode_register_boxes');
