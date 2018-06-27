<?php
// 7 kyu - Sectional Array Sort
// In this kata you are given an array to sort but you're expected to start sorting from a specific position of the array (in ascending order) and optionally you're given the number of items to sort.
//
// Examples:
// sect_sort([1, 2, 5, 7, 4, 6, 3, 9, 8], 2) //=> [1, 2, 3, 4, 5, 6, 7, 8, 9]
// sect_sort([9, 7, 4, 2, 5, 3, 1, 8, 6], 2, 5) //=> [9, 7, 1, 2, 3, 4, 5, 8, 6]
// Documentation:
// sect_sort($array, $start, $length);
// array - array to sort
// start - position to begin sorting
// length - number of items to sort (optional)
// if the length argument is not passed or is zero, you sort all items to the right of the start postiton in the array

function sect_sort($array, $start, $len = null) {
  $len = is_null($len) ? count(func_get_arg(0)) + $start : $len;
  $arr = array_slice($array, $start, $len);
  usort($arr, function($a,$b) {
    return $a < $b ? -1 : 1;
  });

  return array_merge(
    array_slice($array, 0, $start),
    $arr,
    array_slice($array, $len + $start, count($array) - $len)
  );
}

// Alternative Solution:
// function sect_sort($array, $start, $length = NULL)
// {
//     $length = is_null($length) ? count($array) - $start : $length;
//     $arr = array_slice($array, $start, $length);
//     sort($arr);
//     array_splice($array, $start, $length, $arr);
//     return $array;
// }

?>
