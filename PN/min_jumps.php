<?php
// Given an array of integers where each element represents the max number of steps that can be made forward from that element.
// Write a program to find the minimum number of jumps to reach the end of the array (starting from the first element).
// If an element is 0, then cannot move through that element.

function min_jumps($arr) {
	if ($arr[0] === 0) return INF;
	$num_of_jumps[0] = 0;
	for ($i = 1; $i < count($arr); $i++){
		$num_of_jumps[$i] = INF;
		for ($j = 0; $j < $i; $j++) {
			if ($arr[$j] + $j >= $i && $num_of_jumps[$j] !== INF ) {
				$num_of_jumps[$i] = min($num_of_jumps[$i], $num_of_jumps[$j] + 1);
			}
		}
	}
	return $num_of_jumps[count($num_of_jumps) -1];
}

//test
print_r(min_jumps([2,3,1,1,2,4,2,0,1,1])); // 4 (2-> 3 -> 2 -> 4 -> 1)
// print_r(min_jumps([2,8,3,6,9,3,0,0,1,3])); // 2 (2-> 8 -> 3)
?>
