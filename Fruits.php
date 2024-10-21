<?php
require_once "./connection.php"; 
include"navbar.php";

$query = "
  SELECT p.ProductID, p.ProductName, p.Price, p.Quantity, p.Image
FROM products p
JOIN product_category pc ON p.ProductID = pc.ProductID
JOIN category c ON pc.CategoryID = c.CategoryID
WHERE c.CategoryName = 'Fruits';
";


$result = mysqli_query($con, $query);


if ($result) {
    
    if (mysqli_num_rows($result) > 0) 
    {
        echo "<div class='product-container'>"; 

        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product'>";
            echo "<p><strong>Product Name:</strong> " . $row['ProductName'] . "</p>";
            echo "<p><strong>Price:</strong> ₹ " . $row['Price'] . " </p>";           
             echo "<p><strong>Quantity:</strong> " . $row['Quantity'] . "</p>";
            echo "<p><img src='./Images/" . $row['Image']. "' alt='" . $row['ProductName'] . "'></p>";
            echo "<button id='addToCart' ><a href='addToCart.php?id=".$row['ProductID']. "'>ADD TO CART</a></button>";

            echo "</div>";
        }

        echo "</div>"; 
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
   
    <title>Fruits</title>
    <link rel="stylesheet" href="./style/category.css">

    </style>
</head>
<body>
   
</body>
</html>