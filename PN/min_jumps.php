<?php
// Given an array of integers where each element represents the max number of steps that can be made forward from that element.
// Write a program to find the minimum number of jumps to reach the end of the array (starting from the first element).
// If an element is 0, then cannot move through that element.

function min_jumps($arr) {

}

//test
print_r(min_jumps([1, 3, 5, 8, 9, 2, 6, 7, 6, 8, 9])); // 3 (1-> 3 -> 8 ->9)
// print_r(min_jumps([2,3,1,1,2,4,2,0,1,1])); // 4 (2-> 3 -> 2 -> 4 -> 1)
// print_r(min_jumps([2,8,3,6,9,3,0,0,1,3])); // 2 (2-> 8 -> 3)
?>
