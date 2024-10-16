<?php
require_once "./connection.php";
//Display individual record

$id = $_GET['id'];

$query = "SELECT * FROM Products WHERE ProductID=$id";

$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
if ($row)
{

    echo "<h2>Product Details</h2>";
    echo "<table>";
    echo "<tr><td>Product ID: ". $row['ProductID']. "</td></tr>";
    echo "<tr><td>Product Name: ". $row['ProductName']. "</td></tr>";
    echo "<tr><td>Product Price: ". $row['Price']. "</td></tr>";
    echo "</table>";
}
// /echo "<a href='editproduct.php?id=".$row['ProductID']."'>Edit</a> | <a href='delete.php?id=".$row['ProductID']."'>Delete</a>";