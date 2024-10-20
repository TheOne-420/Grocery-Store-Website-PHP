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
            --primary-color: #001F3F;
            --accent-color:#FFFBE6;
            --font-color: #D91656;
        }
        #dropdown
        {
            text-align: center;
            width: 100px;
        }
        .dropbtn
        {
            margin:10px;
            width: inherit;
            background-color: var(--font-color);
            color: #FFD700;;
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
        .dropbtn div i
        {
            display: inline;
            padding: 3px;
            padding-top: 10px;
            
        }
        #down-arrow
        {
            
            display: none;
            position: absolute;
        }
        .dropdown-content
        {
            display: none;
            position: absolute;
            margin-left: 10px;
            width: 115px;
            
            border-radius: 15px;
            background-color: var(--font-color);
            
        }
        .dropdown-content a
        {
            width: 70%;
            
            display: inline-block;
            text-decoration: none;
            color: #FFD700;
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
            background-color: #FFFBE6;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
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
            transform: scaleX(1.09) translate(30%,-5px);
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
    <div id="dropdown">
    
         <button class="dropbtn">Categories</button> 
         <!-- <div id="arrow-contianer"> -->
            <!-- <i id="right-arrow" class="fa-solid fa-caret-right"></i></div>
            <i id="down-arrow" class="fa-solid fa-caret-down" ></i> -->
         
        
         
    
   
    <div class="dropdown-content" id="lists">
        <a href="./category/Vegetables.php">Vegetables</a>
        <a href="./category/Fruits.php">Fruits</a>
        <a href="./category/Dairy.php">Diary</a>
        <a href="./category/Misc.php">Diary</a>
    </div> 
</div>

<section id="hero">
  
    <h1>Welcome to our shop!</h1>
    <p>Here you can find all our products.</p>
    <!-- Add products here -->
    <?php include "displayProducts.php" ?>
</section>
<script>
        function toggleDown() 
        {
            let rightArrow =document.getElementById("right-arrow");
            let downArrow =document.getElementById("down-arrow");
            rightArrow.style.visibilty = "hidden";
            downArrow.style.display = "inline-block";
        }
        function toggleRight() 
        {
            let rightArrow =document.getElementById("right-arrow");
            let downArrow =document.getElementById("down-arrow");
            
            downArrow.style.display = "none";
            rrightArrow.style.visibilty = "visible";
        }
        
            
            
            
        
    </script>
</body>
</html>