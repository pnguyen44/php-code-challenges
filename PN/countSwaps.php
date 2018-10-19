<?php
// Given an array of integers, sort the array in ascending order using the Bubble Sort algorithm above. Once sorted, print the following three lines:
//
// 1. Array is sorted in numSwaps swaps., where numSwaps is the number of swaps that took place.
// 2. First Element: firstElement, where firstElement is the first element in the sorted array.
// 3. Last Element: lastElement, where lastElement is the last element in the sorted array.
// Hint: To complete this challenge, you must add a variable that keeps a running tally of all swaps that occur during execution.
//
// For example, given a worst-case but small array to sort: a = [6,4,1]  we go through the following steps:
//
// swap    a
// 0       [6,4,1]
// 1       [4,6,1]
// 2       [4,1,6]
// 3       [1,4,6]
//
// It took 3 swaps to sort the array. Output would be
//
// Array is sorted in 3 swaps.
// First Element: 1
// Last Element: 6

function countSwaps($a) {
    $numSwaps = 0;
    for ($i = 0; $i < count($a); $i++) {
        for( $j = 0; $j < count($a) -1; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $numSwaps +=1;
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j +1] = $temp;
            }
        }
    }
    print_r("Array is sorted in $numSwaps swaps. \n");
    print_r("First Element: $a[0] \n");
    print_r("Last Element: " . $a[count($a) -1]);
}

print_r(countSwaps([4, 2, 3, 1])) // Array is sorted in 5 swaps.
                                      // First Element: 1
                                      // Last Element: 4
?>
