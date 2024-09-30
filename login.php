
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login page</title>
    <link rel="stylesheet" href="./style/login.css"></link>
</head>
<body>
    <div class="main">
        <form  method="post">
            <h2 id="title">LOGIN</h2>
            <label for="username">Username:</label>
            
            <input type="text" name="username" id="username" placeholder="Enter your username" class="details-input">
            <br>
            <label for="password">Password:</label>
            
            <input type="password" name="password" id="password"  placeholder="Enter your password" class="details-input">
            <br>
        <input type="submit"  name="submit"  value="SUBMIT" id="submit-btn"> 
        <p id="exists">
            Already a user? 
            <a href="#">Click here!</a>
        </p>
        <p id='message' name='msg'></p>
        </form>    
        
    </div>
</body>
</html>

<?php
    // checking if form is submitted or not
    if (isset($_POST['submit'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (($username=='' || $password=='')) 
        {
        
            $msg="Please enter a username";
          
        }
        else
        {
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'store';
            $con = mysql_connect($server,$username, $password,$database);

            if (!$con) 
            {
                die('Could not connect: '. mysql_error());
            }
        }
    }
?>