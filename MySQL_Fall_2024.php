<?php


$conn = new mysqli("localhost", "root", "");

if($conn -> connect_error){
    echo "Connection failed <br>";
}else{
    echo "Connected succesfully <br>";
}

echo " <h2> Student Data <h2> <br>";

$conn->query("
CREATE DATABASE IF NOT EXISTS uiuweb_final
");
$conn->select_db("uiuweb_final");

$conn->query("
CREATE TABLE IF NOT EXISTS student_final(
    StudentID INT PRIMARY KEY,
    StudntName VARCHAR(50),
    CourseID INT,
    CourseTittle VARCHAR(50),
    Grade INT,
    LetterGrade CHAR(1)
)");









?>