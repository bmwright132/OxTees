<?php
$host = "localhost";
$db = "oxTees";
$username = "bmwright132";
$pwd = "Pass@word";
$db_server = mysql_connect($host, $username, $pwd);

if(!$db_server) die("Can't connect to the server!" . mysql_error());

//selecting database
mysql_select_db($db) or die("Unable to connect to: $db" .mysql_error());
?>