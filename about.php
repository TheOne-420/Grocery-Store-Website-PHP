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
            grid-template-columns: repeat(2,1fr);
            gap: 50px;
            
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
            margin: 20px;
        }
        .reviews .reviews-cards
        {
            width: inherit ;
            display:flex;
            flex-direction: row;
             flex-grow: 1;
             justify-content: space-between;
            margin: 5px;
            border: 1px solid #E3E2DF;
            border-radius: 5px;
           
        }
        .icons
        {
            width: 20px;
        }
        .stars 
        {
            display: flex;
            justify-content: center;
        }
        img
        {
            width: 100px;
            float:right;
            
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
                    <img src="./Icons/svgs/solid/star.svg" class="icons">
                    <img src="./Icons/svgs/solid/star.svg" class="icons">
                    <img src="./Icons/svgs/solid/star.svg" class="icons">
                    <img src="./Icons/svgs/solid/star-half-stroke.svg" class="icons">
                   

                    </div>
                        <span>Great service! I'll be using only this site for grocery shopping from now</span>
                
                </div>
                        <img src="./Images/reviews/makane.jpg" alt="user1">
            </div>  
           
            <div class="reviews-cards">
                <div class="card-contents">
                    <div class="stars">
                       
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        
                    </div>
                 <br>
                 <span>Products were fresh. Got products on time. Wide varieties of products</span>  
                </div>  
                <img src="./Images/reviews/joe.jpeg" alt="user2">                
            </div>
            
            <div class="reviews-cards">
                <div class="card-contents">
                    <div class="stars">
                       
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star-half-stroke.svg" class="icons">
                        
                    </div>
                 <br>
                 <span>Got some of em illegal if you know what I mean *winks*</span>  
                </div>  
                <img src="./Images/reviews/jeffrey.avif" alt="user3">                
            </div>

            <div class="reviews-cards">
                <div class="card-contents">
                    <div class="stars">
                       
                    <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                        <img src="./Icons/svgs/solid/star.svg" class="icons">
                    </div>
                 <br>
                 <span>Fresh shit available! I repeat Fresh shit available!</span>  
                </div>  
                <img src="./Images/reviews/john.jpg" alt="user4">                
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