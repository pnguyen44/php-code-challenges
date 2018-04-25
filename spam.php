<?php
// 7 kyu - Multiply characters
// Here we have a function that help us spam our hearty laughter. But is not working! I need you to find out why...
//
// Expected results:
//
// spam(1);  // 'hue'
// spam(6);  // 'huehuehuehuehuehue'
// spam(14); // 'huehuehuehuehuehuehuehuehuehuehuehuehuehue'

function spam(int $n): string {
  return str_repeat('hue', $n);
}
$answer =spam(2);
print_r("$answer \n");

?>
