<?php
function pizzaParty($students, $slicesPerStudent, $slicesPerPizza) {

    $totalSlicesNeeded = $students * $slicesPerStudent;
    $totalPizzas = ceil($totalSlicesNeeded / $slicesPerPizza);
    $totalSlices = $totalPizzas * $slicesPerPizza;
    $leftoverSlices = $totalSlices - $totalSlicesNeeded;
    $pricePerSlice = 1050 / $slicesPerPizza;
    $wastedMoney = $leftoverSlices * $pricePerSlice;

    echo "Total Pizzas: $totalPizzas<br>";
    echo "Leftover Slices: $leftoverSlices<br>";
    echo "Wasted Money (BDT): $wastedMoney<br><br>";
}


pizzaParty(10, 3, 8);
pizzaParty(7, 2, 6);
pizzaParty(12, 2, 4);


?>
