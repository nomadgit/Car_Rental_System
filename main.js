function addUser()
{
	
	if(!(document.getElementById('add').checked))	{
  	
		var date_filter = /^([0-9-])+$/;
	var src =document.form_reg.source.value;
	if(src=="Default")
	{
		document.getElementById("error").innerHTML = "Please Enter value for source";
		return false;
	}
	
	var dest =document.form_reg.dest.value;
	if(dest=="Default")
	{
		document.getElementById("error").innerHTML = "Please Enter value for destination";
		return false;
	}
	
	var fdat =document.form_reg.fdate.value;
	if(fdat=="")
	{
		document.getElementById("error").innerHTML = "Please Enter value for From date";
		return false;
	} else {
		if (!date_filter.test(fdat)) {
			document.getElementById("error").innerHTML = "Please enter a valid date";
			return false;
		}
	}
	
	var tdat =document.form_reg.tdate.value;
	if(tdat=="")
	{
		document.getElementById("error").innerHTML = "Please Enter value for To date";
		return false;
	} else {
		if (!date_filter.test(tdat)) {
			document.getElementById("error").innerHTML = "Please enter a valid date";
			return false;
		}
	}
	
	
	var modl =document.form_reg.model.value;
	if(modl=="Default")
	{
		document.getElementById("error").innerHTML = "Please Enter value for car model";
		return false;
	}
	
	var typ =document.form_reg.ctype.value;
	if(typ=="Default")
	{
		document.getElementById("error").innerHTML = "Please Enter value for Car type";
		return false;
	}
}	
}
    else if(document.getElementById('delete').checked) 
    {
    	var rid =document.form_reg.id.value;
    	if(rid=="")
    	{

    		doument.getElementById("error").innerHTML = "Please Enter value for  reservation ID";
			return false;

    	}
  	
	}


	
	
//	var oneday=24*60*60*1000
//	var dfrntday = Math.round(Math.abs((fdat.getTime() - tdat.getTime())/(oneday)));
//	var dfrntday=dfrntday*20;
	
//	var today = new Date();
//	var time = today.getTime();
//	var dd = today.getDate();
//	var mm = today.getMonth()+1; //January is 0!
//	var yyyy = today.getFullYear();
//	if(dd<10) 
//	{
//  dd='0'+dd
//	} 
//	if(mm<10) 
//	{
//    mm='0'+mm
//	} 
//	today = yyyy+'/'+mm+'/'+dd;
	
//	 if (window.XMLHttpRequest) 
//	 {
            // code for IE7+, Firefox, Chrome, Opera, Safari
//            xmlhttp = new XMLHttpRequest();
//     }
//	 else 
//	 {
            // code for IE6, IE5
//            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
	 
//	 xmlhttp.onreadystatechange = function() 
//	 {
//            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
//			{
//               query_res = xmlhttp.responseText;
//			   alert(query_res);
//			   return true;
//            }
//     }
	 
//	var dataURL = "/ins_cus.php?a="+today+"&b="+time+"&c="+dfrntday+"&d="+src+"&e="+dest+"&f="+fdat+"&g="+tdat;
//	xmlhttp.open("GET",dataURL,true);
//	xmlhttp.send();
	
// }
 
 
// function history(user)
// {
//	var query_res = new Array();
//	if (window.XMLHttpRequest) 
//		{
		// code for IE7+, Firefox, Chrome, Opera, Safari
//		xmlhttp=new XMLHttpRequest();
//		} 
//	else 
//		{ // code for IE6, IE5
//			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//		}
//		xmlhttp.onreadystatechange=function() 
//		{
	
//				if (xmlhttp.readyState==4 && xmlhttp.status==200) 
//				{			
//						query_res = xmlhttp.responseText.split("[BRK]");
			
//						var table_m = "<table><tr><th style='width: 100px; color: red'>Reservation ID</th>";
//						table_m+="<th style='width: 100px; color: red; text-align: right'> From Date</th>"
//						table_m+="<th style='width: 100px; color: red; text-align: right'> To Date</th></tr>";	
//						table_m+="<tr><td style='width: 100px'>---------------</td>";
//						table_m+="<td style='width: 100px; text-align: right'>---------------</td>"
//						table_m+="<td style='width: 100px; text-align: right'>---------------</td></tr>"
//						for(var i=0;i<=query_res.length;i++)
//						{
//							table_m+="<tr><td style='width: 100px'>"+query_res[i]+"</td>";
//							i++;
//							table_m+="<td style='width: 100px; text-align: right'>"+query_res[i]+"</td>";
//							i++;
//							table_m+="<td style='width: 100px; text-align: right'>"+query_res[i]+"</td></tr>";
//						}
//						table_m+="</table>";
						
//						document.getElementById("hst").innerHTML=table_m;
						
						
						
//			}
		
//		}
//		var dataURL = "/hstry.php?user_val=" + user;
//		xmlhttp.open("GET",dataURL,true);
//		xmlhttp.send();
//	 }