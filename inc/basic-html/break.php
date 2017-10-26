<?php

/*
Obi Shortcodes
Break Module
Version: 1.0.0
*/

/* ----- Main Function ----- */
function obishortcodes_break_worker($hr = false) {
  $output = '<br/>';

  if ($hr == true) {
    $output .= '<hr/><br/>';
  }

  return $output;
}

/* ----- Without Line ----- */
function obishortcodes_break_br() {
  return obishortcodes_break_worker(false);
}

/* ----- With Line ----- */
function obishortcodes_break_hr() {
  return obishortcodes_break_worker(true);
}

/* ----- Register Shortcodes ----- */
function obishortcode_register_break() {
  add_shortcode('br', 'obishortcodes_break_br');
  add_shortcode('break', 'obishortcodes_break_br');
  add_shortcode('hr', 'obishortcodes_break_hr');
  add_shortcode('line', 'obishortcodes_break_hr');
}
add_action('init', 'obishortcode_register_break');
