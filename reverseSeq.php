<?PHP
// 8 kyu - Reversed sequence
// Get the number n (n>0) to return the reversed sequence from n to 1.
//
// Example : n=5 >> [5,4,3,2,1]


function reverseSeq ($n) {
  return range($n, 1);
};

$answer = reverseSeq(5);
print_r($answer);
?>
