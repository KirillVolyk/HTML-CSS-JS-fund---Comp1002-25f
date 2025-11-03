<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doughjo Pizza | Master The Art Of The Slice</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/styles.css" />
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" /> <!-- adding a favicon to the page(made by copilot) -->
	</head>
	<body>
        <?php
	        include('includes/global-nav.php');
        ?>  
        <header>
            <h1>Doughjo Pizza</h1>
            <h2>Master The Art Of The Slice</h2>
        </header>
        <main>
            <div class="container">
                <div class="left">
                    <h2>Welcome to Doughjo Pizza!</h2>
                    <p>At Doughjo Pizza, we believe that pizza is more than just food; it's an art form. Our master chefs craft each slice with precision and passion, using only the freshest ingredients to create a symphony of flavors that will tantalize your taste buds.</p>
                
                    <div class="image-block">
                        <img src="images/doughjo-removebg-preview.png" alt="Doughjo Pizza Mascot" width=700 height=700/>
                    </div>
                </div>
                <div class="right">
                    <h2>Fan Favourites!</h2>
                    <div class="image-block">
                        <img src="images/pepperoni-pizza.png" alt="Pepperoni Pizza" width=500 height=500 />
                        <!-- https://www.generalmillsfoodservice.com/recipes/pepperoni-vodka-pizza-with-chili-crisps/1af437bc-5245-4f96-9df2-5449c0c22920 -->
                        <p>Pepperoni perfection with crispy crust.</p>
                    </div>
                    <div class="image-block">
                        <img src="images/four-cheese-pizza.png" alt="Four Cheeses Pizza" width=500 height=500 />
                        <!-- https://nz.ooni.com/blogs/recipes/four-cheese-pizza -->
                        <p>Perfected cheese combinations for you.</p>
                    </div>
                    <div class="image-block">
                        <img src="images/meat-lover-pizza.png" alt="Meat Lover Pizza" width=500 height=500 />
                        <!-- https://thatdemowebsite.com/product/meat-lovers/ -->
                        <p>Why limit yourself to one type of meat when you can enjoy all!</p>
                        <nav>
                            <ul>
                                <li><a href="order.php">Order now!</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        </footer>
	</body>
</html>
