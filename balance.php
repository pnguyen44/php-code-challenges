<?php
// 6 kyu - Exclamation marks series #17: Put the exclamation marks and question marks to the balance, Are they balanced?
// Description:
// Each exclamation mark weight is 2; Each question mark weight is 3. Put two string left and right to the balance, Are they balanced?
//
// If the left side is more heavy, return "Left"; If the right side is more heavy, return "Right"; If they are balanced, return "Balance".
//
// Examples
// balance("!!","??") == "Right"
// balance("!??","?!!") == "Left"
// balance("!?!!","?!?") == "Left"
// balance("!!???!????","??!!?!!!!!!!") == "Balance"
// Note
// Please don't post issue about difficulty or duplicate.

function balance(string $l, string $r): string {
  $l = array_sum(preg_replace(['/[!]/', '/[?]/'], [2,3], str_split($l)));
  $r = array_sum(preg_replace(['/[!]/', '/[?]/'], [2,3], str_split($r)));
  return  $l === $r ? 'Balance' : ($l > $r ? 'Left' : 'Right');
}

$answer =  balance("!!", "??");
print_r("$answer \n");
?>
