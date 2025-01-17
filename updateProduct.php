<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="number"], input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Update Product</h1>
        <form method="post" id="updateForm">
            <label for="pid">ID of product you want to change:</label>
            <input type="number" name="pid" id="pid" required>
            <br>
            <label for="pname">Product name:</label>
            <input type="text" name="pname" id="pname" required>
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            <br>
            <input type="submit" value="Update" id="updateBtn" name="updateBtn">
            <br>
            <span id="message" class="error-message"></span>
            <br>
            <a href="./dashboard.php">Back to dashboard</a>
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
    
    // First check if product exists
    $query = "SELECT * FROM Products WHERE ProductID = $id";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // Get the new product values from the form
        $name = $_POST['pname'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // Update the product in the database
        $updateQuery = "UPDATE Products SET ProductName='$name', Price=$price, Quantity=$quantity WHERE ProductID = $id";
        if ($con->query($updateQuery) === TRUE) {
            echo "<div class='main'><br>Product with ID $id has been updated.</div>";
        } else {
            echo "<div class='main'><br>Error updating product: " . $con->error . "</div>";
        }
    } else {
        echo "<div class='main'><br>No product found with ID $id.</div>";
    }
}
?>
