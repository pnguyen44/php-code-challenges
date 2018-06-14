<?php
// 8 kyu - Palindrome Strings
// Palindrome strings
// A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward. This includes capital letters, punctuation, and word dividers.
//
// Examples
// "anna"   ==> true
// "walter" ==> false
// 12321    ==> true
// 123456   ==> false

function is_palindrome($line) {
  return strrev(strval($line)) === strval($line);
}

// Alternative Solution:
// function is_palindrome($line) {
//   return $line == strrev($line);
// }

$answer = is_palindrome('anna');
print_r("$answer \n");

?>
