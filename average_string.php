<?php
// 6 kyu - String average
// You are given a string of numbers between 0-9. Find the average of these numbers and return it as a floored whole number (ie: no decimal places) written out as a string. Eg:
//
// "zero nine five two" -> "four"
//
// If the string is empty or includes a number greater than 9, return "n/a"

function average_string(string $s): string {
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

// Alternative Solutions:
// function average_string(string $s): string {
//   return !preg_match('/^(zero|one|two|three|four|five|six|seven|eight|nine)( (zero|one|two|three|four|five|six|seven|eight|nine))*$/', $s) ? 'n/a' : ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'][intdiv(array_reduce($a = explode(' ', $s), function ($s, $w) {return $s + ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5, 'six' => 6, 'seven' => 7, 'eight' => 8, 'nine' => 9][$w];}, 0), count($a))];
// }

// function average_string(string $s): string {
//     $arr = explode(" ", $s);
//     $numbers = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
//     if(count(array_diff($arr, $numbers))) return "n/a";
//     $sum = array_reduce($arr, function($carry, $item) use($numbers) { return $carry += array_search($item, $numbers); }, 0);
//     return $numbers[($sum / count($arr))];
// }

$answer =  average_string("zero nine five two");
print_r("$answer \n");
?>
