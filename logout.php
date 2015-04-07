<?php
require_once 'headFoot.php';
require_once 'dbConnect.php';

echo <<<_END
<head>
<link rel = "stylesheet" type= "text/css" href = "main.css">
</head>
_END;

	session_start();
	$_SESSION = array();
	session_destroy();
	echo '<script type = "text/javascript">';
	echo 'alert("You are logged out successufuly!")';
	echo "</script>";


echo '<div id="header">';
headers("Logged out - Brandon's Pizza Store");
echo '</div>';

echo <<<_END
<div id="container">
<div id="content">
		To order, you must sign back in
</div>
</div>
<div id="footer">
_END;
footers();
echo '</div>';
?>