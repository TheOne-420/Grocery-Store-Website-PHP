
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login page</title>
    <link rel="stylesheet" href="./style/login.css"></link>
</head>
<body>
    <div class="main">
        <form  method="post" autocomplete="off" id="registration">
        <h2 id="title">LOGIN</h2>
            <label for="username">Username:</label>
            <br>
        <input type="text" name="username" id="username" placeholder="Enter your username" class="details-input" require>
            <br><br>
            <label for="password">Password:</label>
            <br>
            <input type="password" name="password" id="password"  placeholder="Enter your password" class="details-input" >
            <br>
            <br>
           
        <input type="submit"  name="submit"  value="LOGIN" id="submit-btn"> 
        
        <p id='message' name='message'></p>
        <p id="sign-in">Don't have an account?  <a href="signUp.php"  rel="noopener noreferrer">Sign Up</a></p>
        </form >    
        
    </div>
    
    <script>
        window.onload = function() 
        {
            document.getElementById("registration").reset();
            document.getElementById('username').focus();
            
            

        }
        submitForm =document.getElementById('registration');
        submitForm.addEventListener('submit', ()=>
        {
            
        if (document.getElementById('username').value=='' || document.getElementById('password').value==false) 
            {
                
                alert('Please enter both username and password first');
            }
        }
    );
    </script>
</body>
</html>

<?php


    // checking if form is submitted or not
    if (isset($_POST['submit'])) 
    {
        $un = $_POST['username'];
        $pass = (int)$_POST['password'];

        //  Check if username and password fields are not empty
        if (!empty($un) && !empty($pass))
        {
            
            // connecting to the database
            require "./connection.php";       

            // checking if user exists in the database and if its admin
            $query = "SELECT * FROM users WHERE username='$un' AND password=$pass AND ID=1";
            $result = $con->query($query);
            
            
            if ($result->num_rows > 0)
            {
                // if the user is admin, redirect to the admin panel
                
                header("Location: dashboard.php");
            }
            else
            {
                
                $query = "SELECT * FROM users WHERE username='$un' AND password=$pass";
            
                $result = $con->query($query);
                if ($result->num_rows > 0)
                {
                    
                    //if the user is not admin, redirect to the home page
                    header("Location: home.php");
                }
            }

               
                
        }
        
          
            
    }
        
       
    
?>