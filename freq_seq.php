<?php
// Return an output string that translates an input string s/$s by replacing each character in s/$s with a number representing the number of times that character occurs in s/$s and separating each number with the character(s) sep/$sep.
//
// freq_seq("hello world", "-"); // => "1-1-3-3-2-1-1-2-1-3-1"
// freq_seq("19999999", ":"); // => "1:7:7:7:7:7:7:7"
// freq_seq("^^^**$", "x"); // => "3x3x3x2x2x1"

function freq_seq(string $s, string $sep): string {
  $result = array_map(function($x) use ($s) {
    return substr_count($s, $x);
  }, str_split($s));
  return join($sep, $result);
}

$answer = freq_seq("hello world", "-");
print_r("$answer \n");

?>
