<?php
 require_once "connection.php";

 $query = "SELECT * FROM Products ORDER BY ProductName DESC"; 
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
            echo "₹".$row['Price'];
            echo "<br>";
            echo "<button id='addToCart' ><a href='addToCart.php?id=".$row['ProductID']. "'>ADD TO CART</a></button>";
            ///       CART ICON
            //     echo 
        //     "<a  id='cart-icon' href='cart.php?id=".$row["ProductID"]
        //     ."'>". "<i class='fa-solid fa-cart-shopping'></i>"
        //    ."</a> ";
            // echo $row['Quantity'];
            // echo "<br>";
            // echo "<a href='editproduct.php?id=".$row['ProductID']."'>Edit</a> | <a href='delete.php?id=".$row['ProductID']."'>Delete</a>";
            // echo "<br>";
        echo "</div>";
        
 }
 echo "</div>";