<?php
// 7 kyu - #~For Kids~# d/m/Y -> Day of the week.
// #~For Kids Challenges~#
// Your task is easy, write a function that takes an date in format d/m/Y(String) and return what day of the week it was(String).
// Example: "21/01/2017" -> "Saturday", "31/03/2017" -> "Friday"

function day_of_the_week($date){
  $date = str_replace('/','-', $date);
  return date('l', strtotime($date));
}

// Alternative solutions:
// function day_of_the_week($date){
//   list($d, $m, $y) = explode('/', $date);
//   return date('l', strtotime("$y-$m-$d"));
// }

// function day_of_the_week($date){
//
//   $dow = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ];
//
//   $dt = DateTime::createFromFormat('d/m/Y', $date);
//
//   return $dow[ $dt->format('w') ];
// }

?>
