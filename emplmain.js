function vehvalid()
{
 	var name_filter  = /^([a-zA-Z])+$/;
	var num_filter   = /^([0-9])+$/;
    var state_filter = /^([a-zA-Z ])+$/;
    var pass_filter  = /^([0-9])+([a-zA-Z|])+$/;
    var add 		 = document.getElementById("Add").checked;

	var id = document.form_reg.id.value; 
	if(id=="")
	{
		document.getElementById("error").innerHTML = "Please enter the Vehicle ID";
		return false;
	} else {
		if (!num_filter.test(id)) {
			document.getElementById("error").innerHTML = "Please enter a valid vehicle name";
			return false;
		} else {
			if (id < 300 || id > 500) {
				document.getElementById("error").innerHTML = "Please enter the vehicle id in the range of 300 to 500";
				return false;
			}
		}
	}
	
	
	if (add != "") {
	
	var model = document.form_reg.model.value;
	if(model=="")
	{
		document.getElementById("error").innerHTML = "Please enter the Model Name";
		return false;
	} else {
		if (!state_filter.test(model)) {
			document.getElementById("error").innerHTML = "Please enter a valid Model name";
			return false;
		}
	}
	

	var type = document.form_reg.type.value;
	if(type=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for Type";
		return false;
	} else {
		if (!name_filter.test(type)) {
			document.getElementById("error").innerHTML = "Please enter a valid Type";
			return false;
		}
	}
	
	
	var condition = document.form_reg.cond.value;
	if(condition=="")
	{
		document.getElementById("error").innerHTML = "Please enter the condition of the vehicle";
		return false;
	} else {
		if (!name_filter.test(condition)) {
			document.getElementById("error").innerHTML = "Please enter a valid condition";
			return false;
		} 

		if (condition != "Excellent" && condition != "Good" && condition != "Average" && condition != "Bad") {
			document.getElementById("error").innerHTML = "Please a condition like Excellent, Bad, Average or Good";
			return false;
		}
	}

	
	var seat = document.form_reg.seat.value;
	if(seat=="")
	{
		document.getElementById("error").innerHTML = "Please enter the seat quantity";
		return false;
	} else {
		if (!num_filter.test(seat)) {
			document.getElementById("error").innerHTML = "Please enter a valid seat count";
			return false;
		} 
		
		if (seat > 99) {
			document.getElementById("error").innerHTML = "Seat Count cannot be greater than 2 digits";
		    return false;
		}
		
	}


	var charge = document.form_reg.charge.value;
	if(charge=="")
	{
		document.getElementById("error").innerHTML = "Please enter the value for daily charge";
		return false;
	} else {
		if (!num_filter.test(charge)) {
			document.getElementById("error").innerHTML = "Please enter a valid daily charge";
			return false;
		} 
		
		if (charge > 400) {
			document.getElementById("error").innerHTML = "Daily Charge cannot exceed 400";
		    return false;
		}
		
	}


	var cost = document.form_reg.cost.value;
	if(cost=="")
	{
		document.getElementById("error").innerHTML = "Please Enter the cost";
		return false;
	} else {
		if (!num_filter.test(cost)) {
			document.getElementById("error").innerHTML = "Please enter a valid cost";
			return false;
		} 

		if (cost > 99) {
			document.getElementById("error").innerHTML = "Cost cannot be greater than 2 digits";
		    return false;
		}	
		
	}


	var mile = document.form_reg.mile.value;
	if(mile=="")
	{
		document.getElementById("error").innerHTML = "Please Enter the Mileage of the vehicle";
		return false;
	} else {
		if (!pass_filter.test(mile)) {
			document.getElementById("error").innerHTML = "Please enter a mileage";
			return false;
		} 
	}

	var avail = document.form_reg.avail.value;
	if(avail=="")
	{
		document.getElementById("error").innerHTML = "Please Enter the Availability";
		return false;
	} else {
		if (!name_filter.test(avail)) {
			document.getElementById("error").innerHTML = "Please enter a valid availability";
			return false;
		} 
	
		if (avail != "Yes" && avail != "No") {
			document.getElementById("error").innerHTML = "Availability can either be Yes or No";
		    return false;
		}	
		
	}
	
	}
 }
