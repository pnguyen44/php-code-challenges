<?php
// 6 kyu - Duplicate Encoder
// The goal of this exercise is to convert a string to a new string where each character in the new string is '(' if that character appears only once in the original string, or ')' if that character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.
//
// Examples:
//
// "din" => "((("
//
// "recede" => "()()()"
//
// "Success" => ")())())"
//
// "(( @" => "))(("

function duplicate_encode($word){
  $arr = str_split(strtolower($word));
  foreach($arr as &$val) {
    $val = substr_count(strtolower($word), $val) === 1 ? '(' : ')';
  }
  return implode('',$arr);
}
$answer =  duplicate_encode('UT1a3KlWjxTqw');
print_r("$answer \n");

?>
