<?php

/*
Attribute Blank Function
Version: 1.0.0
*/

if (!function_exists('att_blank')) {
  function att_blank($value) {
    if ($value == '') {
      return true;
    } else {
      return false;
    }
  }
}
