<?php
?>
<html>
    <head>
    </head>
    <body>
    <?php headers("OX's Tees - Login");?>
        <div style="width:100%;height:10%;vertical-align:middle;text-align:center;">
    <h1 style="margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Login and continue to shop!</h1>
    </div>
   
        <form name="login" style="width:100%;height:10%;vertical-align:middle;text-align:center;">
            Username<input type="text" name="userid"/>
            Password<input type="password" name="pswrd"/>
            <input type="button" onclick="check(this.form)" value="Login"/>
            <input type="reset" value="Cancel"/>
        </form>
        <script type="text/javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd") 
                {
                    window.open('loginMessage.php')/*opens the target page while Id & password matches*/
                }
                else
                {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>
    </body>
    <br>
    <div style="width:100%;height:10%;vertical-align:middle;text-align:center;">
    <img src="Login.jpg" />
    </div>