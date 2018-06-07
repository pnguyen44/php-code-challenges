<?php
// 7 kyu - The Skiponacci Sequence
// Your task is to generate the Fibonacci sequence to n places, with each alternating value as "skip". For example:
//
// "1 skip 2 skip 5 skip 13 skip 34"

function skiponacci($n) {
  for($i = 0; $i < $n; $i++) {
    if ($i <= 1) {
      $res[] = 1;
    } else {
      $res[] = $res[$i - 1] + $res[$i - 2];
    }
  }
  foreach($res as $key => $val) {
    $res[$key] = ($key + 1) % 2 === 0 ? 'skip': $val;
  }
  return join(' ', $res);
}

?>
