<?php
// Write a function that returns an array of the cartesian product of two sets.

function cart_prod_2_sets($setA, $setB) {
  $result = [];
  for ($a = 0; $a < count($setA); $a++) {
    for ($i = 0; $i < count($setB); $i++) {
      $result[] = [$setA[$a], $setB[$i]];
    };
  };
  return $result;
}

// test
$a = [1];
$b = [1, 2];
$c = [1, 2, 3];
$x = ['a'];
$y = ['a', 'b'];
$z = ['a', 'b', 'c'];

print_r(cart_prod_2_sets($a,$a));
print_r(cart_prod_2_sets($a,$x));
print_r(cart_prod_2_sets($x,$a));
print_r(cart_prod_2_sets($c,$x));
print_r(cart_prod_2_sets($b,$y));

?>
