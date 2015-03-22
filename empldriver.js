function drivervalid(){
	var name_filter  = /^([a-zA-Z])+$/;
	var num_filter   = /^([0-9])+$/;
    var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var pass_filter  = /^([a-z])+([A-Z])+([?!])+([0-9])+$/;
    var state_filter = /^([a-zA-Z ])+$/;

    var add = document.getElementById("Add").checked;

	var id = document.form_reg.id.value; 
	if(id=="")
	{
		document.getElementById("error").innerHTML = "Please enter the Driver ID";
		return false;
	} else {
		if (!num_filter.test(id)) {
			document.getElementById("error").innerHTML = "Please enter a valid driver ID";
			return false;
		} else {
			if (id < 400 || id > 600) {
				document.getElementById("error").innerHTML = "Please enter the driver id in the range of 400 to 600";
				return false;
			}
		}
	}

	if (add != "") {
	var fname = document.form_reg.name.value; 
	if(fname=="")
	{
		document.getElementById("error").innerHTML = "Please enter the first name";
		return false;
	} else {
		if (!state_filter.test(fname)) {
			document.getElementById("error").innerHTML = "Please enter a valid first name";
			return false;
		}
	}

	var nation = document.form_reg.nation.value;
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

	var phno = document.form_reg.mob.value;
	if(phno=="")
	{
		document.getElementById("error").innerHTML = "Please enter the phone number";
		return false;
	} else {
		if (!num_filter.test(phno)) {
			document.getElementById("error").innerHTML = "Please enter a valid phone number";
			return false;
		} else {
			if (phno.length != 10) {
				document.getElementById("error").innerHTML = "Please enter a 10 digit phone number";
				return false;	
			}
		}
	}

	var addrs = document.form_reg.adrs.value;
	if(addrs=="")
	{
		document.getElementById("error").innerHTML = "Please Enter the value for address";
		return false;
	}
  }	
}