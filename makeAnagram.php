<?php
// Complete the makeAnagram function in the editor below. It must return an integer representing the minimum total characters that must be deleted to make the strings anagrams.

// function makeAnagram($a, $b) {
//   $arr1 = str_split($a);
//   $arr2 = str_split($b);
//
//   $long_w = count($arr1) > count($arr2) ? $arr1 : $arr2;
//   if ($long_w === $arr1) {
//     $short_w = $arr2;
//   } else {
//     $short_w = $arr1;
//   }
//   $count = 0;
//   for ($i = 0; $i < count($short_w); $i++) {
//     $index = array_search($short_w[$i],$long_w);
//     if ($index === false) {
//       $count += 1;
//     } else {
//       unset($long_w[$index]);
//     }
//   }
//   return count($long_w) + $count;
// }

// Alternative Solution:
function makeAnagram($a, $b) {
  $arr_1 = str_split($a);
  $arr_2 = str_split($b);

  for($i=0;$i<strlen($a);$i++){
      for($j=0;$j<strlen($b);$j++){
          if(!isset($arr_2[$j]))continue;
          if($arr_1[$i]==$arr_2[$j]){
              unset($arr_1[$i]);
              unset($arr_2[$j]);
              break;
          }
      }
  }
  return  count($arr_1) + count($arr_2);
}

// print_r(makeAnagram("cde", "abc")); // 4
print_r(makeAnagram("showman", "woman")); // 2

?>
