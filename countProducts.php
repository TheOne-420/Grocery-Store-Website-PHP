<?php

  include "./connection.php";    
  
  $query = "SELECT COUNT(*) as total_products FROM products";
  $result = $con->query($query);
  $row = $result->fetch_assoc();
  echo $row['total_products'];
  
