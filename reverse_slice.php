<?php
// 7 kyu - String reverse slicing 101
// You'll be given a string of characters as an input. Complete the function that returns a list of strings: (a) in the reverse order of the original string, and (b) with each successive string starting one character further in from the end of the original string.
//
// Assume the original string is at least 3 characters long. Try to do this using slices and avoid converting the string to a list.
//
// Examples
// '123'   ==>  ['321', '21', '1']
// 'abcde' ==>  ['edcba', 'dcba', 'cba', 'ba', 'a']

function reverse_slice(string $s): array {
  $s = strrev($s);
  for($i = 0; $i < strlen($s); $i++) {
    $result [] = substr($s, $i);
  }
  return $result;
}

$answer = reverse_slice("123");
print_r("$answer \n");

?>
