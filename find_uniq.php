<?php
// 6 kyu - Find the unique number
// There is an array with some numbers. All numbers are equal except for one. Try to find it!
//
// findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
// findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
// It’s guaranteed that array contains more than 3 numbers.
//
// The tests contain some very huge arrays, so think about performance.

function find_uniq($a) {
  sort($a);
  return $a[0] === $a[1] ?  $a[count($a) -1] : $a[0];
}

// Alternative Solution:
// function find_uniq($a) {
//   sort($a);
//   return ($a[0] === $a[1]) ? end($a) : current($a);
// }

$answer = find_uniq([0, 0, 0.55, 0, 0]);
print_r("$answer \n");

?>
