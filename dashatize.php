<?php
// 6 kyu - Dashatize it
// Given a number, return a string with dash'-'marks before and after each odd integer, but do not begin or end the string with a dash mark.
//
// Ex:
//
// dashatize(274) -> '2-7-4'
// dashatize(6815) -> '68-1-5'
function dashatize(int $num): string {
  $str_num = strval(abs($num));
  $result = '';
  foreach(str_split($str_num) as $key => $val) {
    if (intval($val) % 2 === 0) {
      $result .= $val;
    } else if ($key === 0 && $key !== strlen($str_num) -1) {
      $result .= $val . '-';
    } else if ($key < strlen($str_num) - 1) {
      $result .= '-' . $val . '-';
    } else {
      $result .= '-' . $val;
    }
  }
  $result = str_replace('--', '-', $result);
  if ($result[0] === '-') {
    $result = substr($result, 1);
  }
  return $result;
}

$answer = dashatize(-1);
print_r("$answer \n");

?>
