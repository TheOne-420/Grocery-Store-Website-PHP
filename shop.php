<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shop</title>
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="./style/shop.cssshop.css">
    <script defer src="./js/activePage.js"></script>
    <style>
      :root
        {
            --primary-color: #2A6B74;    /* Deep teal */
            --secondary-color: #03045e;  /* Soft coral */
            --accent-color: #D9B44A;     /* Muted gold */
            --background-color: #F4F4F4; /* Light gray */
            --font-color: #fb6f92;       /* Dark charcoal */
            --font-color-light: #FFFFFF; 
            
        }
        body
        {
            background-color: var(--primary-color);
            
        }
        #dropdown
        {
            width: 100px;
        }
        .dropbtn
        {
            margin:10px;
            width: inherit;
            background-color: var(--secondary-color);
            color: var(--accent-color);
            border:none;
            border-radius: 20px;
            display: inline-block;
            position: relative;
        }
        .dropbtn div
        {   

            display: inline;
            padding: 3px;
            
        }
        
        
        .dropdown-content
        {
            display: none;
            position: absolute;
            margin-left: 10px;
            width: 115px;
            border-radius: 15px;
            background-color: var(--secondary-color);
            
        }
        .dropdown-content a
        {
            color: var(--accent-color);
            width: 70%;
            display: inline-block;
            text-decoration: none;
            padding: 12px 16px;
            text-align: left;
            background-color: transparent;
            font-size: 17px;
        }
       
        #dropdown:hover .dropdown-content
        {
            display:block;
        }
        
        .dropdown li:hover #category
        {
            display: block;
            position: absolute;
            
            box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
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
            
        }
        .product-link
        {
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
            color: lime;
        }
        .records
        {  
            width: 30%;
            border-radius: 4px;
            margin: 10px;
            background-color: var(--secondary-color);
            color: var(--font-color);
        }
        .records:hover
        { 
            outline: var(--background-color) 2px solid;
            color: var(--font-color-light);
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
            
            background-color:  #f9f9fb;
            color: #f43f70;
            border: 2px #0099ff58 solid; 
            transform: translateX(50%);
            transition: all .6s ease;
        
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
    <div id="dropdown">
         <button class="dropbtn">Categories</button> 
    <div class="dropdown-content" id="lists">
        <a href="./Vegetables.php">Vegetables</a>
        <a href="./Fruits.php">Fruits</a>
        <a href="./Misc.php">Misc.</a>
    </div> 
</div>

<section id="hero">
  
    
    <!-- Add products here -->
    <?php include "displayProducts.php" ?>
</section>

</body>
</html>