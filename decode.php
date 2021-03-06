<?php
// 7 kyu - Emily's Eccentric Encoding
// The encoding replaces all lower case letters in a string with the opposite letter in the alphabet. In other words: a -> z, b -> y, c -> x, d -> w, etc. All other characters remain the same. The two parties have agreed on the encoding and they have generated encoded messages like:
//
// "I dlfow orpv gl rmgviervd lm Mlmwzb nlimrmt!"
// which decodes to:
//
// "I would like to interview on Monday morning!"
// Your job is to write a method called decode that takes an encoded string as input and returns the decoded string as output.

function decode($string){
  $result = array_map( function ($x) {
    if (strtolower($x) === $x && $x !== ' ' && ctype_alpha($x)) {
      return chr(122 - ord(strtolower($x)) + 97);
    } else {
      return $x;
    }
  }, str_split($string));
  return implode($result);
}

// Alternative Solution:
// function decode($string){
//   return strtr($string,array_combine(range('a','z'),range('z','a')));
// }

?>
