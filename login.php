
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
            <br>
            <input type="text" name="username" id="username" placeholder="Enter your username" class="details-input" require>
            <br>
            <label for="password">Password:</label>
            <br>
            <input type="password" name="password" id="password"  placeholder="Enter your password" class="details-input" >
            <span id="password-error" class="error-message"></span>
            <br>
        <input type="submit"  name="submit"  value="LOGIN" id="submit-btn"> 
        
        <p id='message' name='msg'></p>
        </form onsubmit="(e)=> e.preventDefault()">    
        
    </div>
<!--     
    <script>
        // validating the password
        function validate(password) 
        {
           msg =document.getElementById("password-error");
            
           if(password.value.length < 8)
           {
            msg.innerHTML = "Password length should be atleast 8 characters";
           }
        }
    </script> -->
</body>
</html>

<?php


    // checking if form is submitted or not
    if (isset($_POST['submit'])) 
    {
        $un = $_POST['username'];
        $pass = (int)$_POST['password'];

        //  if the username and password fields are not empty
        if (!empty($un) && !empty($pass))
        {
            
            // connecting to the database
            require "./connection.php";       

            // checking if user exists in the database
            $query = "SELECT * FROM users WHERE username='$un' AND password='$pass'";
            $result = $con->query($query);

            
            if (  $result->num_rows > 0) 
            {
                // if the user exists, redirect to the home page
                header("Location: index.html");
            } 
            else 
            {
                // if the entered username and password are incorrect, display an error message
                
                echo "<script>document.getElementById('message').innerHTML='User doesn't exists'</script>";
            }
            
            
        }
        else
        {
            // if the username or password fields are empty, display an error message
            echo "<script>document.getElementById('message').innerHTML='Please fill all fields'</script>";
        }
       
    }
?>