<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>About us</title>
    <link rel="stylesheet" href="./style/navbar.css">
    <script defer src="./js/activePage.js"></script>

    <style>
       body
        {
            background-color: #9A1750;
            color: #E3E2DF;
            text-align: center;
        }
        .reviews
        {
            
            width: 90%;
            display: flex;
            
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-around;
            
            padding: 10px;
            margin: 20px;
        }
        .reviews .reviews-cards
        {
            display:flex;
            flex-direction: row;
           
            margin: 5px;
            border: 1px solid #E3E2DF;
            border-radius: 5px;
           
        }
        
        img
        {
            width: 100px;
            float: left;
            
        }
        .card-contents
        {
            padding: 30px;
        }
        </style>
</head>
<body> 
    <?php include "./navbar.php" ?>
    <h1>About Us</h1>
   
    <section class="main">
        <h2>Reviews</h2>
        
        
        <div class="reviews">    
            <div class="reviews-cards">
                <div class="card-contents">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                        <span>Great service! I'll be using only this site for grocery shopping from now</span>
                
                </div>
                        <img src="./Images/reviews/makane.jpg" alt="user1">
            </div>  
           
            <div class="reviews-cards">
                <div class="card-contents">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                
                 <span>Products were fresh. Got products on time. Wide varieties of products</span>  
                </div>  
                <img src="./Images/reviews/joe.jpeg" alt="user2">                
            </div>
          

        </div>
        
        <!-- <div class="team-member">
            
            <h3>Pradeep Sengundar</h3>
            <blockquote>
                <cite>Idli is best ~Pradeep</cite>
            </blockquote>
            
            <h3>Shashwat kalal</h3>

        </div>
        <div class="team-member"></div> -->
    </section>
</body>
</html>