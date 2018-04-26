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
  $arr = str_split($s);
  $result = str_split(implode(array_map('ord',$arr)));
  $result2 = str_split(str_replace('7', '1', implode($result)));
  print_r($result);
  return array_sum($result) - array_sum($result2);
}
$answer = calc('ABC');
print_r("$answer \n");
?>
