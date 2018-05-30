<?php
// 7 kyu - Find the area of the rectangle!
// Find the area of a rectangle when provided with one diagonal and one side of the rectangle. If the input diagonal is less than or equal to the length of the side, return "Not a rectangle". If the resultant area has decimals round it to two places.

function area($d, $l) {
  if ($d <= $l) return 'Not a rectangle';
  return round($l * sqrt($d * $d - $l * $l),2);
}

$answer = area(12, 5);
print_r("$answer \n");
?>
