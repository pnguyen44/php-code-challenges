<?php
// 7 kyu - Sum of Odd Cubed Numbers
// Find the sum of the odd numbers within an array, after cubing the initial integers. This function will return undefined (NULL in PHP) if any of the values aren't numbers.

function cube($n) {
  return pow($n, 3);
};
function is_odd($n) {
  return $n % 2 !== 0;
};

function cube_odd($a) {
  return count(array_filter($a, 'is_numeric')) === count($a)
    ? array_sum(array_map('cube', array_filter($a, 'is_odd')))
    : null;
};


// Alternative Solutions:
// function cube_odd($a) {
//         $sum = 0;
//         foreach ($a as $number) {
//             if (!is_numeric($number)) {
//                 return null;
//             }
//             if ($number & 1) {
//                 $sum += ($number ** 3);
//             }
//         }
//
//         return $sum;
// }

$answer =  cube_odd([1, 2, 3, 4]);
print_r("$answer \n");

?>
