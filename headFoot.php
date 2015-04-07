<?php
function headers($title)
{
	if(isset($_SESSION['admin_username']))
	{
		echo <<<_END
<html>
<head>
<meta charset="ISO-8859-1">
<title>$title</title>
<link rel = "stylesheet" type= "text/css" href = "_CSS/main.css">
		</head>
_END;
		echo <<<_END
		<h3 class = "signIn"><a href = "logout.php">Logout</a></h3>
				<nav class = "nav">
				<ul>
				<li><a href= "index.php">Home</a></li>
				<li><a href="products.php">Shop</a></li>
				<li><a href = "about.php">About</a></li>
    			<li><a href= "contactUs.php">Contact Us</a></li>
				 <li><a href= "cart.php">My cart</a></li>
				 <li><a href= "summary.php">Summary</a></li>
				</ul>
				</nav>
_END;
	}
else 
{
	echo <<<_END
<html>
<head>
<meta charset="ISO-8859-1">
<title>$title</title>
		<link rel = "stylesheet" type= "text/css" href = "_CSS/main.css">
</head>
_END;
       
if ((isset($_SESSION['username']) && isset($_SESSION['password'])))
{
     echo '<h3 class = "signIn"><a href = "logout.php">Logout</a></h3>';  
} 
else 
{ 
    echo '<h3 class = "signIn"><a href = "login.php">Sign In</a></h3>'; 
}
echo <<<_END
		<nav class = "nav">
		<ul>
	<li><a href= "index.php">Home</a></li>
	<li><a href="products.php">Shop</a></li>
	<li><a href = "about.php">About</a></li>
    <li><a href= "contactUs.php">Contact Us</a></li>
	<li><a href= "cart.php">My cart</a></li>
	</ul>
</nav>
_END;
}
}

function footers()
{
	echo <<<_END
	<head>
	<link rel = "stylesheet" type= "text/css" href = "_CSS/main.css">
	</head>
    <p><a href = "admin.php">admin</a></p>
	<p>We are located at 420 W Jefferson Street Milledgeville, GA 31061. Call us at 1 800 COOL TEE. You can also email us at either support@oxtees.com for support assistance or jared@oxtees.com for job opportunities</p>
			<br>
	<p>&copy; Ox Tees</p>
_END;
}