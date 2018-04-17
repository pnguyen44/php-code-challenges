<?php
// 6 kyu - Organise duplicate numbers in list
// Sam is an avid collector of numbers. Every time he finds a new number he throws it on the top of his number-pile. Help Sam organise his collection so he can take it to the International Number Collectors Conference in Cologne.
//
// Given an array of numbers, your function should return an array of arrays, where each subarray contains all the duplicates of a particular number. Subarrays should be in the same order as the first occurence of the number they contain:
//
// group([3, 2, 6, 2, 1, 3])
// >>> [[3, 3], [2, 2], [6], [1]]
// Assume the input is always going to be an array of numbers. If the input is an empty array, an empty array should be returned.

function group(array $arr) {
  $unique  = array_unique($arr);
  $result = [];
  foreach($unique as $n) {
    $result[] = array_values(array_filter($arr, function($x) use($n) {
      return $x === $n;
    }));
  }
  return $result;
}

// Alternative Solutions:
// function group(array $numbers)
// {
//     $map = array_fill_keys($numbers, []);
//
//     foreach ($numbers as $number) {
//         $map[$number][] = $number;
//     }
//
//     return array_values($map);
// }

// function group(array $arr) {
//   $all = [];
//
//  foreach ($arr as $v) {
//     isset($all[$v]) ?: $all[$v] = [];
//     $all[$v][] = $v;
//   }
//
//   return array_values($all);
// }

?>
