function validate()
{
 	var name_filter  = /^([a-zA-Z])+$/;
	var num_filter   = /^([0-9])+$/;
    var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var pass_filter  = /^([a-z])+([A-Z])+([?!])+([0-9])+$/;
    var state_filter = /^([a-zA-Z ])+$/;

	var fname = document.form_reg.fname.value; 
	if(fname=="")
	{
		document.getElementById("error").innerHTML = "Please enter the first name";
		return false;
	} else {
		if (!name_filter.test(fname)) {
			document.getElementById("error").innerHTML = "Please enter a valid first name";
			return false;
		}
	}
	
	
	var lname = document.form_reg.lname.value;
	if(lname=="")
	{
		document.getElementById("error").innerHTML = "Please enter the last name";
		return false;
	} else {
		if (!name_filter.test(lname)) {
			document.getElementById("error").innerHTML = "Please enter a valid last name";
			return false;
		}
	}
	

	var phno = document.form_reg.phno.value;
	if(phno=="")
	{
		document.getElementById("error").innerHTML = "Please enter the phone number";
		return false;
	} else {
		if (!num_filter.test(phno)) {
			document.getElementById("error").innerHTML = "Please enter a valid phone number";
			return false;
		} else {
			if (phno.length != 12) {
				document.getElementById("error").innerHTML = "Please enter a 12 digit phone number";
				return false;	
			}
		}
	}


	var city = document.form_reg.city.value;
	if(city=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for city";
		return false;
	} else {
		if (!state_filter.test(city)) {
			document.getElementById("error").innerHTML = "Please enter a valid city";
			return false;
		}
	}
	
	
	var addrs = document.form_reg.address.value;
	if(addrs=="")
	{
		document.getElementById("error").innerHTML = "Please Enter the value for address";
		return false;
	}


	var state = document.form_reg.state.value;
	if(state=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for state";
		return false;
	} else {
		if (!state_filter.test(state)) {
			document.getElementById("error").innerHTML = "Please enter a valid state";
			return false;
		} else {
			if (state.length < 2) {
				document.getElementById("error").innerHTML = "State should not be less than 2 characters";
				return false;
			}
		}
	}

	
	var zip = document.form_reg.zip.value;
	if(zip=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for zip code";
		return false;
	} else {
		if (!num_filter.test(zip)) {
			document.getElementById("error").innerHTML = "Please enter a valid zip code";
			return false;
		} else {
			if (zip.length < 5) {
				document.getElementById("error").innerHTML = "Zip Code should be atleast 5 digits long";
			    return false;
			}
		}
	}


	var nation = document.form_reg.nationality.value;
	if(nation=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for nationality";
		return false;
	} else {
		if (!name_filter.test(nation)) {
			document.getElementById("error").innerHTML = "Please enter a valid nationality";
			return false;
		}
	}


	var cntry = document.form_reg.country.value;
	if(cntry=="")
	{
		document.getElementById("error").innerHTML = "Please Enter the value for country";
		return false;
	} else {
		if (!state_filter.test(cntry)) {
			document.getElementById("error").innerHTML = "Please enter a valid country name";
			return false;
		}
	}


	var email = document.form_reg.emailid.value;
	if(email=="")
	{
		document.getElementById("error").innerHTML = "Please enter a value for Email ID";
		return false;
	} else {
		if (!email_filter.test(email)) 
  	   		{
  				document.getElementById("error").innerHTML = "Please enter a valid Email ID";
				return false;
  	   		}
	}


	var pswd = document.form_reg.passid.value;
	if(pswd=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for password";
		return false;
	} else {
  		if (!pass_filter.test(pswd)) {
  	  		document.getElementById("error").innerHTML = "Password must include lowercase followed by uppercase alphabets followed by ?! and digits from 0 to 9";
  	  		return false;
  		} else {
  			if (pswd.length <= 8) {
  	 			document.getElementById("error").innerHTML = "Password should be more than 8 character long";
  	 			return false;
  			}
  		}
   }


	var repswd = document.form_reg.repassid.value;
	if(repswd=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for retype-password";
		return false;
	}
  

	if(pswd != repswd)
	{
		document.getElementById("error").innerHTML = "The password values do not match, please re type";
		return false;
	}

 }
