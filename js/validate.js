/**
 * 
 */	
var user = document.getElementById('username');
var pwd = document.getElementById('password');
var userValid= true 
var pwdValid = true;

user.onblur = function validate()
{
    if(user.value == "")
    {
        document.getElementById('userErr').innerHTML = "* Username cannot be empty";
		userValid = false;
    }
    else if(/^[a-zA-Z][a-zA-Z0-9]*$/.test(user.value))
    {
        document.getElementById('userErr').innerHTML ="";
		userValid = true;
    }
    else
    {
		document.getElementById('userErr').innerHTML = "* Please enter a valid username";
		userValid = false;
    }
}
		
pwd.onblur = function validate()
{
    if(pwd.value == "")
    {
        document.getElementById('pswrdErr').innerHTML = "* Password cannot be empty";
		userValid = false;
    }
    else if(pwd.value.length < 6)
    {
        document.getElementById('pswrdErr').innerHTML = "* Password must be atleast 6 characters";
		userValid = false;
    }
    else
    {
		 document.getElementById('pswrdErr').innerHTML = "";
		userValid = true;
    }
}

		
function allValid()
{
	if(userValid && pwdValid)
	{
		return true;
	}
	else
	{
		return false;
	}
}