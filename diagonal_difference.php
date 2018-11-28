<?php

// Diagonal Difference

// Given a square matrix, calculate the absolute difference between the sums of its diagonals.
//
// For example, the square matrix arr is shown below:
//
// 1 2 3
// 4 5 6
// 9 8 9
//
// The left-to-right diagonal 1 + 5 + 9 = 15. The right to left diagonal 3 + 5 + 9 = 17. Their absolute difference is | 15 - 17| = 2
//
// Complete the diagonalDifference  function in the editor below. It must return an integer representing the absolute diagonal difference.
//
// diagonalDifference takes the following parameter:
//
// arr: an array of integers .

function diagonalDifference($arr) {
  $diagonal_1 = [];
  $diagonal_2 = [];
  for($i = 0; $i < count($arr); $i++) {
    $diagonal_1[] = $arr[$i][$i];
    $diagonal_2[] = $arr[$i][count($arr) - 1 - $i];
  }
  return abs(array_sum($diagonal_1) - array_sum($diagonal_2));
}


print_r(diagonalDifference([[11, 2, 4], [4, 5, 6], [10, 8, -12]])) // 15

?>
