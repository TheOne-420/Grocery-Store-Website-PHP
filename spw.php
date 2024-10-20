

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Grocery Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5; /* Soft background */
    color: #333; /* Neutral text color */
}

/* Header styling */
header {
    background-color: #333; /* Dark background for contrast */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 30px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 100;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #beef00; /* Softened green for branding */
}

.search-bar {
    display: flex;
    flex: 1;
    justify-content: center;
}

.search-bar input[type="text"] {
    padding: 8px;
    border: 2px solid #beef00;
    border-radius: 20px;
    width: 300px;
    outline: none;
}

.search-bar button {
    padding: 8px 16px;
    background-color: #beef00;
    border: none;
    border-radius: 20px;
    color: #333;
    cursor: pointer;
    margin-left: 8px;
}

.menu ul {
    display: flex;
    list-style: none;
}

.menu ul li {
    margin-right: 20px;
}

.menu ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.menu ul li a:hover, .menu ul li a.active {
    color: #beef00;
    font-weight: bold;
}

/* Profile and Cart Icons */
.profile-cart a {
    color: #fff;
    margin-right: 15px;
    text-decoration: none;
    font-size: 18px;
}

.profile-cart a:hover {
    color: #beef00;
}

/* Hero section */
.hero {
    background-image: url('your-image-path.jpg'); /* Add a hero image */
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding-top: 100px; /* Add padding due to fixed header */
    color: white;
    position: relative;
}

.hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Slight overlay for text readability */
}

.hero-content {
    position: relative;
    z-index: 1;
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 30px;
}

.cta-button {
    padding: 10px 25px;
    background-color: #beef00;
    color: #333;
    border: none;
    border-radius: 20px;
    font-size: 18px;
    cursor: pointer;
}

.cta-button:hover {
    background-color: #aacc00;
}

/* General layout padding */
.container {
    padding: 50px 20px;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 30px 0;
    text-align: center;
}

footer p {
    margin: 10px 0;
}

    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">LOGO</div>
        
        <div class="search-bar">
            <input type="text" placeholder="Search for product">
            <button>Search</button>
        </div>
        
        <nav class="menu">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        
        <div class="profile-cart">
            <a href="#"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Fresh Groceries Delivered to Your Doorstep</h1>
            <p>Shop our wide variety of fresh produce, dairy, and more.</p>
            <button class="cta-button">Shop Now</button>
        </div>
    </section>

    <!-- Content goes here -->
    <div class="container">
        <h2>Our Top Categories</h2>
        <p>Browse through our selection of fresh products.</p>
        <!-- Add other sections like product categories, popular products, deals -->
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Grocery Store. All Rights Reserved.</p>
    </footer>

</body>
</html>
