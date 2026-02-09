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

$conn->query("
INSERT IGNORE INTO student_final
(StudentID,StudntName, CourseID, CourseTittle,Grade, LetterGrade)
VALUES
(1,'karim uddin',101,'Web programming',85,'B'),
(2,'Rahim Ahmed',101,'Web programming',92,'A'),
(3,'Jashim Hossain',102,'Project Managemnt',78,'C')
");


echo "<b>Letter Grade Count</b><br>";

$r = $conn->query("
SELECT LetterGrade, COUNT(*) AS Total
FROM student_final
GROUP BY LetterGrade
");

while($row= $r->fetch_assoc()){
    echo $row['LetterGrade'].": ".$row['Total']."<br>";
}

$conn->query("
UPDATE student_final
SET LetterGrade = 'C'
WHERE Grade<75 AND LetterGrade != 'D'
");
 
$conn->query("
UPDATE student_final
SET LetterGrade = 'C'
WHERE Grade >80 AND Grade+5 <= 90
");


echo "<b>Course popularity</b><br>";

$r = $conn->query("
SELECT CourseTittle, COUNT(*) AS Total
FROM student_final
GROUP BY CourseTittle
ORDER BY Total DESC
");

while($row=$r->fetch_assoc()){
    echo $row['CourseTittle']. ": " .$row['Total']."<br>";
}







?>