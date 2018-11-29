<?php
// Plus Minus
// Given an array of integers, calculate the fractions of its elements that are positive, negative, and are zeros. Print the decimal value of each fraction on a new line.
//
// For example, given the array arr[1,1,0,-1,-1]  there are 5 elements, two positive, two negative and one zero.
//
// Their ratios would be 2/5 = 0.400000 , 2/5  = 0.400000, and 1/5 = 0.200000. It should be printed as
//
// 0.400000
// 0.400000
// 0.200000

function plusMinus($arr) {
  $neg_count = count(array_filter($arr, function($x) {
    return $x < 0;
  }));

  $pos_count = count(array_filter($arr, function($x) {
    return $x > 0;
  }));

  $zero_count = count($arr) - ($neg_count + $pos_count);

  $num_of_element = count($arr);

  // print_r($pos_count / $num_of_element);

  print_r(number_format($pos_count / $num_of_element, 6) . "\n");
  print_r(number_format($neg_count / $num_of_element, 6) . "\n");
  print_r(number_format($zero_count / $num_of_element, 6) . "\n");

}

print_r(plusMinus([-4, 3, -9, 0, 4, 1]));

// 0.500000
// 0.333333
// 0.166667

?>
