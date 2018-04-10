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
  $print = array_map(function($word) {
    $word = array_map(function($l) {
      if (strtoupper($l) === $l) {
        return strtolower($l);
      } else {
        return strtoupper($l);
      }
    }, str_split($word));
    return implode($word);
  }, array_reverse(explode(' ', $s)));
  return implode(' ' , $print);
}

$answer =  string_transformer("Example string");
print_r("$answer \n");
?>
