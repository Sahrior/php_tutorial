<?php

$names = array("Rahim", "Karim", "Sadia", "Ayesha");

print_r($names);

foreach ($names as $name) {
    echo $name . "\n";
}

$student = array(
    "name" => "Sahrior",
    "dept" => "CSE",
    "cgpa" => 3.85
);

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "\n";
}

?>
