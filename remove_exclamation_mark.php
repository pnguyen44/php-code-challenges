<?php
// 7 kyu - Exclamation marks series #7: Remove words from the sentence if it contains one exclamation mark
// Remove words from the sentence if it contains one exclamation mark. Words are separated by spaces in the sentence. Please remember, one.
//
// Examples
// remove("Hi!") === ""
// remove("Hi! Hi!") === ""
// remove("Hi! Hi! Hi!") === ""
// remove("Hi Hi! Hi!") === "Hi"
// remove("Hi! !Hi Hi!") === ""
// remove("Hi! Hi!! Hi!") === "Hi!!"
// remove("Hi! !Hi! Hi!") === "!Hi!"

function remove(string $s): string {
  return implode(' ' ,array_filter(explode(' ', $s), function ($x) {
    return count(explode('!', $x)) !== 2;
  }));
}

// Alternative Solution:
// function remove(string $s): string {
//   return join(' ', array_filter(explode(' ', $s), function($w) {
//     return preg_match_all('/\!/', $w) !== 1;
//   }));
// }

$answer = remove("Hi! !Hi Hi Hi!");
print_r("$answer \n");

?>
