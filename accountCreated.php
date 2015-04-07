<?php
require_once 'headFoot.php';
require_once 'dbConnect.php';

echo <<<_END
<head>
<link rel = "stylesheet" type= "text/css" href = "_CSS/main.css">
</head>
_END;

echo '<div id = "header">';
headers("OX's Tees - Account");
echo '</div>';

if(isset($_POST['first']))
{
$cust_first = $_POST['first'];
$cust_email = $_POST['email'];
$cust_last = $_POST['last'];
$cust_address = $_POST['address'];
$cust_phone = $_POST['phoneNumber'];
$cust_credit = $_POST['creditCard'];
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
		$userErr = "The username already exists";
		$userValid = 0;
	}
}

if($userValid == 1)
{
	//insert new customer
	$query2 = "INSERT INTO Customers(lastName, firstName, address,phoneNumber, email)VALUES('$cust_last','$cust_first', '$cust_address','$cust_phone', '$cust_email' )";
	$result2 = mysql_query($query2);
	if(!$result2) die("Unable to create account! " . mysql_error());
	
	$query3 = "SELECT custID FROM Customers WHERE phoneNumber = '$cust_phone'";
	$result3 = mysql_query($query3);
	if(!$result3) die("Unable to get customer ID! " . mysql_error());
	$row = mysql_fetch_row($result3);
	
	$query4 = "INSERT INTO Login(custID, username, password)VALUES('$row[0]', '$cust_username' , '$cust_password')";
	$result4 = mysql_query($query4);
	if(!$result4) die("Unable to access Login table! " . mysql_error());
	
	echo '<div id = "container">';
	echo '<div id = "content">';
	echo "Your account has been created succesfully!<br>You may sign in now.";
	echo '</div>';
	echo '</div>';
}
else 
{
	echo '<div id = "container">';
	echo '<div id = "content">';
	echo <<<_END
	<h3>Username is already taken! Please go back and re-enter a new one</h3>
	</div>
			</div>
	</div>
_END;
}


echo '<div id="footer">';
footers();
echo '</div>';
}
?>
<script type="text/javascript" src= "_scripts/accountValidation.js"></script>