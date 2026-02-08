<?php
// associative array = An array made of key=>value pairs

$capitals = array("USA"=>"Washington D.C.",
    "Japan"=>"Kyoto",
    "South Korea"=>"Seoul",
    "India"=>"New Delhi");

foreach($capitals as $key => $value){
    echo "{$key} {$value} <br>";
}
?>