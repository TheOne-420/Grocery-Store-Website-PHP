<?php
require_once "./connection.php";

    $id = $_GET['id'];

    // Remove the item from the cart
    $query = "DELETE FROM cart WHERE ProductID = $id";
    $result = mysqli_query($con,$query);
   

    if ($result) 
    {
        echo "<script>
            alert('Item removed from cart successfully.');
            window.location.href='/Store/cart.php'; // Redirect back to cart page
        </script>";
    } else {
        echo "<script>alert('Error removing item from cart.');</script>";
    }

    // Update the total price in the cart table
    $total_query = "UPDATE cart SET TotalPrice = (SELECT SUM(Price * Quantity) FROM cart WHERE cart.ProductID = $id)";
    mysqli_query($con, $total_query);

mysqli_close($con);
?>
