<?php
// 7 kyu - Vowel Count
// Return the number (count) of vowels in the given string.
//
// We will consider a, e, i, o, and u as vowels for this Kata.
//
// The input string will only consist of lower case letters and/or spaces.

function getCount($str) {
  $search = array('a','e','i','o','u');
  return  abs(strlen($str) - strlen(str_replace($search, '', $str)));
}

// Alternative Solutions:
//
// function getCount($str) {
//   return preg_match_all('/[aeiou]/i', $str, $matche);
// }

// function getCount($str) {
//
//   $findLetters = ['a', 'e', 'i', 'o', 'u'];
//   // enter your magic here
//
//   return sizeof(array_intersect(str_split($str), $findLetters));
// }

$answer =  getCount("abracadabra");
print_r("$answer \n");

?>
