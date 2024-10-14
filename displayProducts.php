<?php
 require_once "connection.php";

 $query = "SELECT * FROM Products order by ProductID limit 15"; 
 $result = mysqli_query($con,$query);

 echo "<div class='products-container'>";
 while($row = mysqli_fetch_array($result))
 {
    
        // Display the records in a formatted manner.
        echo "<div class='records'>";  
            echo "<a href='product.php?id=".$row['ProductID']."'><span>".$row['ProductName']."</span></a>";   
            echo "<div class='img-container'>";
            echo "<img src='./Images/".$row['Image']."'  class='imgs'>";
            echo "</div>";
            echo "<br>";
            echo $row['ProductName'];
            echo "<br>";
            echo $row['Price'];
            
            echo 
            "<a  id='cart-icon' href='cart.php?id=".$row["ProductID"]
            ."'>". "<i class='fa-solid fa-cart-shopping'></i>"
           ."</a> ";
            // echo $row['Quantity'];
            // echo "<br>";
            // echo "<a href='editproduct.php?id=".$row['ProductID']."'>Edit</a> | <a href='delete.php?id=".$row['ProductID']."'>Delete</a>";
            // echo "<br>";
        echo "</div>";
        
 }
 echo "</div>";