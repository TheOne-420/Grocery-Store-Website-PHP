<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Login page</title>
    <link rel="stylesheet" href="./style/dashboard.css">
    <link rel="stylesheet" href="./style/navbar.css">

</head>
<body> 
   <header>
       
        <img src="./images/logo.jpeg" alt="" id="logo">
        
       <nav id="navBar">
            <a href="./home.html"  class="links">Home</a>
            <a href="./shop.html" class="links">Shop</a>
            <a href="./contact.html" class="links">Contact</a>
            <a href="./about.html" class="links">About</a>
        </nav>
    </header>
    
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

    <section id="product-container">
        <h2>Product List</h2>
        
    </section>
</body>
</html>