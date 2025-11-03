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
            <section>
				<h2>Thank You for Your Purchase! Enjoy!</h2>
                <h3>Custom Made Pizza Order:</h3>
                <?php
                    // Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
                    $pizzaCount = $_GET['pizza-count'];
                    $size = $_GET['size'];
                    $crust = $_GET['crust'];
                    $shape = $_GET['shape'];
                    $cheese = $_GET['cheese'];
                    $toppings = $_GET['toppings']; /* does not work */
                    // Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
                    echo('<p>Your order was: '.$pizzaCount.' '.$size.' '.$crust.' '.$shape.' '.$cheese.' '.$toppings.' </p>');
                ?>
                <h3>Fan Favorite Pizza Order:</h3>
                <?php
                    // Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
                    $fanfavorite = $_GET['fan-favorite'];
                    $pizzaCount = $_GET['pizza-count'];
                    // Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
                    echo('<p>Your order was: '.$fanfavorite.' </p>');
                ?>
                <h3>Everything that you ordered has been sent to our chefs!</h3>
			</section>
            <img src="images/doughjo-removebg-preview.png" alt="Doughjo Pizza Mascot" width=700 height=700/>
        </main>
        <footer>
        </footer>
	</body>
</html>
