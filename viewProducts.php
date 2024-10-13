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
    .products-container
    {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
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
 echo "<div class='products-container'>";
 while ($row = $result->fetch_assoc()) 
 {
   
     
     echo "<a href='product.php?id=".$row['ProductID']."'><span>".$row['ProductName']."</span></a>";   
     echo "<img src='./Images/".$row['Image']."' width='50' height='50' class='imgs'>";
     
     echo "<br>";
     echo $row['ProductName'];
     echo "<br>";
     echo $row['Price'];
     echo "<br>";
     echo "<p>₹" . $row['Price'] . " </p>  <a href='./product.php?id=" . $row['ProductID'] . "'>View Details</a>";
  
 }    

 echo "</div>";
