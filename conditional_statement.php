<?php


$sub1 = 85;
$sub2 = 78;
$sub3 = 92;
$sub4 = 66;
$sub5 = 50;


function gradePoint($mark) {
    if ($mark >= 80) {
        return 4.00;
    } else if ($mark >= 75) {
        return 3.75;
    } else if ($mark >= 70) {
        return 3.50;
    } else if ($mark >= 65) {
        return 3.25;
    } else if ($mark >= 60) {
        return 3.00;
    } else if ($mark >= 55) {
        return 2.75;
    } else if ($mark >= 50) {
        return 2.50;
    } else if ($mark >= 45) {
        return 2.25;
    } else if ($mark >= 40) {
        return 2.00;
    } else {
        return 0.00;
    }
}

$g1 = gradePoint($sub1);
$g2 = gradePoint($sub2);
$g3 = gradePoint($sub3);
$g4 = gradePoint($sub4);
$g5 = gradePoint($sub5);


$gpa = ($g1 + $g2 + $g3 + $g4 + $g5) / 5;


echo "GPA: " . round($gpa, 2);

?>
