<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        #dashboardLink {
            width: 100vw;
            height: 50px;
            position: sticky;
            top: 0;
            text-decoration: none;
            color: white;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            font-size: 1.2rem;
        }

        #dashboardLink:hover {
            text-transform: uppercase;
            color: olive;
            font-style: italic;
            transition: color 0.3s ease;
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            gap: 20px;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 200px; /* Set a fixed width for uniformity */
            text-align: center;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            width: 100%;
            height: 50%;
            border-radius: 4px;
        }

        .product-name {
            font-weight: bold;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .product-price {
            color: #28a745; /* A green color for price */
            font-size: 1.1rem;
        }

        .view-details {
            text-decoration: none;
            color: #007bff; /* Blue color for link */
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
        }

        .view-details:hover {
            color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <a href='./index.php' id="dashboardLink">Back to dashboard</a>

    <div class='products-container'>
        <?php
        include "./connection.php";
        $query = "SELECT * FROM Products";
        $result = $con->query($query);
        
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product-card'>";
            echo "<img src='./Images/" . $row['Image'] . "' alt='" . $row['ProductName'] . "'>";
            echo "<div class='product-name'>" . $row['ProductName'] . "</div>";
            echo "<div class='product-price'>₹" . $row['Price'] . "</div>";
            echo "<a href='./product.php?id=" . $row['ProductID'] . "' class='view-details'>View Details</a>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
