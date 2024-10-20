<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home</title>

 <link rel="stylesheet" href="./style/navbar.css">
 <link rel="stylesheet" href="./style/home.css">
<style>
 .hero 
 {
    background-image: url('./bg-large.webp'); /* Add a hero image */
    background-size: cover;
    background-position: center;
height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding-top: 100px; /* Add padding due to fixed header */
    color: whitesmoke;
    position: relative;
}
.shop-button 
{
    padding: 10px 25px;
    background-color: #beef00;
    color: #333;
    border: none;
    border-radius: 20px;
    font-size: 18px;
    cursor: pointer;
}

.shop-button:hover 
{
    background-color: #aacc00;
}

.hero-content 
{
    position: relative;
    z-index: 1;
}

.hero h1 
{
    font-size: 48px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 30px;
}
   
footer 
{
    width: 100vw;
    position: fixed;
    bottom:0;
    background-color: #333;
    color: #fff;
    padding: 30px 0;
    text-align: center;
    z-index:100;
}

footer p 
{
    margin: 10px 0;
}
</style>
 <script defer src="./js/activePage.js"></script>

</head>
<body> 
    <?php include "./navbar.php" ?>
    
    <section id="product-section">
        <!-- <h2>Product List</h2>
       
             <?php
         //Display the product list
         include "./displayProducts.php";
         
        ?> -->
    </section>
    <section class="hero">
        <div class="hero-content">
            <h1>Wide varities of products</h1>
           
            <a href="./shop.php">
                 <button class="shop-button">Shop Now</button>
            </a>
           
            
        </div>
        <footer>
                <p>&copy; 2024 LimeLeaf. All Rights Reserved.</p>
            </footer>
    </section>
    
</body>
</html>
