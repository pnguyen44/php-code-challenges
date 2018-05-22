<?php
// 7 kyu - Fibonacci's FizzBuzz
// The goal of this kata is two-fold:
//
// 1.) You must produce a fibonacci sequence in the form of an array, containing a number of items equal to the input provided.
//
// 2.) You must replace all numbers in the sequence divisible by 3 with Fizz, those divisible by 5 with Buzz, and those divisible by both 3 and 5 with FizzBuzz.
//
// For the sake of this kata, you can assume all input will be a positive integer.
//
// Use Cases
// Return output must be in the form of an array, with the numbers as integers and the replaced numbers (fizzbuzz) as strings.
//
// Examples
// Input:
//
// fibs_fizz_buzz(5);
// Output:
//
// [ 1, 1, 2, 'Fizz', 'Buzz' ]
// Input:
//
// fibs_fizz_buzz(1);
// Output:
//
// [1]
// Input:
//
// fibs_fizz_buzz(20);
// Output:
//
// [1,1,2,"Fizz","Buzz",8,13,"Fizz",34,"Buzz",89,"Fizz",233,377,"Buzz","Fizz",1597,2584,4181,"FizzBuzz"]

function fibs_fizz_buzz($n) {
  print_r($n);
  if($n === 1) return [1];
  if($n === 2) return [1,1];
  $arr = [1,1];
  $result = $arr;
  for($i = 0; $i < $n - 2; $i++) {
    $x =  $arr[$i] + $arr[$i + 1];
    // print_r("$x \n");
    $arr[] = $x;
    if ($x % 15 === 0) {
      $x ='FizzBuzz';
    } else if ($x % 3 === 0) {
      $x ='Fizz';
    } else if ($x % 5 === 0) {
      $x = 'Buzz';
    }

    $result[] = $x;
  }
  // print_r($result);
  return $result;
}


$answer = fibs_fizz_buzz(5);
print_r("$answer \n");
?>
