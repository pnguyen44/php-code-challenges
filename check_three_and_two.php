<?php
// 7 kyu - Check three and two
// Given an array with exactly 5 strings "a", "b" or "c" (chars in Java, characters in Fortran), check if the array contains three and two of the same values.
//
// Examples
// ["a", "a", "a", "b", "b"] ==> true  // 3x "a" and 2x "b"
// ["a", "b", "c", "b", "c"] ==> false // 1x "a", 2x "b" and 2x "c"
// ["a", "a", "a", "a", "a"] ==> false // 5x "a"

function checkThreeAndTwo($arr) {
  $unique = array_unique($arr);
  foreach($unique as $l) {
    $count = count(array_filter($arr, function($x) use($l){
      return $x ===$l;
    }));
    if ($count !== 2 && $count !== 3) return false;
  }
  return true;
}

// Alternative Solutions:
// function checkThreeAndTwo($arr) {
//   $counts = array_count_values($arr);
//   return count($counts) === 2 && max($counts) === 3;
// }

// function checkThreeAndTwo($arr) {
//   return empty(array_diff(array(2, 3), array_count_values($arr)));
// }
?>
