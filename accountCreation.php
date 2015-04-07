<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel = "stylesheet" type= "text/css" href = "_CSS/main.css">
</head>

<?php
require_once 'headFoot.php';
require_once 'dbConnect.php';

?>

<?php
echo '<div id= "header">';
headers("OX's Tees - Account");
echo "</div>";

echo '<div id = "container">';
echo '<div id = "content">';
?>		
<?php
echo <<<_END
<div id="accountCreation">
<form name = "info" id="info_form" action = "accountCreated.php" onsubmit="return allValid()" method = "post">
<span class = "error">*required</span>
<br><br>
<label class = 'requiredLeft'>First name:</label> <input class = "leftLabel" name = "first" id = "first" type = "text" />
	<label id="firstErr"></label>
	<label class = "requiredRight"> Email:</label> <input name = "email" id = "email" type = "text" />
			<label id="emailErr"></label>
				<br><br>
	<label class = "requiredLeft">Last name:</label> <input name = "last" id = "last" type = "text" />
			<label id="lastErr"></label>
	<label class = "requiredRight"> Phone number:</label> <input name = "phoneNumber" id = "phoneNumber" type = "text"/>
		<label id="phoneErr"></label>
		<br><br>
	<label class = "requiredLeft">Address:</label> <input name = "address" id = "address" type = "text" />
		<label id="addressErr"></label>
		<br><br>
	<label class = "requiredLeft">Credit card number:</label> <input name = "creditCard" id = "creditCard" type = "text"/>
		<label id="creditErr"></label>
		<br><br>
					<label class = "requiredLeft">username:</label> <input name = "username" id = "username" type = "text" />
		<label id="userErr"></label>
		<br><br>
		<label class = "requiredLeft">password:</label> <input name = "password" id = "password" type = "text" />
		<label id="passErr"></label>
		<br><br>
	<input type="submit" name ="submit" id = "submit1" value= "Create account"/> 
		<input type="reset" name ="cancel" value= "Cancel"/>
		
</form>
</div>
		</div>
</div>	
_END;
?>

<?php
echo '<div id = "footer">';
footers();
echo "</div>";
?>
<script type="text/javascript" src= "_scripts/accountValidation.js"></script>
</html>