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
            <form action="process-form.php" method="get"> <!-- custom pizza order form -->
                <fieldset id="custom-pizza">
                    <!-- Extras: how many pizzas, size, what type of crust, shape-->
                    <legend>Make Your Pizza</legend>
                        <label for="pizza-counter">Number of Pizza:</label>
                            <select id="pizza-count" name="pizza-count" required>
                                <option value="1,">1</option>
                                <option value="2,">2</option>
                                <option value="3,">3</option>
                                <option value="4,">4</option>
                                <option value="5,">5</option>
                            </select>
                        <label for="pizza-size">Choose Size:</label>
                            <select id="size" name="size" required>
                                <option value="small with">Small</option>
                                <option value="medium with">Medium</option>
                                <option value="large with">Large</option>
                            </select>
                        <label for="crust-type">Choose Crust Type:</label>
                            <select id="crust" name="crust" required>
                                <option value="thin crust, and ">Thin Crust</option>
                                <option value="thick crust, and ">Thick Crust</option>
                                <option value="stuffed crust, and ">Stuffed Crust</option>
                            </select>
                        <label for="shape-type">Choose Shape:</label>
                            <select id="shape" name="shape" required>
                                <option value="round shaped">Round</option>
                                <option value="square shaped">Square</option>
                                <option value="heart shaped">Heart</option>
                            </select>
                    <br />
                    <br />
                    <label for="toppings">Choose Toppings:</label><br />
                        <input type="checkbox" id="pepperoni" name="toppings[]" value="with Pepperoni" />
                    <label for="pepperoni"> Pepperoni</label><br />
                        <input type="checkbox" id="mushrooms" name="toppings[]" value="with Mushrooms" />
                    <label for="mushrooms"> Mushrooms</label><br />
                        <input type="checkbox" id="onions" name="toppings[]" value="with Onions" />
                    <label for="onions"> Onions</label><br />
                        <input type="checkbox" id="sausage" name="toppings[]" value="with Sausage" />
                    <label for="sausage"> Sausage</label><br />
                        <input type="checkbox" id="bacon" name="toppings[]" value="with Bacon" />
                    <label for="bacon"> Bacon</label><br /><br />
                    <label for="cheese-type">Choose Cheese:</label>
                            <select id="cheese" name="cheese" required>
                                <option value="no-cheese pizza">No Cheese</option>
                                <option value="cheese pizza">Cheese</option>
                                <option value="extra-cheese pizza">Extra Cheese</option>
                            </select>
                    <br />
                    <br />
                        <input type="reset" value="Reset" />
                        <input type="submit" value="Place Order" />
                    <br />
                    <br />
                </fieldset>
            </form>
            <form action="process-form.php" method="get"> <!-- fan favorite pizza order form -->
                <fieldset id="fan-favorite-pizza">
                    <legend>Order a Fan Favourite!</legend>
                        <label for="fan-favorites">Choose a Fan Favourite:</label>
                            <select id="fan-favorite" name="fan-favorite" required>
                                <option value="pepperoni pizza">Pepperoni Pizza</option>
                                <option value="four-cheese pizza">Four Cheese Pizza</option>
                                <option value="meat-lover pizza">Meat Lover Pizza</option>
                            </select>
                    <br />
                        <div id="fanfavorite-images">
                            <div class="fan-favorite-image">
                                <img src="images/pepperoni-pizza.png" alt="Pepperoni Pizza" width=500 height=500 />
                                <!-- https://www.generalmillsfoodservice.com/recipes/pepperoni-vodka-pizza-with-chili-crisps/1af437bc-5245-4f96-9df2-5449c0c22920 -->
                                <p>Pepperoni perfection with crispy crust.</p>
                            </div>
                            <div class="fan-favorite-image">
                                <img src="images/four-cheese-pizza.png" alt="Four Cheeses Pizza" width=500 height=500 />
                                <!-- https://nz.ooni.com/blogs/recipes/four-cheese-pizza -->
                                <p>Perfected cheese combinations for you.</p>
                            </div>
                            <div class="fan-favorite-image">
                                <img src="images/meat-lover-pizza.png" alt="Meat Lover Pizza" width=500 height=500 />
                                <!-- https://thatdemowebsite.com/product/meat-lovers/ -->
                                <p>Why limit yourself to one type of meat when you can enjoy all!</p>
                            </div>
                        </div>
                    <br />
                    <br />
                        <input type="reset" value="Reset" />
                        <input type="submit" value="Place Order" />
                    <br />
                    <br />
                </fieldset>
            </form>
        </main>
        <footer>
        </footer>
	</body>
</html>
