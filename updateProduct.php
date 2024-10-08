<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form method="post" id="updateForm">
            <label for="pid">ID of product you want to change:</label>
            <input type="number" name="pid" id="pid">
            <br>
            <label for="pname">Product name:</label>
            <input type="text" name="pname" id="pname">
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price">
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity">

            <input type="submit" value="Update" id="updateBtn" name="updateBtn">
            <span id="message" class="error-message"></span>
            <br>
            <a href="./index.php">Back to dashboard</a>

           
        </form>
           
        <br>
    </div>
</body>
</html>
<?php
if (isset($_POST['updateBtn'])) 
{
    // Connect to the database
    include "./connection.php";
    $id = $_POST['pid'];
    $query = "SELECT * FROM Products where ProductID = $id";
    $result = $con->query($query);

    if($result->num_rows > 0)
    {
        $name = $_POST['pname'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $query = "Update Products set ProductName='$name', Price=$price, Quantity = $quantity WHERE ProductID = $id";
        $con->query($query);
        echo $query;
        echo "<br>Product with ID $id has been updated.";
    }
    else
    {
        echo "<br>No product found with ID $id.";
    }
}
