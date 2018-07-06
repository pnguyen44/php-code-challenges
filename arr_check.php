<?php
// 7 kyu - Is every value in the array an array?
// Is every value in the array an array?
//
// This should only test the second array dimension of the array. The values of the nested arrays don't have to be arrays.
//
// Examples:
//
// [[1], [2]] => true
// ["1", "2"] => false
// [
//   new class {
//     public $one = 1;
//   },
//   new class {
//     public $two = 2;
//   }
// ] => false

function arr_check(array $a): bool {
  $arrays = array_filter($a, function ($v) {
    return is_array($v);
  });
  return count($a) === count($arrays);
}



$answer = (arr_check([
      new class {
        public $one = 1;
      },
      new class {
        public $two = 2;
      }
    ]));
print_r("$answer \n");

?>
