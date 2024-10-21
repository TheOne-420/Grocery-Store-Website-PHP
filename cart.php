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
        alert('Empty Cart,Redirecting to shop page.');    

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
            --primary-color: #931155ff;
            --dark-color: #2E3532;
            --accent-color:#FBF5F3;
      
        }
       
        
        
        .cart
        {
            text-align: center;
            display: flex;
            justify-content: space-between;
            background-color: var(--primary-color);
            color: var(--accent-color);
            border: 1px black solid;
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
            width: 140px;
            height: 140px;
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
            background-color: var(--dark-color);
            color: var(--accent-color);
            border: none;
            border-radius: 25px;
            padding: 5px;
            margin: 10px;
        }
        .main-wrapper
        {
            width: 200px;
        }
        #order #header ,#total-wrapper, .redirects, #subsection-two,#delivery-wrapper
        {
            display: inline-flex;
            align-items: center;
        }
        #total-wrapper
        {
            margin: 0%;
        }
        .redirects
        {
            color:  var(--accent-color);;
            text-decoration: none;
        }
        .icons
        {
            width: 20px;
            height: 20px;
            padding: 10px;
            color: white;
        }
        #checkout
        {
            position:sticky;
            top: auto;
            bottom:0;
            width:100%;
            height:30px;
            background-color: rgb(12, 131, 31);
            color: whitesmoke;
            border:none;
            border-radius: 10px;
            
        }
        #checkout:hover
        {
            background-color: white;
            color: rgb(12, 131, 31);
            border: 1px black  solid;
            transition: all 0.6s ease;
        }
        #total-txt
        {
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    
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
               $totalAmount  += $price;
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
   
    <section id="order"><div id="header">
                <img src="./Icons/svgs/solid/bag-shopping.svg" class="icons">
                <h1 id="order-heading">Order Summary</h1>
            </div>
        <div class="main-wrapper">
            
            
            
            <span id="subsection-two">
            <img src="./Icons/svgs/solid/link.svg" class="icons">
                Redirects
            </span>
            <br>
            <!-- <a href="checkout.php" class="redirects"> 
            
                
                <button id="checkout">Checkout</button>
            </a> -->
            <a href="shop.php" class="redirects">
                <img src="./Icons/svgs/solid/bag-shopping.svg"  class="icons"> 
                Continue Shopping
            </a>
            <a href="home.php" class="redirects">
                <img src="./Icons/svgs/solid/house.svg"  class="icons">
                  Back to Home 
            </a>
            <p id="delivery-wrapper" >
                <img src="./Icons/svgs/solid/truck-fast.svg" class="icons">
                <span id="delivery-txt">Delivery Fee: ₹<?php echo $totalAmount * 0.05; echo" (0.05% of total amount) " ?> </span>  
            </p> 
            <p id="total-wrapper" >
                <img src="./Icons/svgs/solid/receipt.svg" class="icons">
            <span id="total-txt">Total Amount: <?php echo $totalAmount;?></span>
            </p> 
        </div>
        
    </section>
     <a href="order.php?amt=<?php echo  $totalAmount;
?>"><button id="checkout">Checkout </button></a>
     <!-- <form method='post' action='order.php'>
            <input type='hidden'  value='$pid'>
            <input type='submit' value='Checkout' id='checkout'>
    </form>; -->
    
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

