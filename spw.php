<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>LimeLeaf</title>
    <style>
        :root
        {
            --primary-color: #4CAF50;
            --accent-color: #FFEB3B;
            --font-color: #212121;
        }
        section
        {
            width: 100vw;
            height: 100vh;
        }
        .home
        {
            background-image: url(./Images/site/bg-large.jpg);
            background-size:auto;
            background-color: var(--primary-color);
            color: var(--font-color);
            text-align: center;
            height: 640px;
        }
        .home:hover
        {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }
        .home .txt-lg 
        {
            display: grid;
            grid-template-columns: repeat(2,1fr);
        }
        .shop
        {
           
            background-color: var(--accent-color);
            color: var(--font-color);
            text-align: center;
            
        }
    </style>
</head>
<body>
    <?php include  "navbar.php"; ?>
    <section class="home">
        <h1>Welcome to LimeLeaf!</h1>
        <div class="txt-lg">
            <h3 id="txt-lg1">Fresh! <span>Swift Delivery</span></h3>
        </div>
       
        
        </p>
        <a href="products.php">View Our Products</a>
    </section>
    <section class="shop">
        
    </section>
</body>
</html>