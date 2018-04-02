<?php
/*
My friend John likes to go to the cinema. He can choose between system A and system B.

System A : buy a ticket (15 dollars) every time
System B : buy a card (500 dollars) and every time 
    buy a ticket the price of which is 0.90 times the price he paid for the previous one.

#Example: If John goes to the cinema 3 times:

System A : 15 * 3 = 45
System B : 500 + 15 * 0.90 + (15 * 0.90) * 0.90 + (15 * 0.90 * 0.90) * 0.90 ( = 536.5849999999999, no rounding for each ticket)

John wants to know how many times he must go to the cinema so that the final result of System B, when rounded up to the next dollar, will be cheaper than System A.

The function movie has 3 parameters: card (price of the card), ticket (normal price of a ticket), perc (fraction of what he paid for the previous ticket) and returns the first n such that

ceil(price of System B) < price of System A.

More examples:

movie(500, 15, 0.9) should return 43 
    (with card the total price is 634, with tickets 645)

*/

// Вариант 1
function movie($card, $ticket, $perc) {
    // your code
    $count = 0;
    $tickets = 0;
    do {
      $count += 1;
      $priceSystemA = $ticket * $count;
      $tickets = $tickets + $ticket * $perc ** $count;
      $priceSystemB = $card + $tickets;
    } while (ceil($priceSystemB) >= $priceSystemA);
    return $count;
}

// Вариант 2

function movie($card, $ticket, $perc) {
    $need = 0;
    do {
        $need++;
        $card += $ticket * ($perc ** $need);
    } while (ceil($card) >= ($ticket * $need));   
    return $need;
}
