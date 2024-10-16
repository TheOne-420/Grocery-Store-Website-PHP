<?php 
    require_once "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM Products WHERE ProductID=$id";

    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add product to cart</title>
    <style>
        body {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #active {
            visibility: hidden;
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: 1110;
            background-color: green;
            color: white;
        }
        #overlay 
        {
           
            visibility: hidden;
            position: absolute;  
            top: 0;               
            left: 0;              
            width: 100vw;         
            height: 100vh;        
            background-color: rgba(0, 0, 0, 0.5); /* Updated for a transparent overlay */
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div id="main">
        <form method="post">
            <?php 
                if ($row) {
                    echo "<label for='quantity'>Quantity:</label>";
                    echo "<input type='number' id='quantity' name='quantity' min='1' max='100' required>";
                    echo "<br>";
                    echo "<label for='price'>Price:</label>";
                    echo "<input type='text' id='price' name='price' value='". $row['Price']."' readonly>";
                    echo "<br>";
                }
            ?>
            <div class="redirect">
                <input type="submit" name="submit" value="Add to cart" id="submit">
                <br>
                <a href="shop.php">Cancel</a>
                <br>
                <a href="product.php?id=<?php echo $_GET['id']; ?>">View product details</a>
                <br>
                <a href="cart.php">View cart</a>
                <br>
                <a href="shop.php">Continue shopping</a>
            </div>
            <br>
            <div id="active">
                Item added to cart!
            </div>
            <div id="overlay"></div>
        </form>
    </div>
    
    <!-- JavaScript for showing overlay on submit -->
    <script>
        document.getElementById('submit').addEventListener('click', function(event) 
        {
           
            document.getElementById('active').style.visibility = "visible";
            document.getElementById('overlay').style.visibility = "visible";
        });
    </script>
</body>
</html>

<?php 
if (isset($_POST['submit'])) 
{
    $quantity = $_POST['quantity'];
    // $price = $_POST['price'];
    $product_id = $_GET['id'];
    
    $query = "
    INSERT INTO cart (ProductID, Quantity) VALUES ($product_id, $quantity)
    
    
    ";
    mysqli_query($con, $query);
    
    // Redirect after adding to cart
    header("Location: cart.php");
    exit();
}
?>
