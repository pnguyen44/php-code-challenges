<?php
// 6 kyu - Find the missing letter
// #Find the missing letter
//
// Write a method that takes an array of consecutive (increasing) letters as input and that returns the missing letter in the array.
//
// You will always get an valid array. And it will be always exactly one letter be missing. The length of the array will always be at least 2.
// The array will always contain letters in only one case.
//
// Example:
//
// ['a','b','c','d','f'] -> 'e'
// ['O','Q','R','S'] -> 'P'
// (Use the English alphabet with 26 letters!)

// function find_missing_letter(array $array): string {
//   if (ctype_upper(implode('',$array))) {
//     $alph = str_split(strtoupper('abcdefghijklmnopqrstuvwxyz'));
//   } else {
//     $alph = str_split('abcdefghijklmnopqrstuvwxyz');
//   }
//  return implode('', array_diff(array_slice($alph, array_search($array[0], $alph), count($array) + 1), $array));
// }

function find_missing_letter(array $array): string {
  $alph = range($array[0], $array[count($array) - 1]);
  return array_values(array_diff($alph, $array))[0];
}

$answer =  find_missing_letter(["O", "Q", "R", "S"]);
print_r("$answer \n");
?>
