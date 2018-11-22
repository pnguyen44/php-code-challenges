<?php
// A Very Big Sum

// Calculate and print the sum of the elements in an array, keeping in mind that some of those integers may be quite large.
// Complete the aVeryBigSum function in the editor below. It must return the sum of all array elements.

function aVeryBigSum($ar) {
  return array_sum($ar);
}

print_r(aVeryBigSum([1000000001, 1000000002, 1000000003, 1000000004, 1000000005])) //5000000015


?>
