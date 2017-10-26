<?php
/**
 * Plugin Name: Obi Shortcodes
 * Author: Joe Izzard
 * Description: Adds a range of Shortcodes
 * Version: 1.0.0
 */

/* ----- Version ----- */
$Obiversion = '1.0.0';

/* ----- Register Style ----- */
function ObiShortcodes_register_style() {
  global $Obiversion;
  wp_register_style('obishortcodes', plugins_url('style.css', __FILE__), array(), $Obiversion);
  wp_enqueue_style('obishortcodes');
}
add_action('wp_enqueue_scripts', 'ObiShortcodes_register_style');

/* ----- Obiboxes ----- */
include('inc/boxes.php');

/* ----- Columns ----- */
include('inc/columns.php');

/* ----- Header ----- */
include('inc/basic-html/header.php');

/* ----- Link ----- */
include('inc/basic-html/link.php');

/* ----- Break ----- */
include('inc/basic-html/break.php');

/* ----- Hidden ----- */
include('inc/comment.php'); // Future Feature
