<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
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

        input[type="text"], input[type="number"], input[type="file"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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
        <h1>Add Product</h1>
        <form method="post" id="addProductForm" enctype="multipart/form-data">
            <label for="pname">Product Name:</label>
            <input type="text" name="pname" id="pname" required>
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            <br>
            <label for="image">Image (optional):</label>
            <input type="text" name="image" id="image">
            <br>
            <input type="submit" value="Add Product" id="addBtn" name="addBtn">
            <br>
            <span id="message" class="error-message"></span>
            <br>
            <a href="./dashboard.php">Back to dashboard</a>
        </form>
    </div>

    <?php
    if (isset($_POST['addBtn'])) 
    {
        // Connect to the database
        include "./connection.php";

        // Get product details
        $name = $_POST['pname'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_POST['image'];;

        

        // Prepare the SQL statement
        $query = "INSERT INTO Products (ProductName, Price, Quantity, Image) VALUES ('$name', $price, $quantity, '$image')";

        // Execute the query
        if ($con->query($query) === TRUE) 
        {
            echo "<div class='main'><br>Product '$name' has been added successfully.</div>";
        } 
        else 
        {
            echo "<div class='main'><br>Error adding product: " . $con->error . "</div>";
        }
    }
    ?>
</body>
</html>
