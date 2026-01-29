<?php

function movie_night($attendes, $seatcapacity, $ticketprice){

    $total_screen = ceil($attendes / $seatcapacity);

    $total_seats = $total_screen * $seatcapacity;

    $empty_seats = $total_seats - $attendes;

    $wastedmoney = $empty_seats * $ticketprice;


    echo "total screen:  $total_screen<br> ";
    echo "empty seats: $empty_seats<br>";
    echo "Wasted money: $wastedmoney <br> ";


}

movie_night(150, 60, 500);
movie_night(280, 100, 400);
movie_night(320, 120, 350);



?>
