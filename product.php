<?php
// 8 kyu - Beginner - Reduce but Grow
// Given and array of integers (x), return the result of multiplying the values together in order. Example:
//
// [1, 2, 3] --> 6
// For the beginner, try to use the reduce method - it comes in very handy quite a lot so is a good one to know.
//
// Array will not be empty.

function product($carry, $item) {
  $carry *= $item;
  return $carry;
}
function grow($a) {
  return array_reduce($a, "product", 1);
}

$answer =  grow([1, 2, 3]);
print_r("$answer \n");

// Alternative Solutions:
// function grow($a) {
//
//   if ( !empty($a) ) {
//         return $result = array_product($a);
//     }
// }
?>
