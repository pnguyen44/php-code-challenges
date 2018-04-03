<?php
// 8 kyu - Exclamation marks series #2: Remove all exclamation marks from the end of sentence
// Description:
// Remove all exclamation marks from the end of sentence.
//
// Examples
// remove("Hi!") === "Hi"
// remove("Hi!!!") === "Hi"
// remove("!Hi") === "!Hi"
// remove("!Hi!") === "!Hi"
// remove("Hi! Hi!") === "Hi! Hi"
// remove("Hi") === "Hi"
// Note
// Please don't post issue about difficulty or duplicate.
function remove(string $s): string {
  return strrev(ltrim(strrev($s),'!'));
}

$answer =  remove("Hello!! myjinxin2015, my name is Don!!ald!!!");
print_r("$answer \n");



?>
