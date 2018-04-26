<?php
// 7 kyu - Thinkful - List Drills: Longest word
// Complete the function that takes one argument, a list of words, and returns the length of the longest word in the list.
//
// For example:
//
// ['simple', 'is', 'better', 'than', 'complex'] ==> 7

function longest($words) {
  return max(array_map('strlen', $words));
}

?>
