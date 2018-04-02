<?php
/* A new task for you!

You have to create a method, that corrects a given time string. There was a problem in addition, so many of the time strings are broken. Time-Format is european. So from "00:00:00" to "23:59:59".

Some examples:

"09:10:01" -> "09:10:01"
"11:70:10" -> "12:10:10"
"19:99:99" -> "20:40:39"
"24:01:01" -> "00:01:01"

If the input-string is null or empty return exactly this value! (empty string for C++)
If the time-string-format is invalid, return null. (empty string for C++)

Have fun coding it and please don't forget to vote and rank this kata! :-)

I have created other katas. Have a look if you like coding and challenges.
*/

//Вариант 1 Errors on tests

function timeCorrect($timestring)
{
    // Проверка формата
        if (is_null($timestring)){
           return null;
        }
        if (empty($timestring)){
           return "";
        }   
        if (!(($timestring[2] === $timestring[5]) && ($timestring[2] === ":")))
           // var_dump($timestring[2]);
            return null;
        $times = explode(":", $timestring);
        foreach ($times as $time) {
            if (!is_numeric($time)) {
              // var_dump(0);
                return null;
            }
         }
     
     // Собственно решение
     $times = explode (":", $timestring);
//      var_dump($times);
     if ($times[2] > 60) {
         $times[2] = $times[2] - 60;
         $times[1] = $times[1] + 1;
     } 
     if ($times[1] > 60) {
         $times[1] = $times[1] - 60;
         $times[0] = $times[0] + 1;
     }    
     if ($times[0] >= 24) {
         $times[0] = $times[0] % 24;
         $times[0] = "0{$times[0]}";
     }
     $result = implode(":", $times);
         
    return $result;
}

//Вариант 2

function timeCorrect($timestring) {
    if (is_null($timestring)) {
      return null;
    }
    if (empty($timestring)) {
      return '';
    }
    if (!preg_match('/^\d{2}\:\d{2}\:\d{2}$/', $timestring)) {
      return null;
    }
    
    list($h, $m, $s) = explode(':', $timestring);
    $time = $h*3600 + $m*60 + $s;

    return date('H:i:s', $time);
}

