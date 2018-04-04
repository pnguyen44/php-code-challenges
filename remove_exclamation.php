<?php
// 7 kyu - Exclamation marks series #5: Remove all exclamation marks from the end of words
// Description:
// Remove all exclamation marks from the end of words. Words are separated by spaces in the sentence.
//
// Examples
// remove("Hi!") === "Hi"
// remove("Hi!!!") === "Hi"
// remove("!Hi") === "!Hi"
// remove("!Hi!") === "!Hi"
// remove("Hi! Hi!") === "Hi Hi"
// remove("!!!Hi !!hi!!! !hi") === "!!!Hi !!hi !hi"
function remove_end_mark($v) {
  return rtrim($v, '!');
}

function remove($s) {
  $arr = explode(' ',$s);
  $arr = array_map("remove_end_mark",$arr);
  return implode(' ', $arr);
}
  $answer =  remove("Hi! Hi!");
print_r("$answer \n");
?>
