<?php
// 7 kyu - #~For Kids~# d/m/Y -> Day of the week.
// #~For Kids Challenges~#
// Your task is easy, write a function that takes an date in format d/m/Y(String) and return what day of the week it was(String).
// Example: "21/01/2017" -> "Saturday", "31/03/2017" -> "Friday"

function day_of_the_week($date){
  $date = str_replace('/','-', $date);
  return date('l', strtotime($date));
}

$answer = day_of_the_week("07/12/2000");
print_r("$answer \n");
?>
