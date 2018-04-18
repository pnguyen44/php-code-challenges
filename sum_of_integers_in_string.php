<?php
// 7 kyu - Sum of integers in string
// Your task in this kata is to implement a function that calculates the sum of the integers inside a string. For example, in the string "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog", the sum of the integers is 3635.

function sum_of_integers_in_string(string $s): int {
    $s = str_replace('.', ' ',$s);
    return array_sum(explode(' ', preg_replace('/[a-z]+/i', ' ', $s)));
}

$answer = sum_of_integers_in_string("12.4");
print_r("$answer \n");
?>
