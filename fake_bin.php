<?php
// 8 kyu - Fake Binary
// Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

function fake_bin($s) {
  $new = '';
  for($i = 0; $i < strlen($s); $i++) {
    if (intval($s[$i]) < 5) {
      $new = $new . '0';
    } else {
      $new = $new . '1';
    };
  };
  return $new;
};

// Alternative Solution:
// function fake_bin($s) {
//   return preg_replace(['/[0-4]/', '/[5-9]/'], [0,1],$s);
// };

?>
