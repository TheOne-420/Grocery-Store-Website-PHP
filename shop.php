<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shop</title>
    <link rel="stylesheet" href="./style/navbar.css">
    <script defer src="./js/activePage.js"></script>
    <style>
      :root
        {
            --primary-color: #001F3F;
            --accent-color:#FFFBE6;
            --font-color: #D91656;
        }
        #hero 
        {
            height: 500px;
        }
        #hero aside 
        {
          
            float: left;
        }
  
        #product-section
        {
            background-color: var(--accent-color);
            color: var(--font-color);   
        }
        .products-container
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            /* //grid-template-columns: repeat(4,1fr);
            
            gap:15px; */
        }

        .records
        {  
            width: 300px;
            border-radius: 4px;
            border: none;
            margin: 10px;
            background-color: #eeeee6;
        }
        .records:hover
        { 
            border: #D91656 3px solid;
            color: var(--font-color);
            /* animation: borderAnimation 1.5s infinite linear; */
        }
        .img-container
        {
            width: 100%;
            aspect-ratio: 3/2;
            overflow: hidden;
            cursor: pointer;
        }
        .imgs
        {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: black 1px solid;
           
            border-radius: 8px;

        }
        #addToCart
        {
            background-color:  #f43f70;
            color: #f9f9fb;
            border: 2px #EE66A6 solid;
            border-radius: 20px;
            padding: 5px;
            margin: 5px 10px;
            width: 40%;
            /* box-shadow: -5px 3px 2px #8FD14F; */
        }
        #addToCart:hover
        {  
            margin: 15px;
            background-color:  #f9f9fb;
            color: #f43f70;
            border: 2px #0099ff58 solid; 
            transform: scaleX(1.09) translateY(-5px) translateX(50%);
            transition: all .6s ease;
            /* box-shadow: 5px -2px 2px #8FD14F; */
        }
        #addToCart a
        { 
            color: white;
            text-decoration: none;
        }
        #addToCart:hover a
        { 
            color:#f43f70;
            text-decoration: none;
        }
    </style>
</head>
<body> 
<?php include "./navbar.php" ?>
<ul id="category">
    <li><a href="#category">Vegetables</a></li>
    <li><a href="#category">Fruits</a></li>
    <li><a href="#category">Diary</a></li>
    <li><a href="#category">Diary</a></li>
    <li><a href="#category">More Categories</a></li>
    <li><a href="#category">Sale</a></li>
    <li><a href="#category">New Arrivals</a></li>
   
</ul>
<section id="hero">
  
    <h1>Welcome to our shop!</h1>
    <p>Here you can find all our products.</p>
    <!-- Add products here -->
    <?php include "displayProducts.php" ?>
</section>
</body>
</html>