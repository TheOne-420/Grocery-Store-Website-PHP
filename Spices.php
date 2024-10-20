<?php
require_once "./connection.php"; // Include your database connection
include"navbar.php";
// Prepare the SQL query to retrieve product and category information
$query = "
  SELECT p.ProductID, p.ProductName, p.Price, p.Quantity, p.Image
FROM products p
JOIN product_category pc ON p.ProductID = pc.ProductID
JOIN category c ON pc.CategoryID = c.CategoryID
WHERE c.CategoryName = 'Spices';
";

// Execute the query
$result = mysqli_query($con, $query);

// Check if the query was successful
if ($result) {
    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='product-container'>"; // Flexbox container

        // Fetch and display the results
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product'>";
            echo "<p><strong>Product Name:</strong> " . htmlspecialchars($row['ProductName']) . "</p>";
            echo "<p><strong>Price:</strong> " . htmlspecialchars($row['Price']) . " USD</p>";
            echo "<p><strong>Quantity:</strong> " . htmlspecialchars($row['Quantity']) . "</p>";
            echo "<p><strong>Image:</strong> <img src='./Images/" . htmlspecialchars($row['Image']) . "' alt='" . htmlspecialchars($row['ProductName']) . "'></p>";
            echo "<p><strong>Category:</strong> " . htmlspecialchars($row['CategoryName']) . "</p>";
            echo "</div>"; // Close product div
        }

        echo "</div>"; // Close flexbox container
    } else {
        echo "<p>No products found.</p>";
    }
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
<!DOCTYPE html>

<head>
   
    <title>Veggies</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
           
            background-color: #f4f4f4;
        }

        .product-container 
        {
            display: flex;
            flex-wrap: wrap; /* Allows wrapping to the next line */
            justify-content: space-between; /* Distributes space between items */
        }

        .product 
        {
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            width: calc(30% - 20px); /* Width of each product box */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s; /* Adds a hover effect */
        }

        .product:hover 
        {
            transform: scale(1.05); /* Scale effect on hover */
        }

        .product img 
        {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        h2 
        {
            font-size: 18px;
            margin-bottom: 10px;
        }

        p 
        {
            margin: 5px 0;
        }

        strong 
        {
            color: #333; /* Make bold text darker */
        }

    </style>
</head>
<body>
   
</body>
</html>