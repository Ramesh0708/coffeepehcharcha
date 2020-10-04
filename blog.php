<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Coffee peh Charcha</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Coffee Peh Charcha </div>
    <div class="address-bar"></div>

    <!-- Navigation -->
    	<?php require_once 'nav.php' ; ?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">Know Your Coffee: From Cappuccino To Espresso, A Guide To Your Favourite Brews
                        <strong></strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Espresso-1.jpg" alt="">
                    <h2>1. Espresso
                        <br>
                        <small></small>
                    </h2>
                    <p>Espresso is a shot of pure coffee if you like your coffee strong and bitter. Here, a small amount of nearly boiling water is forced under pressure through finely-ground coffee beans. </p>
                    
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Americano-2.jpg" alt="">
                    <h2>2. Americano
                        <br>
                        <small></small>
                    </h2>
                    <p>If you want your coffee a little diluted, you can opt for Americano, which is basically a mixture of espresso and water. Americano will be easier on your taste buds. 5 Places You Must Travel For Coffee.</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/GoldCappuccino.jpg" alt="">
                    <h2>3. Cappuccino
                        <br>
                        <small></small>
                    </h2>
                    <p>Cappuccino is one of the most familiar types of coffees out there. It is the perfect fix of espresso and milk. If you like your coffee a little richer, you can add cream instead of milk. </p>
                   
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Double-Latte.jpg" alt="">
                    <h2>4. Latte
                        <br>
                        <small></small>
                    </h2>
                    <p>Who dos not like the fluffy cloud at the brim of their coffee? To lighten up the taste of espresso, Latte has both steam and froth. Can You Chug This Giant Community Platter &#038; Cocktail Within 10 Minutes?</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Double-Latte1.jpg" alt="">
                    <h2>5. Double Latte
                        <br>
                        <small></small>
                    </h2>
                    <p>If you want some more punch in your coffee, go for the Double Latte. The frothed milk tones down the two shots of espresso added to the double Latte.</p>
                 
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Irish-coffee.jpg" alt="">
                    <h2>6. Irish Coffee
                        <br>
                        <small></small>
                    </h2>
                    <p>We all love the classic Irish coffee, don’t we? To take the brew’s taste a noth higher, Irish whiskey is added to the coffee along with some cream and brown sugar to top it off! An Irish Island Is Looking For 2 People To Manage A Coffee Shop.</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Mocha.jpg" alt="">
                    <h2>7. Mocha
                        <br>
                        <small></small>
                    </h2>
                    <p> If you love the combination of chocolate and coffee, mocha is for you. It is the perfect balance combo of chocolate and coffee. Let us not forget the white moustache that comes along with all that delicious cream!</p>
                  
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Kerala-Spices.jpg" alt="">
                    <h2>8. Filter Coffee
                        <br>
                        <small></small>
                    </h2>
                    <p> Ask any Indian; they will say filter coffee is their most favourite one. Here, hot water is strained through freshly ground coffee beans. You can also add some extra sugar and frothy milk if you like.  Indian Coffee House In Kolkata Is The Country&#8217;s Most Iconic Coffee Shop.</p>
                    
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Frappe.jpg" alt="">
                    <h2>9. Frappe
                        <br>
                        <small></small>
                    </h2>
                    <p>Frappe is our go-to to beat the summer heat. What better way ice to top your coffee? Frappé is a Greek iced coffee drink made from instant coffee, water, sugar, and milk.  5 Places To Go If You&#8217;re A Coffee Lover In Pune!</p>
                   
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Espressino.jpg" alt="">
                    <h2>10. Espressino
                        <br>
                        <small></small>
                    </h2>
                    <p>Espressino is an Italian coffee drink made from equal parts espresso, with some cocoa powder on the bottom of the cup. The first thing that you taste is the bitter cocoa powder, and then devour into the flavours of coffee.</p>
                    
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Ramesh Choudhary 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
