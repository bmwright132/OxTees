<?php
session_start();
echo<<<_END
	<head>
		<title>OX's Shirt Store</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>

		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">
		<div id="header">
			<div class="container">
_END;
        if(isset($_SESSION['username']))
             {
                 echo '<h3 style="float: right"><a href="account.php" id="account">My Account</a></h3>';
             }
echo <<<_END
				<div id="logo">
					<h1><a href="#">OX's Shirts</a></h1>
					<span>An OX Company</span>
				</div>
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Homepage</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
_END;
                         if(!isset($_SESSION['username']))
						echo '<li><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';
                        
                        echo '<li><a href="shopNow.php">Shop Now</a></li>';
                            
                            if(isset($_SESSION['username']))
						echo '<li><a href="cart.php">My Cart</a></li>';
echo <<<_END
					</ul>
				</nav> 
			</div>
		</div>

		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Welcome to OX's Shirt Store</h2>
								<span class="byline">Where the Best Quality Is Our Guarantee</span>
							</header>
							<a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
							<p>This is OX's Shirt Store. We specialize in high end quality shirts and button downs. We love what we do and we try to show that by delivering the best looking, fitting, and quality shirts on the market. </p>
							<p>We hope that you can find what you are looking for with our vast selection of top of the line shirts. If you have never shopped with us before please continue to the login tab and create an account. If you have shopped with us before, <strong>
							Welcome Back!</strong> We really appreciate your support! If you would like to learn more about us proceed to the about us tab. If you have any questions or are in need of assistance please feel free to visit the Contact Us page and get in touch with
							our highly trained support staff.
							</p>
						</section>
					</div>
					
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>RECENT EVENTS</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">January 1, 2015   |  (10 )  Comments</p>
									<img src="images/pic04.jpg" alt="" />
									<p class="text">Happy New Year Everyone! Hope your 2014 was as good as ours.</p>
								</li>
								<li>
									<p class="posted">February 29, 2015  |  (10 )  Comments</p>
									<img src="images/pic05.jpg" alt="" />
									<p class="text">Not quite sure if it is actually a leap year but happy leap year!</p>
								</li>
								<li>
									<p class="posted">April 6, 2015  |  (10 )  Comments</p>
									<img src="images/pic06.jpg" alt="" />
									<p class="text">We are doing some site maintenance between 12am - 3am EST. Sorry about any inconviences this may cause.</p>
								</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
        <div id="featured">
        <h1 id="bestSeller">Best Sellers</h1>
        <br><br>
			<div class="container">
				<div class="row">
					<div class="4u">
						<h2>Brooks Brothers Purple Checkered</h2>
						<a href="#" class="image full"><img class="bestSellers" src="images/purpleCheckered.jpg" alt="Brooks Brothers Purple Checkered" /></a>
						<p>Our non-iron sport shirt is crafted from pure American-grown Supima® cotton broadcloth and is specially treated to remain virtually wrinkle-free. The button-down collar, a Brooks Brothers innovation, gives you casual look. Our signature 6-Pleat Shirring® at the barrel cuffs and pucker-free seams reinforce Brooks Brothers dedication to a well-made sport shirt. Additional features include a left chest pocket, narrow yoke and a center back pleat. This shirt is machine washable for easy care.</p>
						<p><a href="shopNow.php" class="button">Get Product</a></p>
					</div>
					<div class="4u">
						<h2>Ralph Lauren Sea Foam Green Polo</h2>
						<a href="#" class="image full"><img class="bestSellers" src="images/greenPolo.jpg" alt="Ralph Lauren Sea Foam Green Polo" /></a>
						<p>This iconic polo shirt is crafted from durable cotton mesh and designed with our modern slim-fitting silhouette.</p>
						<p><a href="shopNow.php" class="button">Get Product</a></p>
					</div>
					<div class="4u">
						<h2>Armani Solid Blue</h2>
						<a href="#" class="image full"><img class="bestSellers" src="images/solidBlueButtondown.jpg" alt="Armani Solid Blue" /></a>
						<p>Composition:  100% Cotton
<br>Jacquard
<br>Plain weave
<br>Two-tone pattern
<br>Classic Neckline
<br>Long sleeves
<br>Buttoned cuffs</p>
						<p><a href="shopNow.php" class="button">Get Product</a></p>
					</div>
				</div>
			</div>
		</div>
        
        
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="4u">
						<section>
							<h2>Latest Posts</h2>
							<ul class="default">
								<li>Loved the shirts we purchased!</li>
								<li>I can't wait for my order to come in. Love the shirts!</li>
								<li>Very well made shirts. A must have.</li>
								<li>One of my buttons fell off. What should I do?</li>
								<li>My husband is a big fan of your shirts. Thanks.</li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Contact Info</h2>
							<ul class="default">
								<li>20 W Jefferson Street Milledgeville, GA 31061</li>
								<li>1 800 COOL TEE</li>
								<li>support@oxtees.com</li>
								<li>jared@oxtees.com</li>
								<li>Support line open 24/7</li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Our Sister Sites</h2>
							<ul class="default">
								<li>Polo Ralph Lauren</li>
								<li>Armani</li>
								<li>Iridium</li>
								<li>Brooks Brothers</li>
								<li>OX International</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
        
		<div id="copyright">
			<div class="container">
                <a href="adminhome.php">Admin</a><br>
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		
	</body>
_END;
?>