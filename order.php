<?php
require_once "./connection.php";
$totalAmount = $_GET['amt'];
$order_query = "INSERT INTO orders ( Amount) VALUES ( $totalAmount)";

if (mysqli_query($con, $order_query)) {
    
    $orderID = mysqli_insert_id($con);
    
    
    $cart_query = "SELECT cart.ProductID, cart.Quantity, products.Price, (cart.Quantity * products.Price) AS TotalPrice
                   FROM cart
                   INNER JOIN products ON cart.ProductID = products.ProductID";
    
    $result = mysqli_query($con, $cart_query);

   
    $cart_data = [];
    $cart_total = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        
        $productID = $row['ProductID'];
        $quantity = $row['Quantity'];
        $price = $row['Price'];

        $insert_query = "INSERT INTO orderitems (OrderID, ProductID, Quantity, Price)
                         VALUES ($orderID, $productID, $quantity, $price)";
        mysqli_query($con, $insert_query);
        
        
        $cart_data[] = $row;
        
        

        $cart_total += $row['TotalPrice'];
    }

    $insert_query = "INSERT INTO orders ( Amount) 
    VALUES (  $cart_total)";
    mysqli_query($con, $insert_query);
    

    
    $clear_query = "DELETE FROM cart";
    mysqli_query($con, $clear_query);
} 
else 
{
    echo "Error creating order: " . mysqli_error($con);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Orders</title>
    <style>
            

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-table th, .order-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .order-table th {
            background-color: #4CAF50;
            color: white;
        }

        .order-table tr:hover {
            background-color: #f1f1f1;
        }

        tfoot tr {
            font-weight: bold;
            background-color: #e9e9e9;
        }

        .checkout-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .checkout-button:hover {
            background-color: #45a049;
        }
        a
        {
            text-decoration: none;
            color: #000;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Order Summary</h1>
        <table class="order-table">
            <thead>
                
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $amt = 0;
                    //Get orders
                    $order_query = "SELECT * FROM orders";
                    $result = mysqli_query($con, $order_query);
                    $order = mysqli_fetch_assoc($result);
                    $totalAmount = $order['Amount'];
                    $order_items_query = "SELECT  orderitems.ProductID, orderitems.Quantity, orderitems.Price, products.ProductName
                                          FROM orderitems
                                          INNER JOIN products ON orderitems.ProductID = products.ProductID
                                          WHERE orderitems.OrderID = $orderID";
                                          
                                          $order_items_result = mysqli_query($con, $order_items_query);
                                          while ($order_item = mysqli_fetch_assoc($order_items_result)) {
                                             $amt += $order_item['Quantity'] * $order_item['Price'];
                                             echo "<tr>";
                                             echo "<td>". $order_item['ProductName']. "</td>";
                                             echo "<td>". $order_item['Quantity']. "</td>";
                                             echo "<td>$". $order_item['Price']. "</td>";
                                             echo "<td>$". ($order_item['Quantity'] * $order_item['Price']). "</td>";
                                             echo "</tr>";
                                          }
                ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total Amount</td>
                    <td><?php echo $amt?></td>
                </tr>
            </tfoot>
        </table>
        <a href="./shop.php"><button class="checkout-button">SHOP</button></a>
        
        
    </div>
</body>
</html>

</body>
</html>