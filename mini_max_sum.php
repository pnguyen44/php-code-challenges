<?php
// Mini-Max Sum

// Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.
// Then print the respective minimum and maximum values as a single line of two space-separated long integers.


function miniMaxSum($arr) {

  function comp($a, $b) {
    if ($a == $b) return 0;
    return $a < $b ? -1 : 1;
  ;}

  usort($arr, 'comp');
  // asort($arr);
  $maxSum = array_sum(array_slice($arr, 1));

  $minSum = array_sum(array_slice($arr, 0, count($arr) - 1));

  print_r($minSum . " " . $maxSum);
}

// print_r(miniMaxSum([1, 2, 3, 4, 5])); // 10 14
print_r(miniMaxSum([7, 69, 2, 221, 8974])); // 299 9271

?>
