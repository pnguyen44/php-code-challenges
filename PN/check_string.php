<?php
// Write a function to determine if a case sensitive string is a substring of another string.  
function check_string($str, $word) {
  return stristr($str, $word) ? 'true' : 'false';
}

?>
