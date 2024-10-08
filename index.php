<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/dashboard.css">
</head>
<body>
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
</body>
</html>