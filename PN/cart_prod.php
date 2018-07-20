<?php
// Write a function that returns an array of the cartesian product of two sets.

function cart_prod_2_sets($sets) {
  $result = [];
  for ($a = 0; $a < count($sets[0]); $a++) {
    for ($i = 0; $i < count($sets[1]); $i++) {
      $result[] = [$sets[0][$a], $sets[1][$i]];
    };
  };
  return $result;
}

// test
print_r(cart_prod_2_sets([[1], [1]]));
print_r(cart_prod_2_sets([[1], ['a']]));
print_r(cart_prod_2_sets([['a'], [1]]));
print_r(cart_prod_2_sets([[1, 2, 3], ['a']]));
print_r(cart_prod_2_sets([[1, 2], ['a', 'b']]));


?>
