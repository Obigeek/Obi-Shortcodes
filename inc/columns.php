<?php

/*
Obi Shortcodes
Columns Module
Version: 1.0.0
*/

/* ---------- Main Atts Array ---------- */
$obis_col_attsArray = array(
  'last' => false,
  'class' => false,
  'id' => false,
  'margin' => 'true',
  'padding' => false
);

/* ---------- Main Column Functions ---------- */

// Build a column
function obishortcodes_columns_worker($ident, $content, $last = false, $class = false, $id = false, $padding = false, $margin = false ) {
  // Ensure that the ident is valid
  if (!obishortcodes_column_identCheck($ident)) { return; }

  // Add margin to the ident?
  if ($margin == 'true') {
    $ident .= '_margin';
  }

  // Start building the output
  $output = '<div class="' . $ident . ' ';

  // Do we need to add another class?
  if ($last == 'true') {
    $output .= 'last_column ';
  }

  if ($class !== false) {
    $output .= $class . '" ';
  } else {
    $output .= '" ';
  }

  // Do we need to add an id
  if ($id !== false) {
    $output .= 'id="' . $id . '" ';
  }

  // Add specific padding?
  if ($padding !== false) {
    if ($padding == 'true') {
      $output .= 'style="padding: 5px !important;">';
    } else {
      $output .= 'style="padding: ' . $padding . '!important;">';
    }
  } else {
    $output .= '>';
  }

  // Add the Content
  $output .= do_shortcode($content);

  // Close the Column
  $output .= '</div>';

  // Is it last?
  if ($last == 'true') { $output .= obishortcodes_columns_clear(); }

  // Return
  return $output;

}

// Column ident Check
function obishortcodes_column_identCheck($ident) {
  $array = array(
    'full_width',
    'one_half',
    'one_third',
    'two_third',
    'one_fourth',
    'three_fourth',
    'one_fifth',
    'two_fifth',
    'three_fifth',
    'four_fifth',
    'one_sixth',
    'five_sixth'
  );

  if (in_array($ident, $array, true)) {
    return true;
  } else {
    error_log('Obishortcodes Columns Module: Ident not in array - ' . $ident);
    return false;
  }
}

/* ----- Clear Columns ----- */
function obishortcodes_columns_clear() {
  return '<div class="clear_column"></div>';
}

/* ----- Full Width ----- */
function obishortcodes_columns_full($atts, $content = null) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'full_width';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

/* ----- Half ----- */
// -- One Half
function obishortcodes_columns_half($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_half';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}
// -- Last
function obishortcodes_columns_halfLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_half';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

/* ----- Third ----- */
// One Third
function obishortcodes_columns_oneThird($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_third';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Third
function obishortcodes_columns_twoThird($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'two_third';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// One Third Last
function obishortcodes_columns_oneThirdLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_third';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Third Last
function obishortcodes_columns_twoThirdLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'two_third';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

/* ----- Fourth ----- */
// One Fourth
function obishortcodes_columns_oneFourth($atts, $content = null) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_fourth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Fourth
function obishortcodes_columns_twoFourth($atts, $content = null) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_half';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Three Fourth
function obishortcodes_columns_threeFourth($atts, $content = null) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'three_fourth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// One Fourth Last
function obishortcodes_columns_oneFourthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_fourth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Fourth Last
function obishortcodes_columns_twoFourthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_half';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Three Fourth Last
function obishortcodes_columns_threeFourthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'three_fourth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

/* ----- Fifth ----- */
// One Fifth
function obishortcodes_columns_oneFifth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Fifth
function obishortcodes_columns_twoFifth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'two_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Three Fifth
function obishortcodes_columns_threeFifth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'three_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Four Fifth
function obishortcodes_columns_fourFifth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'four_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// One Fifth Last
function obishortcodes_columns_oneFifthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Fifth Last
function obishortcodes_columns_twoFifthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'two_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Three Fifth Last
function obishortcodes_columns_threeFifthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'three_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Four Fifth Last
function obishortcodes_columns_fourFifthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'four_fifth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

/* ----- Sixth ----- */
// One Sixth
function obishortcodes_columns_oneSixth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_sixth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Sixth
function obishortcodes_columns_twoSixth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_third';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Three Sixth
function obishortcodes_columns_threeSixth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_half';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Four Sixth
function obishortcodes_columns_fourSixth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'two_third';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Five Sixth
function obishortcodes_columns_fiveSixth($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'five_sixth';

  // No content?
  if (!isset($content)) { return; }

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// One Sixth Last
function obishortcodes_columns_oneSixthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_sixth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Two Sixth Last
function obishortcodes_columns_twoSixthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_third';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Three Sixth Last
function obishortcodes_columns_threeSixthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'one_half';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Four Sixth Last
function obishortcodes_columns_fourSixthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'two_third';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

// Five Sixth Last
function obishortcodes_columns_fiveSixthLast($atts, $content = nul) {
  // Extract stuff
  global $obis_col_attsArray;
  extract(shortcode_atts($obis_col_attsArray, $atts));

  // Set the ident
  $ident = 'five_sixth';

  // No content?
  if (!isset($content)) { return; }

  // Force Last
  $last = true;

  // Output stuff
  return obishortcodes_columns_worker($ident, $content, $last, $class, $id, $padding, $margin);
}

/* ----- Register Shortcodes ----- */
function obishortcode_register_columns() {
  add_shortcode('clear_column', 'obishortcodes_columns_clear');
  add_shortcode('clear_columns', 'obishortcodes_columns_clear');
  add_shortcode('one_half', 'obishortcodes_columns_half');
  add_shortcode('one_half_last', 'obishortcodes_columns_halfLast');
  add_shortcode('one_third', 'obishortcodes_columns_oneThird');
  add_shortcode('two_third', 'obishortcodes_columns_twoThird');
  add_shortcode('one_third_last', 'obishortcodes_columns_oneThirdLast');
  add_shortcode('two_third_last', 'obishortcodes_columns_twoThirdLast');
  add_shortcode('one_fourth', 'obishortcodes_columns_oneFourth');
  add_shortcode('two_fourth', 'obishortcodes_columns_twoFourth');
  add_shortcode('three_fourth', 'obishortcodes_columns_threeFourth');
  add_shortcode('one_fourth_last', 'obishortcodes_columns_oneFourthLast');
  add_shortcode('two_fourth_last', 'obishortcodes_columns_twoFourthLast');
  add_shortcode('three_fourth_last', 'obishortcodes_columns_threeFourthLast');
  add_shortcode('one_fifth', 'obishortcodes_columns_oneFifth');
  add_shortcode('two_fifth', 'obishortcodes_columns_twoFifth');
  add_shortcode('three_fifth', 'obishortcodes_columns_threeFifth');
  add_shortcode('four_fifth', 'obishortcodes_columns_fourFifth');
  add_shortcode('one_fifth_last', 'obishortcodes_columns_oneFifthLast');
  add_shortcode('two_fifth_last', 'obishortcodes_columns_twoFifthLast');
  add_shortcode('three_fifth_last', 'obishortcodes_columns_threeFifthLast');
  add_shortcode('four_fifth_last', 'obishortcodes_columns_fourFifthLast');
  add_shortcode('one_sixth', 'obishortcodes_columns_oneSixth');
  add_shortcode('two_sixth', 'obishortcodes_columns_twoSixth');
  add_shortcode('three_sixth', 'obishortcodes_columns_threeSixth');
  add_shortcode('four_sixth', 'obishortcodes_columns_fourSixth');
  add_shortcode('five_sixth', 'obishortcodes_columns_fiveSixth');
  add_shortcode('one_sixth_last', 'obishortcodes_columns_oneSixthLast');
  add_shortcode('two_sixth_last', 'obishortcodes_columns_twoSixthLast');
  add_shortcode('three_sixth_last', 'obishortcodes_columns_threeSixthLast');
  add_shortcode('four_sixth_last', 'obishortcodes_columns_fourSixthLast');
  add_shortcode('five_sixth_last', 'obishortcodes_columns_fiveSixthLast');
}
add_action('init', 'obishortcode_register_columns');
