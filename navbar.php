<div id="sidebar">
    
    <ul>
        <li class="items">
            <a href="./index.php">Dashboard</a>
        </li>
       
        <li class="items">
            <a href="#">
                
                Cart
            </a>
        </li>
        <li class="items"> 
            <a href="">Log out</a>
        </li>
        
    </ul>
</div>
<header>
   <span>LOGO</span>
   <div id="search-input">
        <form action="search.php" method="post">
            <input type="text"  id="search" name="search" placeholder="Search for product">
            </span>
        </form>
        
        
   </div>
   <nav id="navBar">
        
        <!-- <button id="logout">LOGOUT</button>-->
         <a href="./home.php"  class="links">Home</a> 
        <a href="./shop.php" class="links">Shop</a>
       <a href="./about.php" class="links">About</a> 
       <a href="./contact.php" class="links">Contact</a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="logOut.php" onclick="logout()"><i class="fa-solid fa-user"></i></a>
    </nav>
    <link rel="stylesheet" href="./style/navbar.css">
    <script type="text/javascript">
        function logout() 
        {
            
        }
    </script>
    <script src="https://kit.fontawesome.com/101aac51cc.js" crossorigin="anonymous"></script>
</header>


