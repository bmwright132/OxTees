<?php
ob_start();
require_once("dbConnect.php");
session_start();
function html_header($title)
{
echo<<<_END
	<head>
		<title>$title | OX's Shirt Store</title>
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
	<body>
		<div id="header">
			<div class="container">
_END;
             if(isset($_SESSION['username']))
             {
                 echo '<h3 style="float: right"><a href="account.php" id="account">My Account</a></h3>';
             }
    echo <<<_END
				<div id="logo">
					<h1><a href="index.php">OX's Shirts</a></h1>
					<span>An OX Company</span>
				</div>
_END;
if($title == "")
{
	echo<<<_END
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
_END;
}
else if($title == "Account")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
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
_END;
}
else if($title == "My Account")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
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
_END;
}
else if($title == "About Us")
{

	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
						<li class="active"><a href="aboutUs.php">About Us</a></li>
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
_END;

}
else if($title == "Contact Us")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li class="active"><a href="contactUs.php">Contact Us</a></li>
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
_END;
}
else if($title == "Login")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
_END;
                         if(!isset($_SESSION['username']))
						echo '<li class="active"><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';
    
                         if(isset($_SESSION['username']))
						echo '<li class="active"><a href="cart.php">My Cart</a></li>';
    echo <<<_END
						<li><a href="shopNow.php">Shop Now</a></li>
					</ul>
				</nav>
_END;
}
else if($title == "Shop Now")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
_END;
                         if(!isset($_SESSION['username']))
						echo '<li><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';
    
                        echo '<li class="active"><a href="shopNow.php">Shop Now</a></li>';
    
                         if(isset($_SESSION['username']))
						echo '<li><a href="cart.php">My Cart</a></li>';
                            
echo <<<_END
                        
					</ul>
				</nav>
_END;
}
else if($title == "Cart")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
_END;
                         if(!isset($_SESSION['username']))
						echo '<li><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';

						echo '<li><a href="shopNow.php">Shop Now</a></li>';
                        echo '<li class="active"><a href="cart.php">My Cart</a></li>';
echo <<<_END
                        
					</ul>
				</nav>
_END;
}
else if($title == "Order Confirmation")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
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
_END;
}
else if($title == "Admin Home")
{
    if(!isset($_SESSION['admin_username']))
    {
        echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="index.php">Homepage</a></li>
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
_END;
    }
    else
    {
	echo<<<_END
	<nav id="nav">
					<ul>
						<li class="active"><a href="adminhome.php">Admin Homepage</a></li>
						<li><a href="customerreview.php">Customer Review</a></li>
						<li><a href="revenuereport.php">Revenue Report</a></li>
_END;
                         if(!isset($_SESSION['admin_username']))
						echo '<li><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';
    echo <<<_END
					</ul>
				</nav>
_END;
    }
}
else if($title == "Customer Review")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="adminhome.php">Admin Homepage</a></li>
						<li class="active"><a href="customerreview.php">Customer Review</a></li>
						<li><a href="revenuereport.php">Revenue Report</a></li>
_END;
                         if(!isset($_SESSION['admin_username']))
						echo '<li><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';
    echo <<<_END
					</ul>
				</nav>
_END;
}
else if($title == "Revenue Report")
{
	echo<<<_END
	<nav id="nav">
					<ul>
						<li><a href="adminhome.php">Admin Homepage</a></li>
						<li><a href="customerreview.php">Customer Review</a></li>
						<li class="active"><a href="revenuereport.php">Revenue Report</a></li>
_END;
                         if(!isset($_SESSION['admin_username']))
						echo '<li><a href="login.php">Login</a></li>';
                            else
                        echo '<li><a href="logout.php">Logout</a></li>';
    echo <<<_END
					</ul>
				</nav>
_END;
}

    
    echo <<<_END
    </div>
    </div>
_END;
}
//index page
function html_footer1()
{
	echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		
	</body>
_END;
}
//about page
function html_footer2()
{
	echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>About Us</h2>
								<span class="byline">Founded in 1492</span>
							</header>
							<a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
							<p>What began in 1492 with a collection of Shirts has grown into an entire world, redefining American style. OX's 
							Shirts has always stood for providing quality products, creating worlds and inviting people to take part in our dream. We were
							the innovators of lifestyle advertisements that tell a story and the first to create stores that encourage customers to participate 
							in that lifestyle. OXshirts.com takes this participation to a new level as a rich and exciting interactive destination. When you're 
							transported into the world of OX's Shirts online, you can shop for great products for yourself and your home, learn about adventure, 
							style and culture, find one-of-a-kind vintage pieces and exquisite gifts and much, much more. Back when all this started, I felt sure
							that there were no boundaries. I'm even more sure of that today.
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		
	</body>
_END;
}
//contact us page
function html_footer3()
{
	echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Contact Us</h2>
							</header>
							<div id="map-canvas" style="height: 50%;margin: 0px;padding: 0px"></div>
							<p>We are located at 420 W Jefferson Street Milledgeville, GA 31061. Call us at 1 800 COOL TEE. 
							You can also email us at either support@oxshirts.com for support assistance or jared@oxshirts.com for
							job opportunities.
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
  function initialize() {
  var myLatlng = new google.maps.LatLng(33.0769990, -83.2240930);
  var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</body>
_END;
}
//login page
function html_footer4()
{
	echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Log in</h2>
							</header>
							<a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
						</section>
					</div>
					
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Customer Login</h2>
							</header> 
                            
          <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
			<form id="login" method="post" action="login.php" onsubmit="return allValid()" accept-charset="UTF-8">
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
			<td colspan="3"><strong>Member Login </strong></td>
			</tr>
			<tr>
			<td width="78">Username</td>
			<td width="6">:</td>
			<td width="294"><input name="username" type="text" id="username"></td>
			</tr>
			<tr>
			<td>Password</td>
			<td>:</td>
			<td><input name="password" type="password" id="password" ></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Login"></td>
			</tr>
			</table>
			</td>
			</form>
			</tr>
			</table>
            Don't have an account with us? <a href = "accountCreation.php">Create account</a><br>
            <label class = "error" id="userErr"></label><br>
            <label class = "error" id="pswrdErr"></label>
            <script type="text/javascript" src="js/validate.js"></script>
						</section>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer -->
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
        
	</body>
_END;
        if(isset($_POST['username']) && !isset($_SESSION['username']))
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT `password` FROM Login WHERE username = '$user'";

        $result = mysql_query($query);
        if(!$result) die("Unable to access databse: " .mysql_error());
        $row = mysql_fetch_row($result);


        if($row[0] == $pass)
        {	
            echo <<<_END
            <script>
            alert('Logged in! You may continue shopping');
            window.location.href = "shopNow.php";
            </script>
_END;
            setcookie("user", $_POST['username'], time() - 3600, "/");
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
        }
        else 
        {
            echo <<<_END
            <script>
            alert('Wrong username or password');
            </script>
_END;
        }
    }
    else if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        echo <<<_END
            <script>
            alert('Already logged in!');
            </script>
_END;
    }
}

//shop page
function html_footer5()
{
    if(!isset($_SESSION['username']))
    {
        echo "<h2>You must be logged in to access this page!</h2>";
    }
    else
    {
		echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Shop Now</h2>
							</header>
_END;

$query = "SELECT productID, name, price, image FROM Products";
$result = mysql_query($query);
if(!$result) die("Unacble to access Products");
$rows = mysql_num_rows($result);
   
echo '<table id="products" align = "center">';
for($i=0;$i<$rows;$i++)
{
	$row=mysql_fetch_row($result);
	
	if($i%4==0)//start a new row in the table
	echo "<tr>";
	echo"<td>";
	echo<<<_END
	<form name ="menu" method="post" action="cart.php">
	<p><img src="images/$row[3]" width="200" height="199" alt="$row[1]" /></p>
    <p>$row[1]</p>
	<p>price: $row[2]</p>
    <p>
    <select name= "size" id= "size">
    <option value="S">Small</option>
    <option value="M">Medium</option>
    <option value="L">Large</option>
    </select>
    </p>
	<p>quantity:
    <input name="quantity" type="number" id="textfield" value="1" size="1" />
  </p>
  <p>
   <input name="submit" type="submit" id="button" value="Add to Cart" />
  </p>
		<input name="productID" type="hidden" value="$row[0]" />
  		<input name="shirtName" type="hidden" value="$row[1]" />
  		<input name="price" type="hidden" value="$row[2]" />
</form>
_END;
	
	echo"</td>";
	if($i%4==3)//start a new column in the table
		echo "</tr>";

}
	echo"</td>";
	if(($rows-1)%4!=3)
		echo"</tr>";
		echo"</table>";
		echo "</div>";
		echo "</div>";
	
	echo<<<_END
	<a href="cart.php">
  <input type="button" value="Check Out" />
</a>
						</section>
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script type="text/javascript" src= "js/accountValidation.js"></script>
	</body>
_END;
    }
}

function html_footerAccount()
{
    if(!isset($_POST['username']))
    {
        
        echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Create An Account</h2>
							</header>
                            
                            <form name = "info" id="info_form" action = "accountCreation.php" onsubmit="return allValid()" method = "post">
<span class = "error">*required</span>
<br><br>
<label class = 'requiredLeft'>First name:</label> <input class = "leftLabel" name = "first" id = "first" type = "text" /><span class = "error">*</span>
	<span class = "error"><label id="firstErr"></label></span>
	<label class = "requiredRight"> Email:</label> <input name = "email" id = "email" type = "text" /><span class = "error">*</span>
			<span class = "error"><label id="emailErr"></label></span>
				<br><br>
	<label class = "requiredLeft">Last name:</label> <input name = "last" id = "last" type = "text" /><span class = "error">*</span>
		<span class = "error"><label id="lastErr"></label></span>
	<label class = "requiredRight"> Phone number:</label> <input name = "phoneNumber" id = "phoneNumber" type = "text" /><span class = "error">*</span>
		<span class = "error"><label id="phoneErr"></label></span>
		<br><br>
	<label class = "requiredLeft">Address:</label> <input name = "address" id = "address" type = "text" /><span class = "error">*</span>
		<span class = "error"><label id="addressErr"></label></span>
		<br><br>
        <label class = "requiredLeft">City:</label><input name = "city" id = "city" type = "text" /><span class = "error">*</span>
        <br><br>
        <label class = "requiredLeft">State:</label>
        <select name= "state_select" id= "state_select">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select><span class = "error">*</span>
<br><br>
<label class = "requiredLeft">Zip Code:</label><input name = "zipCode" id = "zipCode" type = "text" /><span class = "error">*</span>
<br><br>
	<label class = "requiredLeft">Credit card number:</label> <input name = "creditCard" id = "creditCard" type = "text" /><span class = "error">*</span>
		<span class = "error"><label id="creditErr"></label></span>
		<br><br>
					<label class = "requiredLeft">username:</label> <input name = "username" id = "username" type = "text" /><span class = "error">*</span>
		<span class = "error"><label id="userErr"></label></span>
		<br><br>
		<label class = "requiredLeft">password:</label> <input name = "password" id = "password" type = "text" /><span class = "error">*</span>
		<span class = "error"><label id="passErr"></label></span>
		<br><br>
	<input type="submit" name ="submit" id = "submit1" value= "Create account"/> 
		<input type="reset" name ="cancel" value= "Cancel"/>
		
</form>
						</section>
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script type="text/javascript" src= "js/accountValidation.js"></script>
	</body>
_END;
    }
    else
    {
        if(isset($_POST['first']))
        {
            $cust_first = $_POST['first'];
            $cust_email = $_POST['email'];
            $cust_last = $_POST['last'];
            $cust_address = $_POST['address'];
            $cust_city = $_POST['city'];
            $cust_state = $_POST['state_select'];
            $cust_zip = $_POST['zipCode'];
            $cust_phone = $_POST['phoneNumber'];
            $_SESSION['phoneNumber'] = $_POST['phoneNumber']; 
            $cust_credit = $_POST['creditCard'];
           //insert new customer
            $query2 = "INSERT INTO Customers(lastName, firstName, address,phoneNumber, email, city, state, zipCode)VALUES('$cust_last','$cust_first', '$cust_address','$cust_phone', '$cust_email', '$cust_city', '$cust_state', '$cust_zip' )";
            $result2 = mysql_query($query2);
            if(!$result2) die("Unable to create account! " . mysql_error());
        }
        
        $cust_username = $_POST['username'];
        $cust_password = $_POST['password'];
        $userValid =1;

        //check to see if username already exist
        $query1 = "SELECT username FROM Login";
        $result1 = mysql_query($query1);
        if(!$result1) die("Unable to access databse! " . mysql_error());

        $rows = mysql_num_rows($result1);

        for($i = 0; $i<$rows; $i++)
        {
            $row = mysql_fetch_row($result1);
            if($_POST['username'] == $row[0])
            {
                $userValid = 0;
            }
        }
        
        if($userValid == 1)
        {
            $seshPhone = $_SESSION['phoneNumber']; //stores customers phoneNumber in a session variable

            $query3 = "SELECT custID FROM Customers WHERE phoneNumber = '$seshPhone'";
            $result3 = mysql_query($query3);
            if(!$result3) die("Unable to get customer ID! " . mysql_error());
            $row = mysql_fetch_row($result3);

            $query4 = "INSERT INTO Login(custID, username, password)VALUES('$row[0]', '$cust_username' , '$cust_password')";
            $result4 = mysql_query($query4);
            if(!$result4) die("Unable to access Login table! " . mysql_error());
            
            unset($_SESSION['phoneNumber']);
            
            echo <<<_END
            <script>
            alert("Your account has been created succesfully! You may sign in now.");
            window.location.href = "login.php";
            </script>
_END;
        }
        else 
        {
            echo <<<_END
           <script>
                alert("The username that you have entered already exists");
            </script>
            		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Create An Account</h2>
							</header>
                            Please choose a different username
                            <form name = "info" id="info_form" action = "accountCreation.php" onsubmit="return allValid()" method = "post">
        <label class = "requiredLeft">username:</label> <input name = "username" id = "username" type = "text" />
		<label id="userErr"></label>
		<br><br>
		<label class = "requiredLeft">password:</label> <input name = "password" id = "password" type = "text" />
		<label id="passErr"></label>
		<br><br>
	<input type="submit" name ="submit" id = "submit1" value= "Create account"/> 
		<input type="reset" name ="cancel" value= "Cancel"/>
        </form>
						</section>
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script type="text/javascript" src= "js/validate.js"></script>
	</body>
_END;
        }
        
       
        
}
}
//account summary
function html_footerMyAccount()
{
    
    if(isset($_SESSION['username']))
    {
        
        $user = $_SESSION['username'];

        $query = "SELECT * FROM Login WHERE username=\"$user\"";
        $result1 = mysql_query($query);
        if(!$result1) die("Unable to access Login! " . mysql_error());
        $login_info = mysql_fetch_row($result1);
        

        $query2 = "SELECT * FROM Customers WHERE custID = '$login_info[0]'";
         $result2 = mysql_query($query2);
        if(!$result2) die("Unable to access Customer! " . mysql_error());
        $rows = mysql_fetch_row($result2);
        
        echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>My Account</h2>
							</header>
                            <div id="MyAcccount">
                            <table>
                            <tr>
                            <td>Name: $rows[1] $rows[2]</td>
                            </tr>
                            <tr>
                            <td>Address: $rows[4] $rows[5], $rows[6] $rows[7]</td>
                            </tr>
                            <tr>
                            <td>Phone Number: $rows[3]</td>
                            </tr>
                            <tr>
                            <td>Email: $rows[8]</td>
                            </tr>
                            <tr>
                            <td>Username: $login_info[1]</td>
                            </tr>
                            <tr>
                            <td>Password: $login_info[2]</td>
                            </tr>
                            </table>
                            <button type="submit" onclick="window.location.href='editAccount.php'">Edit Account Info</button>
                            </div>
						</section>
					</div>
				</div>
			</div>
		</div>
		
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script type="text/javascript" src= "js/accountValidation.js"></script>
	</body>
_END;
    }
    else
    {
        echo "You must be logged in to access this page!";
    }
}

function html_footerEditAccount()
{
    $user = $_SESSION['username'];

        $query = "SELECT * FROM Login WHERE username=\"$user\"";
        $result1 = mysql_query($query);
        if(!$result1) die("Unable to access Login! " . mysql_error());
        $login_info = mysql_fetch_row($result1);
        

        $query2 = "SELECT * FROM Customers WHERE custID = '$login_info[0]'";
         $result2 = mysql_query($query2);
        if(!$result2) die("Unable to access Customer! " . mysql_error());
        $rows = mysql_fetch_row($result2);
    
    echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>My Account</h2>
							</header>
_END;
     
            echo <<<_END
                                <form name="editAccount" method="post" action="updatedAccount.php">
                                <div id="MyAcccount">
                                <table>
                                <tr>
                                <td>First Name: <input type="text" name="firstName" id="fistName" value="$rows[1]"/><span class = "error"><label id="firstErr"></label></span>Last Name: <input type="text" name="lastName" id="lastName" value="$rows[2]"/><span class = "error"><label id="lastErr"></label></span></td>
                                </tr>
                                <tr>
                                <td>Address: <input type="text" name="address" id="address" value="$rows[4]"/><span class = "error"><label id="addressErr"></label></span>City: <input type="text" name="city" id="city" value="$rows[5]"/></td>
                                </tr>
                                <tr>
                                <td>State: <select name= "state_select" id= "state_select">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>Zip Code: <input type="text" name="zipCode" id="zipCode" value="$rows[7]"/></td>
                                </tr>
                                <tr>
                                <td>Phone Number: <input type="text" name="phoneNumber" id="phoneNumber" value="$rows[3]"/><span class = "error"><label id="phoneErr"></label></span></td>
                                </tr>
                                <tr>
                                <td>Email: <input type="text" name="email" id="email" value="$rows[8]"/><span class = "error"><label id="emailErr"></label></span></td>
                                </tr>
                                <tr>
                                <td>Password: <input type="text" name="password" id="password" value="$login_info[2]"/><span class = "error"><label id="passErr"></label></span></td>
                                </tr>
                                </table>
                                <input type="submit" name ="submit" id = "submit1" value= "Submit Changes"/>
                                </form>
_END;
    echo <<<_END
                            </div>
						</section>
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script type="text/javascript" src= "js/accountValidation.js"></script>
	</body>
_END;
}

function html_footerUpdatedAccount()
{
    
            $first = $_POST['firstName'];
            $last = $_POST['lastName'];
            $phoneNumber =  $_POST['phoneNumber'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state_select'];
            $zipCode = $_POST['zipCode'];
            $email =  $_POST['email'];
            $password = $_POST['password'];
            $user = $_SESSION['username'];
        
    //gets info from Login table
        $query = "SELECT * FROM Login WHERE username=\"$user\"";
        $result1 = mysql_query($query);
        if(!$result1) die("Unable to access Login! " . mysql_error());
        $login_info = mysql_fetch_row($result1);
    
    //Updates account info
     $query3 = "UPDATE Customers SET firstName= '$first',lastName='$last' ,phoneNumber ='$phoneNumber' ,address='$address',city='$city',state ='$state' ,zipCode = '$zipCode',email='$email' WHERE custID ='$login_info[0]' ";
            $result1 = mysql_query($query3);
            if(!$result1) die("Unable to access Customers! " . mysql_error());
    
    //updates new password
    $query4 = "UPDATE Login SET password = '$password' WHERE custID ='$login_info[0]' ";
            $result1 = mysql_query($query4);
            if(!$result1) die("Unable to access Customers! " . mysql_error());
        
        //gets new info from Customers table
        $query2 = "SELECT * FROM Customers WHERE custID = '$login_info[0]'";
         $result2 = mysql_query($query2);
        if(!$result2) die("Unable to access Customer! " . mysql_error());
        $rows = mysql_fetch_row($result2);
    
    //gets updated password
    $query5 = "SELECT password FROM Login WHERE username=\"$user\"";
        $result1 = mysql_query($query5);
        if(!$result1) die("Unable to access Login! " . mysql_error());
        $login_password = mysql_fetch_row($result1);
    
            
    echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Updated Account Information</h2>
							</header>
_END;
            
echo <<<_END
           <div id="MyAcccount">
                            <table>
                            <tr>
                            <td>Name: $rows[1] $rows[2]</td>
                            </tr>
                            <tr>
                            <td>Address: $rows[4] $rows[5], $rows[6] $rows[7]</td>
                            </tr>
                            <tr>
                            <td>Phone Number: $rows[3]</td>
                            </tr>
                            <tr>
                            <td>Email: $rows[8]</td>
                            </tr>
                            <tr>
                            <td>Username: $login_info[1]</td>
                            </tr>
                            <tr>
                            <td>Password: $login_password[0]</td>
                            </tr>
                            </table>
                            </div>
_END;
      echo <<<_END
                            </div>
						</section>
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
		<script type="text/javascript" src= "js/accountValidation.js"></script>
	</body>
_END;
}

//cart
function html_footerCart()
{

if(isset($_POST['productID']))
{

$price = array_key_exists('price', $_POST)? $_POST['price']:null;

$quantity = array_key_exists('quantity', $_POST)?$_POST['quantity']:null;

$name = array_key_exists('shirtName', $_POST)?$_POST['shirtName']:null;

$pID = array_key_exists('productID', $_POST)?$_POST['productID']:null;

$size = array_key_exists('size', $_POST)?$_POST['size']:null;

$query = "SELECT image FROM Products WHERE productID = '$pID'";
$result = mysql_query($query);
if(!$result) die("Unable to get image");
$image = mysql_fetch_row($result);
    

/*

 * these statements create session variables and store the data in them

 */

if(!isset($_SESSION['cart'][$pID]))

{

$_SESSION['cart'][$pID]['price'] =$price;

$_SESSION['cart'][$pID]['quantity'] = $quantity;

$_SESSION['cart'][$pID]['shirtName'] = $name;

$_SESSION['cart'][$pID]['productID'] = $pID;

$_SESSION['cart'][$pID]['size'] = $size;
    
$_SESSION['cart'][$pID]['image'] = $image[0];

}

else {

	$_SESSION['cart'][$pID]['quantity'] += $quantity;

}



if(!isset($_SESSION['totalP']))

{

	$_SESSION['totalP']=$price * $quantity;

}

else

{

	$_SESSION['totalP']+=$price * $quantity;

}

}



/*

 * This creates the table that will show all of the pizzas being order

 */

echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Cart</h2>
							</header>
_END;

echo '<table id="cart">';

  	echo'<th class="product">Product</th>';

  	echo'<th class="product">Quantity</th>';

  	

  	if(isset ($_SESSION['cart']))

  	{

  	foreach($_SESSION['cart'] as $item)

  	{

	   echo"<tr>";

		echo"<td>".$item['shirtName'].'<img id= "cart" src="images/'.$item['image'].'"><br>';

		echo $item['size'].'<br>';
        
        echo "$".$item['price']."</td>";

        echo'<td class="quantity">'.$item['quantity']."</td>";


	echo"</tr>";

  	}


  	echo"</table>";
    
    }
    
    
    if(isset($_SESSION['totalP']))
        echo "<p class='center' align='right'>Your Total is: $". $_SESSION['totalP'];
    else
        echo "<p class='center' align='right'>Your Total is: $0";

	echo<<<_END

	<form action="shopNow.php">

	<p>

    <input name="button" type="submit" id="button" value="Continue Shopping"/>

    </p>

    </form>

    <form action="checkout.php">

    <p>

    <input name="button" type="submit" id="button" value="Proceed to Checkout"/>

    </p>

    </form>

_END;

    echo <<<_END
                            </div>
						</section>
					</div>
				</div>
			</div>
		</div>
_END;
	

}
        
//Admin login page
function html_adminfooter1()
{
	echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Log in</h2>
							</header>
							<a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
						</section>
					</div>
					
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Admin Login</h2>
							</header> 
                            
          <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
			<form id="admin_login" method="post" action="adminhome.php" onsubmit="return allValid()" accept-charset="UTF-8">
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
			<td colspan="3"><strong>Admin Login </strong></td>
			</tr>
			<tr>
			<td width="78">Username</td>
			<td width="6">:</td>
			<td width="294"><input name="admin_username" type="text" id="admin_username"></td>
			</tr>
			<tr>
			<td>Password</td>
			<td>:</td>
			<td><input name="admin_password" type="password" id="admin_password" ></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Login"></td>
			</tr>
			</table>
			</td>
			</form>
			</tr>
			</table>
            <label class = "error" id="userErr"></label><br>
            <label class = "error" id="pswrdErr"></label>
            <script type="text/javascript" src="js/validate.js"></script>
						</section>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer -->
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
        
	</body>
_END;
        if(isset($_POST['admin_username']))
        {
            $admin_user = $_POST['admin_username'];
            $admin_pass = $_POST['admin_password'];
        
		  if($admin_user == "admin" && $admin_pass == "password")
            {	
                echo <<<_END
                <script>
                alert('Logged in! Welcome Admin');
                window.location.href = "customerreview.php";
                </script>
_END;
                setcookie("admin", $_POST['username'], time() - 3600, "/");
                $_SESSION['admin_username'] = $admin_user;
                $_SESSION['admin_password'] = $admin_pass;
            }
            else 
            {
                echo <<<_END
                <script>
                alert('Wrong username or password');
                </script>
_END;
            }
        }
    else if(isset($_SESSION['admin_username']) && isset($_SESSION['admin_password']))
    {
        echo <<<_END
            <script>
            alert('Already logged in!');
            </script>
_END;
    }
}
    
//Customer review page
function html_adminfooter2()
{
    echo <<<_END
		<!-- Footer -->
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
								<li>support@oxshirts.com</li>
								<li>jared@oxshirts.com</li>
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
				Brandon Wright | Jared Aarons | Zach Matl | Iridium 2015 &copy;
			</div>
		</div>
        
	</body>
_END;
}
?>
