<?php
session_start();
require_once 'headFoot.php';
require_once 'dbConnect.php';
?>
<html>
    <head>
    <script type="text/javascript" src="_scripts/validate.js" async></script>
    </head>
    <body>
    <?php headers("OX's Tees - Login");?>
        <div id="container">
        <div id="content">
    <h1 style="margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Login and continue to shop!</h1>
 
   
        <form name="login" action="loginMessage.php" onsubmit = "return allValid()" method="post">
            <label>Username</label><input type="text" name="userid" id="userid"/><label id="userErr"></label>
            <br>
            Password<input type="password" name="pswrd"  id="pswrd"/><label id="pswrdErr"></label>
            <br>
            <input type="submit" value="Login"/>
            <input type="reset" value="Cancel"/>
            <br>
            Don't have an account with us? <a href="accountCreation.php">Create an account</a>
        </form>
       
<div style="width:100%;height:10%;vertical-align:middle;text-align:center;">
    <img src="_images/Login.jpg" />
    </div>
    </div>
    </div>

    <div id="footer">
    <?php footers();?>
    </div>
    </body>
</html>