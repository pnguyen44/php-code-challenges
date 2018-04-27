<?php
// 7 kyu - Simple Fun #215: Properly Closed Bracket Word
// We call letter x a counterpart of letter y, if x is the ith letter of the English alphabet, and y is the (27 - i)th for each valid i (1-based). For example, 'z' is the counterpart of 'a' and vice versa, 'y' is the counterpart of 'b', and so on.
//
// A properly closed bracket word (PCBW) is such a word that its first letter is the counterpart of its last letter, its second letter is the counterpart of its last by one letter, and so on.
//
// Determine if the given word is a PCBW or not.
//
// Input/Output
// [input] string word
//
// A string consisting of lowercase letters.
//
// 0 < word.length ≤ 30
//
// [output] a boolean value
//
// true if word is a PCBW, false otherwise.
//
// Example
// For word = "abiryz", the output should be true.
//
// 'a' is the counterpart of 'z';
//
// 'b' <-> 'y'
//
// 'i' <-> 'r'
//
// For word = "aibryz", the output should be false.
//
// For word = "abitryz", the output should be false.

function closed_bracket_word(string $word): bool {
  $str1 = substr($word,0, strlen($word)/2);
  $str2 = strrev(substr($word,strlen($word)/2));

  if (strlen($word) % 2 !== 0) return false;

  $str1 = implode(array_map(function($l) use ($str1){
    return ord(strtoupper($l)) - 64;
  }, str_split($str1)));

  $str2 = implode(array_map(function($l) use ($str2){
    return 27 - (ord(strtoupper($l)) - 64);
  }, str_split($str2)));

  return $str1 === $str2? true : false;
}

$answer = closed_bracket_word("zhuazfsa");
print_r("$answer \n");

?>
