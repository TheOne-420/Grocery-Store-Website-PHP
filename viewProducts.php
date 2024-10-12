<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Product lists</title>
  <style>
    #dashboardLink
    {
      width: 100vw;
      height: 10px;
      position: sticky;
      top:0;
      text-decoration: none;
      color: white;
      background-color: black;
       
      z-index: 1;
      
    }
    #dashboardLink:hover
    {
        text-transform: uppercase;
        color : olive ;
        font-style: italic;
    }
    
   
    
  </style>
</head>
<a href='./index.php' id="dashboardLink">Back to dashboard</a>
<body>
  
</body>
</html>
<?php
 include "./connection.php";
 $query = "SELECT * FROM Products";
 $result = $con->query($query);
 

 echo "<ul>";
 while ($row = $result->fetch_assoc()) 
 {
    $pname = $row['ProductName'];
     echo "<li class='products'>".
            // "<img src='./images/" . $row['Image'] . "' class=images >".
            "<p>ID " . $row['ProductID'] . 
            "</p> <h4>" . $row['ProductName'] . 
            "</h4> <p>₹" . $row['Price'] . " </p>  <a href='./product.php?id=" . $row['ProductID'] . "'>View Details</a>
            
          </li>";
 }
echo "</ul>";
