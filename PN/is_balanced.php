<?php
// You are given an array of strings. Each of these strings is made up of bracket characters only :
// '(', ')', '{',  '}',  '[',  ']'.
// Programming languages utilize these brackets in balanced pairs, so the following rules are always followed :
//
// Every opening bracket has a corresponding closing bracket : '(' with ')', '{' with '}', and '[' with ']'.
// Two brackets form a pair if they have no open bracket of any type between them.
// For example: '[}]' is invalid, '[{}]' is valid.
// The closing bracket of a pair must be of the same type as the opening bracket, e.g. '( )' is valid, but '[ )' is not valid.
// Your task is to determine if of the strings of brackets in the input array are valid or invalid by these criteria.

// function is_balanced($str) {
//   $brackets = '[]{}()';
//   $open_bracket_stack = [];
//   for ($i = 0; $i < strlen($str); $i++) {
//     $char = $str[$i];
//     $match_open_bracket  = $brackets[strpos($brackets, $char) - 1];
//     if (strpos($brackets, $char) % 2 > 0) {
//       if(count($open_bracket_stack) === 0 || array_pop($open_bracket_stack) !== $match_open_bracket) {
//         return false;
//       };
//     } else {
//       $open_bracket_stack[] = $char;
//     };
//   }
//   return count($open_bracket_stack) === 0;
// }

// Alternative Solution:
function is_balanced($str) {
  $open_bracket_stack= [];
  $bracketMapping = array('(' => ')', '{' => '}', '[' => ']');
  for ($i = 0; $i < strlen($str); $i++) {
    $currentBracket = $str[$i];
    if (array_key_exists($currentBracket, $bracketMapping)) {
      $open_bracket_stack[] = $currentBracket;
    } else {
      //implies that it is a close bracket
      if (count($open_bracket_stack) === 0) return "false";
      $last_seen_open_bracket = array_pop($open_bracket_stack);
      $last_seen_open_bracket_matching_bracket = $bracketMapping[$last_seen_open_bracket];
      if ($currentBracket !== $last_seen_open_bracket_matching_bracket) return 'false';
    }
  }
  return count($open_bracket_stack) === 0 ? 'true' : 'false';
}


//test
print_r(is_balanced("([)]")); // false
print_r(is_balanced("()()")); // true
print_r(is_balanced("{}[]()")); // true
print_r(is_balanced("{[}]")); // false
print_r(is_balanced("{[}]")); // false
print_r(is_balanced("[{()()}({[]})]({}[({})])((((((()[])){}))[]{{{({({({{{{{{}}}}}})})})}}}))[][][]")); // true
print_r(is_balanced("{}[]()")); // true
print_r(is_balanced("(())((()())())")); // true



?>
