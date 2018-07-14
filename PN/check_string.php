<?php
// Write a function to determine if a case sensitive string is a substring of another string.  
function check_string($str, $word) {
  return stristr($str, $word) ? 'true' : 'false';
}

$test = check_string('appleistes is blue', 'test');
print_r($test);

?>
