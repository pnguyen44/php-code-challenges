<?php
// 5 kyu - Where my anagrams at?
// What is an anagram? Well, two words are anagrams of each other if they both contain the same letters. For example:
//
// 'abba' & 'baab' == true
//
// 'abba' & 'bbaa' == true
//
// 'abba' & 'abbba' == false
// Write a function that will find all the anagrams of a word from a list. You will be given two inputs a word and an array with words. You should return an array of all the anagrams or an empty array if there are none. For example:
//
// anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']); // => ['aabb', 'bbaa']
//
// anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']); // => ['carer', 'racer']
//
// anagrams('laser', ['lazing', 'lazy',  'lacer']); // => []

function anagrams(string $word, array $words): array {
    $a = str_split($word);
    sort($a);
    $match = implode('', $a);
    $result = [];
    foreach($words as $w) {
        $a = str_split($w);
        sort($a);
        $test = implode('',$a);
        if ($test === $match) {
          $result[] = $w ;
        }
    }
    return $result;
}

$answer =  anagrams('racer', ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']);
print_r("$answer \n");

?>
