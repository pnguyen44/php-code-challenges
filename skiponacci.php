<?php
// 7 kyu - The Skiponacci Sequence
// Your task is to generate the Fibonacci sequence to n places, with each alternating value as "skip". For example:
//
// "1 skip 2 skip 5 skip 13 skip 34"

function skiponacci($n) {
  if ($n === 1) return '1';
  $fib = [1,1];
  for($i = 0; $i < $n - 2; $i++) {
    $fib[] = $fib[$i] + $fib[$i + 1];
  }
  foreach($fib as $key => $val) {
    $fib[$key] = ($key + 1) % 2 === 0 ? 'skip': $val;
  }
  return join(' ', $fib);
}

$answer = skiponacci(5);
print_r("$answer \n");

?>
