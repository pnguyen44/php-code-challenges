<?php
// 7 kyu - Battle of the characters (Easy)
// Description:
// Groups of characters decided to make a battle. Help them to figure out which group is more powerful. Create a function that will accept 2 variables and return the one who's stronger.
//
// Rules:
// Each character have its own power: A = 1, B = 2, ... Y = 25, Z = 26
// Only capital chatacters can and will participate a battle.
// Only two groups to a fight.
// Group whose total power (A + B + C + ...) is bigger wins.
// If the powers are equal, it's a tie.
// Examples:
//   battle("ONE", "TWO"); // => "TWO"`
//   battle("ONE", "NEO"); // => "Tie!"

function translate($str) {
  $alph = array_combine(range(1,26), range('A', 'Z'));
  return array_map(function($l) use($alph) {
      if(strtoupper($l) === $l) {
        return array_search($l, $alph);
      } else {
        return 0;
      }
  }, str_split($str));
}
function battle($x, $y) {
  return array_sum(translate($x)) === array_sum(translate($y)) ? "Tie!" : (array_sum(translate($x)) > array_sum(translate($y)) ? $x : $y);
}

$answer = battle("AAA", "Z");
print_r("$answer \n");
?>
