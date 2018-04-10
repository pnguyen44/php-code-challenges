<?php
// 6 kyu - String transformer
// Given a string, return a new string that has transformed based on the input:
//
// Change case of every character, ie. lower case to upper case, upper case to lower case.
// Reverse the order of words from the input.
// For example:
// stringTransformer('Example Input')/string_transformer("Example Input") (depending on the language you are completing the Kata in) should return 'iNPUT eXAMPLE'
//
// You may assume the input only contain English alphabet and spaces.

function string_transformer(string $s): string {
  $result =  array_map(function($l) {
    return ctype_upper($l) ? strtolower($l) : strtoupper($l);
  }, str_split($s));
  return  implode(' ', array_reverse(explode(' ', implode($result))));
}

// Alternative Solution:
// function string_transformer(string $str): string {
//    return implode(' ',array_reverse(explode(' ',strtolower($str) ^ strtoupper($str) ^ $str)));
// }

$answer =  string_transformer("Example string");
print_r("$answer \n");
?>
