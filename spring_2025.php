<?php
function techFestBudget($attendees, $costPerPerson, $venueCapacity) {

    $totalVenues = ceil($attendees / $venueCapacity);
    $totalSeats = $totalVenues * $venueCapacity;
    $emptySeats = $totalSeats - $attendees;
    $wastedMoney = $emptySeats * $costPerPerson;

    echo "Total Venues: $totalVenues<br>";
    echo "Empty Seats: $emptySeats<br>";
    echo "Wasted Money: " . number_format($wastedMoney) . " BDT<br><br>";
}

techFestBudget(250, 120, 80);
techFestBudget(180, 150, 100);
techFestBudget(300, 100, 75);
?>
