<?php
//Staircase
// Consider a staircase of size n = 4 :
//
//    #
//   ##
//  ###
// ####
//
//
// Observe that its base and height are both equal to n, and the image is drawn using # symbols and spaces. The last line is not preceded by any spaces.
//
// Write a program that prints a staircase of size n.

function staircase($n) {
  for($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $n - $i - 1; $j++) {
      echo " ";
    };

    for ($k = 1; $k <= $i +1; $k++) {
      echo "#";
    };
    echo "\n";
  }
}

// Alternative Solution:
// function staircase($n) {
//   for ($i = 1; $i <= $n; $i++)
//       echo str_repeat(' ', $n-$i).str_repeat('#', $i), "\n";
// }

print_r(staircase(6));
?>
