<?php

require_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Sign-In</title>
    <style>
        :root
        {
            --dark-color: #243642 ;
            --light-color: #f9f9fb;
            --accent-color: #f43f70;
        }
        
        @keyframes animateBorder
        {
            0% 
            {
                border-left: 2px   #47ff98 solid;
                border-bottom: 2px  #47ff98 solid;
                border-top:  0px;
                border-right: 0px;
               
            }
      
            
            100% 
            { 
                border-left: 0px;
                border-bottom:0px;
                border-top: 2px   #47ff98 solid ;
                border-right:2px   #47ff98 solid;

            }
        }
        body 
        { 
            padding:0%;
            margin:0%;
            background-color: var(--dark-color);
            color: #f43f70;
        }
        .main
        {
            
            border-left: 2px   #47ff98 solid;
            border-bottom: 2px  #47ff98 solid;
            border-top: 0px ;
            border-right: 0px;
            border-radius: 10px;
            
            padding: 50px;
            margin:  10% auto;
            width: 50vw;
            height: 40vh;
            background-color: var(--primary-color);
            color: var(--font-color);

         /* animation: animateBorder 1s ease-in infinite;  */
        }
        form
        {
            margin:  0% auto;
            width: 60%;
            text-align: center;
        }
        #title
        {
                
                text-align: center;
                padding-bottom: 35px;
                margin:  0% auto;
                width: 60%;
        }
        label
        {
                
                font-weight: bold;
                margin-right: 100px;
                padding-bottom: 10px;
                
        }
        #submit-btn
        {
                background-color: var(--accent-color);
                color: var(--light-color);
                border: 2px #EE66A6 solid;
                border-radius: 5px;
                padding: 5px;
                margin: 5px 0%;
                width: 40%;
               
                /* box-shadow: -5px 3px 2px #8FD14F; */
        }
        #submit-btn:hover
        {  
                background-color: var(--light-color);
                color: var(--accent-color);
                border: 2px #0099ff58 solid;
                border-radius: 5px;
                transform: scaleX(1.09) translateY(-5px);
                transition: all .6s ease;
                /* box-shadow: 5px -2px 2px #8FD14F; */
        }
    </style>
</head>
<body>
<div class="main">
    <form  method="post">
            <h1 id="title">Sign-Up</h1>
            <label for="username">Username:</label>
            <br>
            <input type="text" name="username" id="username" placeholder="Enter your username" class="details-input" require>
            <br><br>
            <label for="password">Password:</label>
            <br>
            <input type="password" name="password" id="password"  placeholder="Enter your password" class="details-input" >
            <br>
            <br>
            <input type="submit"  name="submit"  value="SIGN UP" id="submit-btn"> 
              <br>
    </form>
</div>
</body>
</html>

<?php

if (isset($_POST["submit"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(!empty($username) && !empty($password))
    {
        
        $query = "INSERT INTO users  (`username`, `password`) values('$username',$password)";
        echo  $query;
        if (  $result = mysqli_query($con, $query)) 
        {
           echo "<script>
            alert('Account created succesfully')
           </script>";
            header("Location: index.php");
        }
      
    }
    else
    {
        echo "<script>
          document.getElementById('submit-btn').disabled
          //window.location.href='index.php';

        </script>";
    }
}

?>