<?php
 include "./connection.php";
 $query = "SELECT * FROM Products";
 $result = $con->query($query);
 

 echo "<ul>";
 while ($row = $result->fetch_assoc()) 
 {
    $pname = $row['ProductName'];
     echo "<li class='products'>".
            "<img src='./images/" . $row['Image'] . "' class=images >".
            "<p>ID " . $row['ProductID'] . " </p>
            <h5>" . $row['ProductName'] . "</h5>
            <p>₹" . $row['Price'] . " </p>
            
            <a href='./product.php?id=" . $row['ProductID'] . "'>View Details</a>
          </li>";
 }
echo "</ul>";