<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home</title>

 <link rel="stylesheet" href="./style/navbar.css">
 <style>
    :root
    {
        --primary-color: #beef00;
        --accent-color:#d0bdf4;
    --font-color: #0049B7;
    }
    body
    {
        background-color: #9A1750;
        color: #E3E2DF;
        text-align: center;
    }
   #product-section
{

    background-color: var(--accent-color);
    color: var(--font-color);
    
}
.products-container
{
    display: grid;
    grid-template-columns: repeat(5,1fr);
    
    
}

.records
{
    
    border-radius: 4px;
    margin: 10px;
    outline: #beef00 2px solid;

}
.records:hover
{
    
    background-color: var(--primary-color);
    color: var(--font-color);
    /* animation: borderAnimation 1.5s 1s infinite linear; */

}
.records a
{
    text-decoration: underline ;
    color: var(--font-color);
}

.img-container
{
    width: 100%;
    aspect-ratio: 4/3;
    overflow: hidden;
}
.imgs
{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
}
#addToCart
        {
            background-color:  #f43f70;
            color: #f9f9fb;
            border: 2px #EE66A6 solid;
            border-radius: 5px;
            margin: 0% auto;
            width: 50% ;
            
            /* box-shadow: -5px 3px 2px #8FD14F; */
        }
        #addToCart:hover
        {  
            margin: 15px;
            background-color:  #f9f9fb;
            color: #f43f70;
            border: 2px #0099ff58 solid;
            border-radius: 5px;
            transform: scaleX(1.09) translate(30%,-5px);
            transition: all .6s ease 1s;
            /* box-shadow: 5px -2px 2px #8FD14F; */
        }
 </style>
 <script defer src="./js/activePage.js"></script>

</head>
<body> 
    <?php include "./navbar.php" ?>
    
    <section id="product-section">
        <h2>Product List</h2>
       
        <?php
         //Display the product list
         include "./displayProducts.php";
         
        ?>
    </section>
    <script>

    </script>
</body>
</html>
