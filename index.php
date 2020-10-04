<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Coffee peh Charcha -Home</title> 

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

    <div class="brand">Coffee Peh Charcha</div>
    <div class="address-bar"> Silicon Valley| California,USA  </div>
	
	<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>

    <!-- Navigation -->
	
	<?php require_once 'nav.php' ; ?>
    

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Coffee peh Charcha</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Ramesh</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">10 Unique Coffees In Mumbai For 2020 That Are A Must-Try
                   
       
                </div>
            </div>
        </div>
		

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                   <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Le15.jpg" alt="">
                    <h2>1. Pink Latte At Le15 Patisserie & Cafe, Multiple Outlets

                        <br>
                        <small></small>
                    </h2>
                    <p>Address – Multiple Outlets
Cost – ₹180 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Espresso-1.jpg" alt="">
                    <h2>2. Diamond Cappuccino At Coffee By Di Bella, Multiple Outlets

                        <br>
                        <small></small>
                    </h2>
                    <p>All that glitters is not gold, but it might just be coffee. With a generous drizzle of glitter on top, the glitter coffee at Coffee By Di Bella is definitely one of the most unique coffees in Mumbai. Sipping on it is like taking a trip to Wonderland and we blame it all on the iridescent glitter in it.

</p>
<p>Address – Multiple Outlets
Cost – ₹ (Exclusive of taxes</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Coffee-Culture.jpg" alt="">
                    <h2>3. Black Rum Coffee At Coffee Culture, Multiple Outlets

                        <br>
                        <small></small>
                    </h2>
                    <p>Black coffee is probably the most basic option when it comes to the coffee variants out there. But what if you were to add just a little something to it to transform it from a boring black coffee to a fun one. Coffee Culture is changing the way you have your morning dose of coffee by adding some rum….flavouring to it. Now now, don’t be disappointed. Turning up to office drunk in the morning does not create the best impression. But the rum flavouring in the coffee gives you that extra pus 
					</p>
					<p>Address – Multiple Outlets
Cost – ₹210 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/KC-Roasters.jpg" alt="">
                    <h2>4. South Bombay Cold Coffee At KC Roasters, Multiple Outlets

                        <br>
                        <small></small>
                    </h2>
                    <p>talking about unique coffees in Mumbai, if you are looking for a health booster then you don’t need to look beyond the South Bombay Cold Coffee at KC Roasters. At Koinonia, the cold coffee is inspired by South Bombay and contains no sugar at all. They take the old-school road and sweeten it with jaggery which is a healthier alternative to sugar and with the added hint of coconut and chicory makes for a refreshing brew.
					</p>
					<p>Address – Multiple Outlets
Cost of Butter Chicken – ₹250 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/The-Pnatry.jpg" alt="">
                    <h2>5. Moringa & Almond Mylk Latte At The Pantry, Fort

                        <br>
                        <small></small>
                    </h2>
                    <p>If you like us love organic produce, then you will definitely find yourself becoming a fan of the Moringa & Almond Mylk Latte at The Pantry. The super healthy beverage is crafted using Indian cacao, pea protein and organic nuts and is a far cry from a cup of Joe and makes for a fun alternative every.
					</p>
					<p>Address – The Pantry, Yeshwant Chambers, Military Square Lane, Near Trishna, Kala Ghoda, Fort, Mumbai
Contact – 022 22700082
Cost – ₹135 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/toffee-coffee-roasters.jpg" alt="">
                    <h2>6. Coffee With Old Monk At Toffee Coffee Roasters, Bandra

                        <br>
                        <small></small>
                    </h2>
                    <p>Boozy coffees sans the booze seem to be a rising trend these days. And another variant of it is made by the guys at Toffee Coffee Roasters and we love it. Although, we are petitioning for it to have a dash of Old Monk in it for real. Who’s with us on this?
					</p>
					<p>Address – Toffee Coffee Roasters, Shop 9, Kosamba Bedi, Opposite Lilavati Hospital, Reclamation, Bandra West, Mumbai
Contact – +91 7506539555
Cost – ₹205 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Love-Latte-Re.jpg" alt="">
                    <h2>7. Mint Mocha At Love & Latte, Multiple Outlets

                        <br>
                        <small></small>
                    </h2>
                    <p>If there was ever a combination that sounded weird but tasted brilliant, it’s mint and chocolate. Reminiscent of a piece of After Eight, the Mint Mocha at Love & Latte is one of the zingiest coffees we have tasted. It would be fair to say that we can easily have 4-5 of these in a go. And while we are at it, they also make a really good Butter Rum Latte.
   					</p>
					<p>Address – Multiple Outlets
Cost – ₹190 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/la-Folie-lab.jpg" alt="">
                    <h2>8. Vietnamese Coffee At La Folie Lab, Bandra

                        <br>
                        <small></small>
                    </h2>
                    <p>if you like your coffee with just the right hint of sweetness then you will love the Vietnamese Coffee at La Folie Lab. A nice cold brew mixed with sweet condensed milk shaken with a ton of ice cubes, it’s the perfect drink for a hot day in the city. And with the October setting in, you will find yourself 
					</p>
					<p>Address – La Folie Lab, 1, Ground Floor, Libra Towers, Opposite St.Peter’s Church, Hill Road, Bandra West, Mumba
Contact – +91 9167937019
Cost – ₹210 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Leaping-Windows-Re.jpg" alt="">
                    <h2>9. Bulletproof Coffee At Leaping Windows, Versova

                        <br>
                        <small></small>
                    </h2>
                    <p>Keto-lovers unite! You don’t have to lose out on your favourite beverage just because you are on a strict diet. And the Bulletproof Coffee has been crafted primarily for people who are disciplined enough to not cheat on their diets. The high-performance drink incorporates a dollop of butter/ghee and good quality coffee beans. Dieters swear by it and after you have had a sip, you will too. We’d say this is one of the most unique coffees in Mumbai.
					</p>
					<p>Address – Leaping Windows, 2 & 3, Corner View, Ashok Chopra Marg, Opposite Bianca Towers, Versova, Andheri West
Contact – +91 9769998972
Cost – ₹175 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
				<div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/CCD-Re-Russell-Hobbs.jpg" alt="">
                    <h2>10. Coconut Milk Latte At Cafe Coffee Day, Multiple Outlets

                        <br>
                        <small></small>
                    </h2>
                    <p> How can we forget the ever-green coffee chain from our list? Their Coconut Milk Latte is a revelation and the secret ingredient, you guessed it, is creamy coconut milk which makes all the difference.
					</p>
					<p>Address – Multiple Outlets
Cost of Butter Chicken – ₹190 (Exclusive of taxes)</p>
                    
                    <hr>
                </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>source : Curlytales.com</p>
					<p> Copyright &copy; Ramesh Choudhary 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
