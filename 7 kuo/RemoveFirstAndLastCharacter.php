<?php

/* It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry with strings with less than two characters.

*/

//Variant 1. Error on binary strings

function remove_char(string $s): string {
  // Write your code here
  
  return substr($s, 1, -1);
  
}

//Variant 2

function remove_char(string $s): string {
  // Write your code here
    return preg_replace('/^.|.$/','',$s);
}

