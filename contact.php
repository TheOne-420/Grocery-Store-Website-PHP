<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - LimeLeaf</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #F4F4F4;
            margin: 0;
            padding: 0;
        }

        .contact-section 
        {
            text-align: center;
            padding: 50px 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
            border-radius: 10px;
        }

        h1 
        {
            font-size: 36px;
            margin-bottom: 10px;
            color: #333;
        }

        p 
        {
            margin: 10px 0;
            color: #555;
            font-size: 16px;
        }

        .contact-info 
        {
            margin: 20px 0;
        }

        .contact-info i 
        {
            color: #4caf50;
            margin-right: 10px;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a 
        {
            margin: 0 10px;
            color: #333;
            font-size: 24px;
            transition: color 0.3s ease;
        }

      
        .social-icons #fb:hover 
        {
            color: blue;
        }
        .social-icons #insta:hover 
        {
            color: hotpink;
        }
        .social-icons #yt:hover 
        {
            color: red;
        }
        .social-icons #twitter:hover 
        {
            color: cyan;
        }
        .social-icons #linkedin:hover 
        {
            color: darkblue;
        }

        footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        footer i {
            color: #4caf50;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="contact-section">
        <h1>Contact Us</h1>
        <p class="contact-info">
            <i class="fas fa-envelope"></i> Contact: phpproject@gmail.com
        </p>
        <p class="contact-info">
            <i class="fas fa-phone"></i> Phone: 8349249181
        </p>
        <p class="contact-info">
            <i class="fas fa-map-marker-alt"></i> Address: Gota, Ahmedabad, Gujarat, 380001
        </p>

        

        <div class="social-icons">
            <a href="#" id="fb"><i class="fab fa-facebook"></i></a>
            <a href="#" id="insta"><i class="fab fa-instagram"></i></a>
            <a href="#" id="yt"><i class="fab fa-youtube"></i></a>
            <a href="#" id="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" id="linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
        <footer>
            © 2024 LimeLeaf <i class="fas fa-leaf"></i> All rights reserved.
        </footer>
    </div>

</body>
</html>
