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
        /* Animations */
        

        /* Styling */
        
        
        .cart
        {
            text-align: center;
            display: flex;
            justify-content: space-between;
            background-color: var(--accent-color);
            color: var(--light-color);
            border-radius: 25px;
            margin: 10px;
            

        }
     
        .left-container
        {
            border:#f43f70 solid 2px;
            border-radius: inherit;
        }
        .right-container
        {
            padding-right: 10px;
        }
        .productImages
        {
            width: 100%;
            height: 140px;
            object-fit: contain;
            border-radius: inherit;
        }
        form
        {
            margin: 0px;
        }
        #productID
        {
            background-color: #0000ff;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 5px;
        }
        #productID:hover
        {
            background-color: whitesmoke;
            color: #0000ff;
            cursor: pointer;
            transform: scaleX(1.09) translateY(-5px);
            transition: all 0.6 ease;
        }
        #order
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #0099ff;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 5px;
        }
        .main-wrapper
        {
            width: 200px;
        }
        #order #header ,#total-wrapper, .redirects, h5
        {
            display: inline-flex;
            align-items: center;
        }
        h5
        {
            margin: 0;
        }
        .redirects
        {
            color: whitesmoke;
            text-decoration: none;
        }
        .icons
        {
            width: 20px;
            height: 20px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div class="cart-wrapper">
        <?php 
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
               echo "<div class='cart'>";
                echo "<div class='left-container'>";
                    echo "<img class='productImages' src='./Images/". $row["Image"]. "'/>";
                echo "</div>";
                echo "<div class='right-container'>";
                     echo "<div class='text-content'>";
                           echo " <p>Quantity: ". $quantity. "</p>";
                           echo " <p>Unit Price: ". $unit_price. "</p>";
                           echo " <p>Total Price: ". $price. "</p>";
                           echo "<form method='post' action='removeFromCart.php?id=$pid'>";
                            echo "<input type='hidden'  value='$pid'>";
                            echo "<input type='submit' value='REMOVE' id='productID'>";
                            echo "</form>";
                    echo "</div>";
                echo "</div>";
                echo "</div>";
                
               
               
               
               
           }
           
           
           
        ?>
    </div>
    <section id="order"><div id="header">
                <img src="./Icons/svgs/solid/bag-shopping.svg" class="icons">
                <h1 id="order-heading">Order Summary</h1>
            </div>
        <div class="main-wrapper">
            
            
            <p id="total-wrapper" >
                <img src="./Icons/svgs/solid/receipt.svg" class="icons">
            <span>Total Amount: <?php echo $totalAmount;?></span> 
            </p> 
            <h5>
            <img src="./Icons/svgs/solid/link.svg" class="icons">

                Redirects
            </h5>
            <br>
            <a href="checkout.php" class="redirects"> 
            
                <img src="./Icons/svgs/solid/cash-register.svg"  class="icons">  
                Checkout
            </a>
            <a href="shop.php" class="redirects">
                <img src="./Icons/svgs/solid/bag-shopping.svg"  class="icons"> 
                Continue Shopping
            </a>
            <a href="home.php" class="redirects">
                <img src="./Icons/svgs/solid/house.svg"  class="icons">
                Back to Home 
            </a>
        </div>
    </section>
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