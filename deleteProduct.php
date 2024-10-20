<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Product</title>
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

        .main 
        {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 
        {
            color: #333;
        }

        form 
        {
            margin-bottom: 20px;
        }

        label 
        {
            display: block;
            font-size: 1rem;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] 
        {
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
    </style>
</head>
<body>
    <div class="main">
        <h1>Delete Product</h1>
        <form method="post" id="updateForm">
            <label for="pid">ID of product you want to delete:</label>
            <input type="text" name="pid" id="pid" placeholder="Enter product ID">
            <input type="submit" value="Submit" id="submitBtn" name="submitBtn">
        </form>
        <a href="./dashboard.php">Back to dashboard</a>
    </div>
</body>
</html>

<?php
if (isset($_POST['submitBtn'])) 
{
    // Connect to the database
    include "./connection.php";
    $id = $_POST['pid'];
    
    // Check if product exists
    $query = "SELECT * FROM Products WHERE ProductID = $id";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // Delete the product
        $query = "DELETE FROM Products WHERE ProductID = $id";
        $con->query($query);
        echo "<div class='main'><br>Product with ID $id has been deleted.</div>";
    } else {
        echo "<div class='main'><br>No product found with ID $id.</div>";
    }
}
?>
