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

// Alternative Solution:
// function cart_prod_2_sets($sets) {
//   $result = [];
//   $arr = [];
//   for ($s = 0; $s < count($sets[0]); $s++) {
//     $arr[] = $sets[0][$s];
//     for ($i = 0; $i < count($sets[1]); $i++) {
//       $result[] = array_merge($arr, [$sets[1][$i]]);
//     };
//     array_pop($arr);
//   };
//   return $result;
// }


// Write a function that returns an array of the cartesian product of three sets.
function cart_prod_3_sets($sets) {
  $result = [];
  $arr = [];
  for ($s = 0; $s < count($sets[0]); $s++) {
    $arr[] = $sets[0][$s];
    for ($a = 0; $a < count($sets[1]); $a++) {
      $arr[] = $sets[1][$a];
      for ($i = 0; $i < count($sets[2]); $i++) {
        $result[] = array_merge($arr, [$sets[2][$i]]);
      };
      array_pop($arr);
    };
    $arr = [];
  };
  return $result;
}


// test
print_r(cart_prod_2_sets([[1], [1]]));
print_r(cart_prod_2_sets([[1], ['a']]));
print_r(cart_prod_2_sets([['a'], [1]]));
print_r(cart_prod_2_sets([[1, 2, 3], ['a']]));
print_r(cart_prod_2_sets([[1, 2], ['a', 'b']]));
print_r(cart_prod_3_sets([[1, 2], [1, 2], [1, 2]]));

?>
