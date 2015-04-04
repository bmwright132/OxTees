<?php
require_once 'headFoot.php';
session_start();

setcookie("user", $_POST['username'], time() - 3600, "/");

echo <<<_END
<head>
<link rel = "stylesheet" type= "text/css" href = "main.css">
</head>
_END;

echo '<div id = "header">';
headers("OX's Tees - Logged in");
echo '</div>';

echo <<<_END
<div id = "container">
		<div id = "content">
_END;

if(!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
if(isset($_POST['username']) && !empty($_POST['username']) && !empty($_POST['password']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query = "SELECT password FROM Customer WHERE username = '$user'";
	
	$result = mysql_query($query);
	if(!$result) die("Unable to access database!" . mysql_error());
	
	$row = mysql_fetch_row($result);
	
	
		if($row[0] == $pass)
		{	
			echo 'Logged in';
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $pass;
		}
		else 
		{
			echo 'Wrong username or password';
		}
}
else
{
	echo "Please enter a username";
}
}
else {
	echo "Already logged in";
}

echo '</div>';
echo '</div>';
echo '<div id= "footer">';
footers();
echo '</div>';
?>