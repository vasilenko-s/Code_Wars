<?php
/*
Given a string, first turn each letter into its ASCII char code.

example:

'ABC' --> x=65, y=66, z=67 --> '656667'

Let's call this number 'total1'.

Then replace any incidence of the number 7, with the number 1.

'656667' ---> '656661'

Lets call this number 'total2'.

Then return the difference between the sum of the digits in total1 and total2:

  (6 + 5 + 6 + 6 + 6 + 7)
- (6 + 5 + 6 + 6 + 6 + 1)
-------------------------
                       6

*/ 
//Variant 1

function calc($s) {
  // Your code here
  $total1 = "";
  for ($i = 0; $i <= strlen($s) - 1; $i +=1) {
      $total1 .= ord($s[$i]);
   }
   $total2 = str_replace("7", "1", $total1);
   $diff = array_sum(str_split($total1)) - array_sum(str_split($total2));
   return $diff;
}

//Variant 2

function calc($s) {
   return substr_count(join(array_map('ord', str_split($s))), '7') * 6;
}




