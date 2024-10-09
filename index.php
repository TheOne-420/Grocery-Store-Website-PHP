<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Login page</title>
    <link rel="stylesheet" href="./style/dashboard.css">
    <link rel="stylesheet" href="./style/navbar.css">

</head>
<body> 
   <header>
       <span>LOGO</span>
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
        <a href="./updateProduct.php">  <h4>Update a product</h4> </a>    
      
            
        </div>
        <div class="cards">
         <a href="./viewProducts.php"><h4>View all products product</h4></a>
        </div>
        <div class="cards">
            <a href="./deleteProduct.php"><h4>Delete product</h4></a>
        </div>
        <!-- <div class="cards"></div>
        <div class="cards"></div> -->
    </section>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur culpa voluptate esse explicabo magnam minus sapiente, expedita unde autem, quo consequuntur totam aut. Repellendus mollitia earum porro at expedita.</h1>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur culpa voluptate esse explicabo magnam minus sapiente, expedita unde autem, quo consequuntur totam aut. Repellendus mollitia earum porro at expedita.</h1>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur culpa voluptate esse explicabo magnam minus sapiente, expedita unde autem, quo consequuntur totam aut. Repellendus mollitia earum porro at expedita.</h1>
</body>
</html>