<?php

  include "./connection.php";    
  
  $query = "SELECT COUNT(*) as users FROM users";
  $result = $con->query($query);
  $row = $result->fetch_assoc();
  echo $row['users'];
  