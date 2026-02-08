<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) die("Connection Failed");

echo "<h2>Sundarban Sales</h2>";

$conn->query("
CREATE DATABASE IF NOT EXISTS sundarban
");

$conn->select_db("sundarban");

$conn->query("
CREATE TABLE IF NOT EXISTS sales_data(
 SaleID INT PRIMARY KEY,
 ProductName VARCHAR(50),
 CategoryID INT,
 CategoryName VARCHAR(50),
 Quantity INT,
 Revenue INT
)");


$conn->query("
INSERT INTO sales_data VALUES
    (1,'Laptop',301,'Electronics',5,350000),
    (2,'Mouse',301,'Electronics',15,45000),
    (3,'Chair',302,'Furniture',8,64000),
    (4,'Desk',302,'Furniture',6,72000),
    (5,'Bottle',303,'Accessories',20,30000),
    (6,'Pen',303,'Accessories',25,20000)
");

// 1
echo "<b>Total Revenue Per Category</b><br>";
$r = $conn->query("
SELECT
    CategoryName,
    SUM(Revenue) AS Total
FROM sales_data
GROUP BY CategoryName
");

while($row = $r->fetch_assoc()){
    echo $row['CategoryName']." : ".$row['Total']."<br>";
}

// 2
$conn->query("
UPDATE sales_data
SET CategoryName = 'Low Performing'
WHERE Revenue < 40000
");

// 3
$conn->query("
UPDATE sales_data
SET Revenue = Revenue * 1.10
WHERE Revenue > 70000
");

// 4
echo "<br><b>Seller Status</b><br>";
$r = $conn->query("
SELECT
    s.ProductName,
    s.CategoryName,
    CASE
        WHEN s.Revenue >
        (
            SELECT AVG(Revenue)
            FROM sales_data
            WHERE CategoryName = s.CategoryName
        )
        THEN 'Top Seller'
        ELSE 'Regular Seller'
    END AS Status
FROM sales_data AS s
");

while($row = $r->fetch_assoc()){
    echo $row['ProductName']." - ".$row['Status']."<br>";
}
?>
