function validation()
{
    var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var login = document.reg_form.login.value; 
	if(login=="")
	{
		document.getElementById("error").innerHTML = "Please enter the email id";
		return false;
	} else {
		if (!email_filter.test(login)) {
			document.getElementById("error").innerHTML = "Please enter a valid email id";
			return false;
		}
	}
	
	
	var pass = document.reg_form.password.value;
	if(pass=="")
	{
		document.getElementById("error").innerHTML = "Please enter the password";
		return false;
	} 

	

 }
