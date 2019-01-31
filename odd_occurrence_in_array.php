<?php
// A non-empty array A consisting of N integers is given. The array contains an odd number of elements,
// and each element of the array can be paired with another element that has the same value, except for one element that is left unpaired.
//
//
// Write a function:
//
// function solution(A);
//
// that, given an array A consisting of N integers fulfilling the above conditions, returns the value of the unpaired element.

function solution($A) {
  $instance_arr = array_count_values($A);
  foreach($instance_arr as $key => $val){
      if ($val ===1) return $key;
  }
}


print_r(solution([9, 3, 9, 3, 9, 7, 9])); // 7


?>
