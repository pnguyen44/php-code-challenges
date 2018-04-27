<?php
// 7 kyu - Rotate to the max
// Task
// Given a number, return the maximum value by rearranging it's digits.
//
// Examples:
//
// (123) => 321 (786) => 876 ("001") => 100 (999) => 999 (10543) => 54310

function rotate_to_max($n): int {
  $result = str_split($n);
  rsort($result);
  return implode($result);
}

?>
