<?php
 require_once("connection.php");

 $query = "SELECT * FROM Products order by ProductID"; 
 $result = mysqli_query($con,$query);

 echo "<div class='products-container'>";
 while($row = mysqli_fetch_array($result))
 {
    
        // Display the records in a formatted manner.
        echo "<div class='records'>";  
            echo "<a href='product.php?id=".$row['ProductID']."'><span>".$row['ProductName']."</span></a>";   
            echo "<img src='./Images/".$row['Image']."' width='50' height='50' class='imgs'>";
            
            echo "<br>";
            echo $row['ProductName'];
            echo "<br>";
            echo $row['Price'];
            echo "<br>";
            // echo $row['Quantity'];
            // echo "<br>";
            // echo "<a href='editproduct.php?id=".$row['ProductID']."'>Edit</a> | <a href='delete.php?id=".$row['ProductID']."'>Delete</a>";
            // echo "<br>";
        echo "</div>";
        
 }
 echo "</div>";