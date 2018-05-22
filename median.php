<?php
// 7 kyu - Median fun fun
// Description:
//
// The mean (or average) is the most popular measure of central tendency; however it does not behave very well when the data is skewed (i.e. wages distribution). In such cases, it's better to use the median.
//
// Your task for this kata is to find the median of an array consisting of n elements.
//
// You can assume that all inputs are arrays of numbers in integer format. For the empty array your code should return NaN (false in JavaScript/NULL in PHP).
//
// Examples:
//
// Input [1, 2, 3, 4] --> Median 2.5
//
// Input [3, 4, 1, 2, 5] --> Median 3

function median($a) {
  sort($a);
  return count($a) % 2 ? $a[count($a)/2] : ($a[count($a)/2 - 1] + $a[count($a)/2])/2;
}

$answer = median([2, 1, 3, 4]);
print_r("$answer \n");
?>
