<?php
// 6 kyu - Dashatize it
// Given a number, return a string with dash'-'marks before and after each odd integer, but do not begin or end the string with a dash mark.
//
// Ex:
//
// dashatize(274) -> '2-7-4'
// dashatize(6815) -> '68-1-5'
function dashatize(int $num): string {
  $arr = str_split($num);
  $result = '';
  foreach($arr as $val) {
    $result .= intval($val) % 2 === 0 ? $val : '-' . $val . '-';
  }
  return str_replace('--', '-', rtrim(ltrim($result,'-'), '-'));
}

$answer = dashatize(18929);
print_r("$answer \n");

?>
