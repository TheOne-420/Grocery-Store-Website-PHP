<?php


require_once "connection.php";
include "navbar.php";


$searchTerm = $_POST['search'];

$query = "SELECT * FROM products WHERE ProductName like '%$searchTerm%'";
$result= mysqli_query($con, $query);
echo"<ul>";
while($row=mysqli_fetch_array($result))
{
   echo "<li>";
        echo "<div class='text-content'>";
        
        echo "Product name:". $row["ProductName"];
        echo "<br>";
        echo "Product price:". $row["Price"];
        echo "<br>";
        echo  "Product quantity:".$row["Quantity"];
        echo "<br>"; 
        echo "</div>";

        echo " <a id='img-link' href='product.php?id=".$row["ProductID"]."'>".
         "<img src='./Images/". $row["Image"].
        "'></a>";
       echo 
        "<a  id='cart-icon' href='cart.php?id=".$row["ProductID"]
        ."'>". "<i class='fa-solid fa-cart-shopping'></i>"
       ."</a> "
       ;
         

   echo "</li>";
}
echo"</ul>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Search Products</title>
    <style>
        :root 
        {
            --dark-color: #070a12;
            --light-color: #f9f9fb;
            --accent-color: #f43f70;
            
        }
        
       ul
       {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            font-family: Arial;
            list-style-type: none;
            margin: 0;
            padding: 20;
            overflow: hidden;
       }
       li 
       {
            
            display: flex;
            justify-content: space-between;
            flex-direction: row-reverse;
            border: var(--accent-color) 2px solid;
            border-radius: 3px;
       }   
       #cart-icon
       {
        z-index: 1;
        position: relative;
        padding: 5px;
       }
       #img-link
       {
        text-decoration: none;
        color: black;
        width: 50%;
        height: 100%;
       }
       #img-link img
       {
        width: inherit;
        height: inherit;
        
       }
       .text-content
       {
        width: 40%;
        height: inherit;
        border: var(--dark-color) 2px solid;
        padding: 20px;
       } 
    </style>
</head>
<body>
    

       <i class="fa "></i>
</body>
</html>

