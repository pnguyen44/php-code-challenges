<?php
// 7 kyu - Count the Characters
// The goal of this kata is to write a function that takes two inputs: a string and a character. The function will count the number of times that character appears in the string. The count is case insensitive.
//
// For example:
//
// count_char("fizzbuzz", "z"); // => 4
// count_char("Fancy fifth fly aloof", "f"); // => 5
// The character can be any alphanumeric character.

function count_char(string $s, string $c): int {
  return substr_count(strtolower($s),strtolower($c));
}


?>
