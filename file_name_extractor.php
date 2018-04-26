<?php
// 6 kyu - extract file name
// You have to extract a portion of the file name as follows:
//
// Assume it will start with date represented as long number
// Followed by an underscore
// Youll have then a filename with an extension
// it will always have an extra extension at the end
// Inputs:
// 1231231223123131_FILE_NAME.EXTENSION.OTHEREXTENSION
//
// 1_This_is_an_otherExample.mpg.OTHEREXTENSIONadasdassdassds34
//
// 1231231223123131_myFile.tar.gz2
// Outputs
// FILE_NAME.EXTENSION
//
// This_is_an_otherExample.mpg
//
// myFile.tar
// The recommend way to solve it is using RegEx and specifically groups.

function fileNameExtractor(string $dirtyFileName): string {
  $result = explode('.', ltrim(strchr($dirtyFileName, '_'),'_'));
  return implode('.',array_slice($result, 0, 2));
}

// Alternative Solution:
// function fileNameExtractor(string $dirtyFileName): string {
//     $nm3 = explode (".", preg_replace("/[0-9]+_/", "", $dirtyFileName));
//     return $nm3[0].'.'.$nm3[1];
// }

?>
