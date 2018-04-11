<?php
// 6 kyu - Find the odd int
// Given an array, find the int that appears an odd number of times.
//
// There will always be only one integer that appears an odd number of times.

function findIt(array $seq) : int {
    $unique = array_unique($seq);
    $result = array_filter(array_count_values($seq), function($v) {
      return $v % 2 !== 0;
    });
    return array_keys($result)[0];
  }

// Alternative Solution:
// function findIt(array $seq) : int {
//     $nums = array_count_values($seq);
//     foreach ($nums as $key => $val) {
//       if ($val % 2) {
//         return $key;
//       }
//     }
// }

?>
