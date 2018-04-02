<?php
// 7 kyu - Sum of Odd Cubed Numbers
// Find the sum of the odd numbers within an array, after cubing the initial integers. This function will return undefined (NULL in PHP) if any of the values aren't numbers.

function cube_odd($a) {
  $sum = 0;
  $num_only = array_filter($a, function($n) {
    return is_numeric($n);
  });
  if (count($num_only) === count($a)) {
    foreach($a as $num) {
      if (abs($num) % 2 > 0) {
        $sum +=$num ** 3;
      };
    };
    return $sum;
  } else {
    return null;
  }
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

$answer =  cube_odd(["a", 12, 9, "z", 42]);
print_r("$answer \n");

?>
