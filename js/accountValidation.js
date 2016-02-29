/**
 * 
 */
var firstName = document.getElementById("first");
var lastName = document.getElementById("last");
var email = document.getElementById("email");
var phoneNumber = document.getElementById("phoneNumber");
var address = document.getElementById("address");
var creditCard = document.getElementById("creditCard");
var username = document.getElementById("username");
var password = document.getElementById("password");

var firstValid = false;
var lastValid = false;
var emailValid = false;
var phoneNumberValid = false;
var addressValid = false;
var creditValid = false;
var usernameValid = false;
var passwordValid = false;

firstName.onblur = function validateFirst()
{
	 if(firstName.value == "")
	    {
	        document.getElementById('firstErr').innerHTML = "This field cannot be empty";
			firstValid = false;
	    }
	    else if(/^[A-Z][a-z]*$/.test(firstName.value))
	    {
	        document.getElementById('firstErr').innerHTML ="";
			firstValid = true;
	    }
	    else
	    {
			document.getElementById('firstErr').innerHTML = "Please enter a valid username";
			firstValid = false;
	    }
}

lastName.onblur = function validateLast(){
    
    if(lastName.value == "")
    {
        document.getElementById('lastErr').innerHTML = "This field cannot be empty";
        lastValid = false;
    }
    else if (/^[A-Z][a-zA-Z]*$/.test(lastName.value))
	{
       document.getElementById('lastErr').innerHTML ="";
        lastValid = true;
	}
	else
	{
       document.getElementById('lastErr').innerHTML = "Only letters and white space allowed";
        lastValid = false;
	}
}
    

email.onblur = function validateEmail(){
    
    if(email.value == "")
    {
        document.getElementById('emailErr').innerHTML = "This field cannot be empty";
        emailValid = false;
    }
    else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))
		{
            document.getElementById('emailErr').innerHTML ="";
            emailValid = true;
		}
		else
		{
            document.getElementById('eamilErr').innerHTML = "Please enter a valid email address";
            emailValid = false;
		}
}

phoneNumber.onblur = function validatePhone(){
    
    if(phoneNumber.value == "")
    {
        document.getElementById('phoneErr').innerHTML = "This field cannot be empty";
        phoneNumberValid = false;
    }
    else if (/^[0-9]{10}$/.test(phoneNumber.value))
		{
            document.getElementById('phoneErr').innerHTML ="";
            phoneNumberValid = true;
		}
		else
		{
            document.getElementById('phoneErr').innerHTML = "Please enter a valid phone number";
            phoneNumberValid = false;
		}
    
}

address.onblur = function validateAddress(){
    
    if(address.value == "")
    {
        document.getElementById('addressErr').innerHTML = "This field cannot be empty";
        addressValid = false;

    }
    else if (/^[1-9][0-9a-zA-Z ]*$/.test(address.value))
		{
            document.getElementById('addressErr').innerHTML ="";
            addressValid = true;
		}
		else
		{
            document.getElementById('addressErr').innerHTML = "Please enter a valid address";
            addressValid = false;
		}
    
}
creditCard.onblur = function validateCredit(){
    
    if(creditCard.value == "")
    {
        document.getElementById('creditErr').innerHTML = "This field cannot be empty";
        creditValid = false;
    }
    else if (/^[0-9]{16}$/.test(creditCard.value))
		{
            document.getElementById('creditErr').innerHTML ="";
            creditValid = true;
		}
		else
		{
            document.getElementById('creditErr').innerHTML = "Please enter a credit card number";
            creditValid = false;
		}
    
}

username.onblur = function validateUsername(){
    
    if(username.value == "")
    {
        document.getElementById('userErr').innerHTML = "This field cannot be empty";
        usernameValid = false;
    }
    else if (/^[a-zA-Z][a-zA-Z0-9]*$/.test(username.value))
		{
            document.getElementById('userErr').innerHTML ="";
            usernameValid = true;
		}
		else
		{
            document.getElementById('userErr').innerHTML = "Please enter a valid username";
            usernameValid = false;
		}
    
}

password.onblur = function validatePassword(){
    
    if(password.value == "")
    {
        document.getElementById('passErr').innerHTML = "This field cannot be empty";
        passwordValid = false;
    }
    else if (password.value.length < 6)
		{
            document.getElementById('passErr').innerHTML = "Password must be atleast 6 characters";
            passwordValid = false;
		}
    else if(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,15}$/.test(password.value))
    {
        document.getElementById('passErr').innerHTML = "";
        passwordValid = true;
    }
    else
    {
        document.getElementById('passErr').innerHTML ="Password must contain atleast one number and one special character";
        passwordValid = false;
    }
}

function allValid()
{
    if(firstValid && lastValid && emailValid && phoneNumberValid && addressValid && creditValid && usernameValid && passwordValid)
    {
        return true;
    }
    else
    {
        return false;
    }
}