$(document).ready(function(){
	$("#second").hide();
});

function getQuote()
{ 
	str = document.quote.date.value; 
	
	if(str=="")
	{
		document.getElementById("error").innerHTML = "Please Enter value for date";
		return false;
	}
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari    
	xmlhttp1=new XMLHttpRequest(); 
	}
	else
	{// code for IE6, IE5    
	xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp1.onreadystatechange=function()
	{
		if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
		{
			document.getElementById("selects").innerHTML=xmlhttp1.responseText;
			$("#first").hide();
			$("#second").show();
		}
	}
		xmlhttp1.open("GET","getQuote.php?date="+str,true);
		xmlhttp1.send();	
	
	
}

function calculate(){
	var src = document.quote.source.value; 
	
	if(src=="")
	{
		document.getElementById("error").innerHTML = "Please Enter value for Source";
		return false;
	}
	
	var dest = document.quote.destination.value; 
	
	if(dest=="")
	{
		document.getElementById("error").innerHTML = "Please Enter value for Destination";
		return false;
	}
	
	var vehicle = document.quote.vehicle.value; 
	
	if(vehicle=="")
	{
		document.getElementById("error").innerHTML = "Please Enter value for vehicle";
		return false;
	}
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari    
	xmlhttp1=new XMLHttpRequest(); 
	}
	else
	{// code for IE6, IE5    
	xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp1.onreadystatechange=function()
	{
		if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
		{
			document.getElementById("amt").innerHTML=xmlhttp1.responseText;
		}
	}
	
	var url = "calculate.php?src='"+src+"'&dest='"+dest+"'&vehicle="+vehicle;
		xmlhttp1.open("GET",url,true);
		xmlhttp1.send();
	
	
}