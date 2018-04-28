<?php
// 7 kyu - Product of Array Items
//
// Calculate the product of all elements in an array.
//
// In PHP, if the array is NULL or empty, return NULL.
//
// As a challenge, try writing your method in just one line of code. It's possible to have only 36 characters within your method.

function product($a) {
  return empty($a) ? NULL : array_product($a);
}

$answer = product([5, 4, 1, 3, 9]);
print_r("$answer \n");


?>
