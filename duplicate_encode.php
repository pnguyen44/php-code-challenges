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

// Alternative Solutions:
// function duplicate_encode($word){
//   $word = str_split(strtolower($word));
//   $str = "";
//   foreach($word as $key){
//     (count(array_keys($word,$key))>1) ? $str .= ")" : $str .= "(";
//   }
//   return $str;
// }
//
// function duplicate_encode(string $word) : string
// {
//     $splittedWord = str_split(strtolower($word));
//     $countMap = array_count_values($splittedWord);
//
//     $finalString = '';
//
//     foreach ($splittedWord as $letter) {
//         ($countMap[$letter] === 1) ? $finalString .= '(' : $finalString .= ')';
//     }
//
//     return $finalString;
// }
?>
