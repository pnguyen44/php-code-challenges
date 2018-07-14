<?php
// Given an array of integers, write a function that changes the order of the integers so
// negative numbers appear first then positive numbers. Do not change the order of the integers.  

function special_sort($num) {
  $neg = array_filter($num, function($x) {
    return $x < 0;
  });
  $pos = array_filter($num, function($x) {
    return $x >= 0;
  });
  return array_merge($neg, $pos);
}

$test = special_sort([-7, -9, 9, -4, 0, 1]);
print_r($test);

?>
