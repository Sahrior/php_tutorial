<?php
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "MySQL Connected Successfully! good work <br>";
}

$conn->query("CREATE DATABASE IF NOT EXISTS testdb");

echo "Database created!<br>";


$conn->select_db("testdb");

$conn->query("
CREATE TABLE IF NOT EXISTS students (
    id INT PRIMARY KEY,
    name VARCHAR(50)
)");

echo "Table created!<br>";


$conn->select_db("testdb");

$conn->query("INSERT IGNORE INTO students VALUES (1,'Sahrior')");
$conn->query("INSERT IGNORE INTO students VALUES (2,'Rahim')");
$conn->query("INSERT IGNORE INTO students VALUES (3,'afifa')");
$conn->query("INSERT IGNORE INTO students VALUES (4,'ghibnat')");


echo "Data inserted!<br>";

$conn->select_db("testdb");

$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()){
    echo $row['id']." - ".$row['name']."<br>";
}


?>
