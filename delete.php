<?php
require_once "./connection.php";
//Display individual record

$id = $_GET['id'];

$query = "DELETE FROM Products WHERE ProductID=$id";

if($result = mysqli_query($con,$query))
{
    echo"Successfully deleted";
}


