<?php

/*
Obi Shortcodes
Break Module
Version: 1.0.0
*/

/* ----- Main Function ----- */
function obishortcodes_comment_worker() {
  return null;
}

/* ----- Register Shortcodes ----- */
function obishortcode_register_comments() {
  add_shortcode('comment', 'obishortcodes_comment_worker');
  add_shortcode('c', 'obishortcodes_comment_worker');
}
add_action('init', 'obishortcode_register_comments');
