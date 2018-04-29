<?php
// 7 kyu - Nothing special
// The notorious Captain Schneider has given you a very straight forward mission. Any data that comes through the system make sure that only non-special characters see the light of day.
//
// Create a function that given a string, retains only the letters A-Z (upper and lowercase), 0-9 digits, and whitespace characters. Also, returns "Not a string!" if the entry type is not a string.

function nothing_special($s): string {
return is_string($s) ? preg_replace('/[^[:alnum:][:space:]]/u', '', $s) : 'Not a string!';
}

$answer = nothing_special("St@arboard P^ort$A$ ***little k@$ata fo&r ^my ^trou%bl$esSteamroller2.55");
print_r("$answer \n");

?>
