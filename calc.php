<?php
// 7 kyu - Char Code Calculation
// Given a string, turn each letter into its ASCII character code and join them together to create a number - let's call this number total1:
//
// 'ABC' --> 'A' = 65, 'B' = 66, 'C' = 67 --> 656667
// Then replace any incidence of the number 7 with the number 1, and call this number 'total2':
//
// total1 = 656667
//               ^
// total2 = 656661
//               ^
// Then return the difference between the sum of the digits in total1 and total2:
//
//   (6 + 5 + 6 + 6 + 6 + 7)
// - (6 + 5 + 6 + 6 + 6 + 1)
// -------------------------
//                        6

function calc($s) {
  $result = str_split(implode(array_map('ord',str_split($s))));
  $result2 = str_split(str_replace('7', '1', implode($result)));
  return array_sum($result) - array_sum($result2);
}

// Alternative Solution:
// function calc($s) {
//    return substr_count(join(array_map('ord', str_split($s))), '7') * 6;
// }

$answer = calc('ABC');
print_r("$answer \n");
?>
