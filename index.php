<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Login page</title>
    <link rel="stylesheet" href="./style/dashboard.css">
    <link rel="stylesheet" href="./style/navbar.css">

</head>
<body> 
   <?php include "./navbar.php"; ?>
    
    <section id="main">
        
        <div class="cards">
            <h4>No of products</h4>
            <?php include "./countProducts.php"?>
        </div>
        <div class="cards">
        <a href="./updateProduct.php" class="links">  <h4>Update a product</h4> </a>    
         
        </div>
        <div class="cards">
         <a href="./viewProducts.php" class="links"><h4>View all products product</h4></a>
        </div>
        <div class="cards">
            <a href="./deleteProduct.php" class="links"><h4>Delete product</h4></a>
        </div>
        <!-- <div class="cards"></div>
        <div class="cards"></div> -->
    </section>

    <section id="product-section">
        <h2>Product List</h2>
       
        <?php
         //Display the product list
         include "./displayProducts.php";
         
        ?>
    </section>
</body>
</html>