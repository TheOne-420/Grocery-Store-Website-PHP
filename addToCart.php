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
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#main {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

input[type="number"], input[type="text"] {
    padding: 10px;
    width: 100%;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.redirect a {
    display: block;
    margin: 10px 0;
    color: #007BFF;
    text-decoration: none;
}

.redirect a:hover {
    text-decoration: underline;
}

#active {
    visibility: hidden;
    background-color: #28a745;
    color: white;
    padding: 15px;
    border-radius: 5px;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1001;
    text-align: center;
    font-size: 18px;
}

#overlay {
    visibility: hidden;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1000;
}

#overlay.active {
    visibility: visible;
}

#active.active {
    visibility: visible;
}

    </style>
</head>
<body>
    <div id="main">
        <form method="post">
            <?php 
                if ($row) {
                    echo "<label for='quantity'>Quantity:</label>";
                    echo "<input type='number' id='quantity' name='quantity' min='1' max='100'  value='1' required>";
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

    // Check if product already exists in the cart
    $doesExistQuery = "SELECT * FROM cart WHERE ProductID=$id";
    $doesExistResult = mysqli_query($con, $doesExistQuery);
    $doesExistRow = mysqli_fetch_array($doesExistResult);
    
    if ($doesExistRow)
    {
        // Update the quantity of the existing product
        $updateQuantityQuery = "UPDATE cart SET Quantity = Quantity + $quantity WHERE ProductID=$id";
        mysqli_query($con, $updateQuantityQuery);
    }
    else
    {
        $query = "
                INSERT INTO cart (ProductID, Quantity) VALUES ($product_id, $quantity) ";
    mysqli_query($con, $query);
    }
    
    
    // Redirect after adding to cart
    header("Location: cart.php");
    exit();
}
?>
