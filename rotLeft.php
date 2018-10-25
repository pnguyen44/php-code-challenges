<?php
// A left rotation operation on an array shifts each of the array's elements 1 unit to the left. For example, if 2 left rotations are performed on array [1, 2, 3, 4, 5] , then the array would become [3, 4, 5, 1, 2].

// Complete the function rotLeft in the editor below. It should return the resulting array of integers.
//
// rotLeft has the following parameter(s):
//
// An array of integers a.
// An integer d, the number of rotations.

function rotLeft($a, $d) {
   $d = $d % count($a);
    print_r($d);
   $start = array_slice($a,$d);
   $end = array_slice($a,0, $d);
   return array_merge($start,$end);

}

print_r(rotLeft([1, 2, 3, 4, 5],4)) // 5 1 2 3 4



?>
