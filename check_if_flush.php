<?php
// 7 kyu  - Determine if poker hand is flush
// Determine if the poker hand is flush
//
// Your function will be passed a list of strings with 5 strings each representing a poker card in the format "5H" (5 of hearts) meaning the value of the card followed by the initial of its suit (Hearts, Spades, Diamonds or Clubs). No jokers included
//
// Your function should return true if the hand is flush meaning if the five cards are of the same suit
//
// The possible card values are 2, 3, 4, 5, 6, 7, 8, 9, 10, Jack or Knave (J), Queen (Q), King (K), Ace (A)
//
// Eg.
//
// AS, 3S, 9S, KS, 4S  should return true
//
// AD, 4S, 7H, KS, 10S  should return False.

function checkIfFlush($cards) {
  $result = array_map(function($c) {
    return substr($c,-1);
  }, $cards);
  return count(array_unique($result)) === 1 ? true : false;
}

// Alternative Solution:
// function checkIfFlush($cards)
// {
//   foreach ($cards as &$value) {
//     $value = ltrim($value, '0123456789JQKA');
//   }
//   return 1==count(array_unique($cards));
// }

$answer = checkIfFlush(["AS", "3S", "9S", "KS", "4S"]);
print_r("$answer \n");
?>
