
<?php include "product.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit product</title>
    <style>
        :root 
        {
            --dark-color: #070a12;
            --light-color: #f9f9fb;
            --accent-color: #f43f70;
      
        }
        label
        {
            display: inline-block;
            width: 100px;
            height: 50px;
        }
        #updateBtn
        {
            background-color: var(--accent-color);
            color: var(--light-color);
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            transition: all .6 linear;
        }
        #updateBtn:hover
        {
            background-color: var(--light-color);
            color: var(--accent-color   );
        }
    </style>
</head>
<body>
    <h2>Edit Product</h2>
    <form method="post">
            <label for="pname">Product name:</label>
            <input type="text" name="pname" id="pname">
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price">
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity">
            <br>
            <input type="submit" value="Update" id="updateBtn" name="updateBtn">
            <span id="message" class="error-message"></span>
            <br>
            <a href="./index.php">Back to dashboard</a>
    </form>
            
</body>
</html>
<?php
if (isset($_POST['updateBtn'])) 
{
   
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $query = "Update Products set ProductName='$name', Price=$price, Quantity = $quantity WHERE ProductID = $id";
    $con->query($query);
        
    
    
}
?>
