<?php
require_once 'dbConnect.php';
session_start();


echo <<<_END
<head>
</head>
_END;

echo <<<_END
<div id = "container">
		<div id = "content">
_END;

if(!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query = "SELECT `password` FROM Login WHERE username = '$user'";
		
	$result = mysql_query($query);
	if(!$result) die("Unable to access databse: " .mysql_error());
	$row = mysql_fetch_row($result);
		
		
	if($row[0] == $pass)
	{	
		echo 'Logged in!<br> You may continue shopping.';
		setcookie("user", $_POST['username'], time() - 3600, "/");
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $pass;
	}
	else 
	{
		echo 'Wrong username or password<br>';
echo <<<_END
<form name="login" action="loginMessage.php" onsubmit = "return allValid()" method="post">
            <label>Username</label><input type="text" name="userid" id="userid"/><label id="userErr"></label>
            <br>
            Password<input type="password" name="pswrd"  id="pswrd"/><label id="pswrdErr"></label>
            <br>
            <input type="submit" value="Login"/>
            <input type="reset" value="Cancel"/>
        </form>
_END;
	}
}
else 
{
	echo "Already logged in";
}

echo '</div>';
echo '</div>';
?>