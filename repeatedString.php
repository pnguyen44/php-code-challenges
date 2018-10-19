<?php
// Lilah has a string,s, of lowercase English letters that she repeated infinitely many times.
//
// Given an integer,n, find and print the number of letter a's in the first n letters of Lilah's infinite string.
//
//
// Complete the repeatedString function in the editor below. It should return an integer representing the number of occurrences of a in the prefix of length n in the infinitely repeating string.
//
// repeatedString has the following parameter(s):
//
// s: a string to repeat
// n: the number of characters to consider`

function repeatedString($s, $n) {
    $num_0f_a = substr_count($s, 'a');
    $repeat = floor($n/strlen($s));

    $left = substr($s, 0, $n - (strlen($s) * $repeat));
    // print_r($left);
    return ($repeat * $num_0f_a) + substr_count($left,'a');
}


print_r(repeatedString('abc', 10) . "\n"); // 7
print_r(repeatedString('a', 1000000000000) . "\n"); // 1000000000000
?>
