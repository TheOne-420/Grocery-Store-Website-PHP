<?php
require_once "./connection.php";
//Display individual record

$id = $_GET['id'];

$query = "SELECT * FROM Products WHERE ProductID=$id";

$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) == 0)
{
    echo "<script>
    alert('No product of this id exists,Redirecting to main page.');    

    window.location.href='/Store/index.php';
    </script>";
    

}
$row = mysqli_fetch_array($result);
if ($row)
{
   
    $pname = $row["ProductName"];
    $price = $row["Price"];
    $quantity = $row["Quantity"];
    
    
    echo "<h2>Product Details</h2>";
    echo "<table>";
    echo "<tr><td>Product ID: ".  $id . "</td></tr>";
    echo "<tr><td>Product Name: ". $pname. "</td></tr>";
    echo "<tr><td>Product Price: ". $price. "</td></tr>";
    echo "<tr><td>"."<img src='./Images/". $row["Image"]."'</td></tr>";
    echo "</table>";
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
        img
        {
            width: 30%;
            height: 20%;
        }
        label
        {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"]
        {
            
            padding: 5px;
            border-radius: 5px;
            border: 2px solid #ccc;
        }
        input[type="submit"]
        {
            background-color: var(--accent-color);
            color: var(--light-color);
            border: 2px #EE66A6 solid;
            border-radius: 5px;
            padding: 5px;
            margin: 5px 0%;
        }      
        #submit-btn:hover
        {  
            background-color: var(--light-color);
            color: var(--accent-color);
            border: 2px #0099ff58 solid;
            border-radius: 5px;
            transform: scaleX(1.09) translateY(-5px);
            transition: all .6s ease;            
        }
    </style>
</head>
<body>
    <h1>
        ADD TO CART
    </h1>
    <form  method="post">
        <label for="Quantity">Quantity</label>
        <input type="number" name="quantity" >
        <input type="submit" value="ADD" id="submit-btn" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit']))
    {
        $quant = $_POST['quantity'];

        $cquery = "INSERT INTO CART VALUES($id,$quant)";
         echo $cquery;
        $cresult = mysqli_query($con,$cquery);

        if ($cresult)
        {
            echo "Product added to cart successfully";
        }
        else
        {
            echo "Error: ". $cquery. "<br>". mysqli_error($con);
        }
       
           
    }
    // $cquery = "SELECT Sum(Price*cart.Quantity), products.Price, cart.Quantity,products.ProductName 
    //    FROM cart INNER JOIN products ON cart.ProductID = products.ProductID GROUP by cart.ProductID";
    // $cresult = mysqli_query($con,$cquery);
    // echo $cresult;
                                  //TODO  QUERY FOR TOTAL
    // SELECT Sum(Price*cart.Quantity), products.Price, cart.Quantity,products.ProductName 
    //FROM cart INNER JOIN products ON cart.ProductID = products.ProductID GROUP by cart.ProductID;
   
    
   ?>