<?php
// 6 kyu - Length of missing array
// You get an array of arrays.
// If you sort the arrays by their length, you will see, that their length-values are consecutive.
// But one array is missing!
//
//
// You have to write a method, that return the length of the missing array.
//
// Example:
// [[1, 2], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]] --> 3
//
//
// If the array of arrays is null/nil or empty, the method should return 0.
//
// When an array in the array is null or empty, the method should return 0 too!
// There will always be a missing element and its length will be always between the given arrays.


function getLengthOfMissingArray($arrayOfArrays) {
    if(empty($arrayOfArrays)|| in_array(0,$count_arr = array_map('count', $arrayOfArrays))) return 0;
    return array_values(array_diff(range(min($count_arr),max($count_arr)), $count_arr))[0];
};

$answer =  getLengthOfMissingArray([[5,5],[],[27,9,35]]);
print_r("$answer \n");

?>
