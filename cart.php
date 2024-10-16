<?php
require_once "./connection.php";

include 'navBar.php';


$query = "
    SELECT 
        cart.Quantity,
        products.ProductID,
        products.ProductName,
        products.Price,
        products.Image,
        cart.Quantity * products.Price AS TotalPrice
    FROM  cart
    INNER JOIN products ON cart.ProductID = products.ProductID
    
        ";

$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) == 0)
{
    echo "<script>
        alert('Cart,Redirecting to shop page.');    

        window.location.href='/Store/shop.php';
    </script>";
    

}

 echo "<h2>Cart items</h2>";
 $totalAmount = 0;
while($row = mysqli_fetch_array($result))
 {
    
    $pid = $row["ProductID"];
    $pname = $row["ProductName"];
    $price = $row["TotalPrice"];
    $unit_price = $row["Price"];
    $quantity = $row["Quantity"];
    
    
    
    //Get to total amount
    $totalAmount += $price;
    
    
   
    echo "<table>";
    
        echo "<tr><td>Product Name: ". $pname. "</td></tr>";
        echo "<tr><td>"."<img src='./Images/". $row["Image"]."'</td></tr><br>"; 
        echo "<tr><td>Quantity: ". $quantity. "</td></tr>";
        echo "<tr><td>Unit Price: ". $unit_price. "</td></tr>";
        echo "<tr><td>Total Price: ". $price. "</td></tr>";
        

        
    echo "</table>";
    
    echo "<form method='post' action='removeFromCart.php?id=$pid'>";
    echo "<input type='hidden' name='productID' value='$pid'>";
    echo "<input type='submit' value='REMOVE'>";
    echo "</form>";
}
echo "<p>Amt: ". $totalAmount. "</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CART</title>
    <style>
        :root
        {
            --dark-color: #070a12;
            --light-color: #f9f9fb;
            --accent-color: #f43f70;
        }
        img
        {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    
    <!-- <h1>
        ADD TO CART
    </h1>
    <form  method="post">
        <label for="Quantity">Quantity</label>
        <input type="number" name="quantity" >
        <input type="submit" value="ADD" id="submit-btn" name="submit">
    </form> -->
</body>
</html>

<?php
   
    // $cquery = "SELECT Sum(Price*cart.Quantity), products.Price, cart.Quantity,products.ProductName 
    //    FROM cart INNER JOIN products ON cart.ProductID = products.ProductID GROUP by cart.ProductID";
    // $cresult = mysqli_query($con,$cquery);
    // echo $cresult;
                                  //TODO  QUERY FOR TOTAL
    // SELECT Sum(Price*cart.Quantity), products.Price, cart.Quantity,products.ProductName 
    //FROM cart INNER JOIN products ON cart.ProductID = products.ProductID GROUP by cart.ProductID;
   
    
   ?>