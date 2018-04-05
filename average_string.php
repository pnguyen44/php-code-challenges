<?php
// 6 kyu - String average
// You are given a string of numbers between 0-9. Find the average of these numbers and return it as a floored whole number (ie: no decimal places) written out as a string. Eg:
//
// "zero nine five two" -> "four"
//
// If the string is empty or includes a number greater than 9, return "n/a"

function average_string($s) {
  $nato = array(
      "0" => "zero",
      "1" => "one",
      "2" => "two",
      "3" => "three",
      "4" => "four",
      "5" => "five",
      "6" => "six",
      "7" => "seven",
      "8" => "eight",
      "9" => "nine"
      );
  $arr = explode(' ', $s);
  foreach($arr as &$val) {
    $val = array_search($val ,$nato);
    if (!is_numeric($val)) {
      return "n/a";
    };
  }
  return $s === "" ||  floor(array_sum($arr)/count($arr)) > 9 ? "n/a": $nato[floor(array_sum($arr)/count($arr))];
}

$answer =  average_string("zero nine five two");
print_r("$answer \n");
?>
