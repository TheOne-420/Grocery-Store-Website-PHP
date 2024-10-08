
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form method="post" id="updateForm">
            <label for="pid">ID of product you want to delete:</label>
            <input type="text" name="pid" id="pid">
            <input type="submit" value="Submit" id="submitBtn" name="submitBtn">
        </form>
        <a href="./index.php">Back to dashboard</a>
</body>
</head>
<?php
if (isset($_POST['submitBtn'])) 
{
    // Connect to the database
    include "./connection.php";
    $id = $_POST['pid'];
    include "./connection.php";
    $query = "SELECT * FROM Products where ProductID = $id";
    $result = $con->query($query);

    if($result->num_rows > 0)
    {
       
        $query = "DELETE FROM Products WHERE ProductID = $id";
        $con->query($query);
        echo "<br>Product with ID $id has been deleted.";
    }
    else
    {
        echo "<br>No product found with ID $id.";
    }
}
 
 
 

?>