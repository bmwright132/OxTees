<?php
require_once 'dbConnect.php';

    session_start();
	$_SESSION = array();
	session_destroy();
?>
	<script type = "text/javascript">
	alert("You are logged out successufuly!");
        window.location.href = "index.php";
	</script>

