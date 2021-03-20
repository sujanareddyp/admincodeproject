function validatecontact()
{
	var name=$("#name").val();
	var email=$("#email").val();
	var mobile=$("#mobile").val();
	var message=$("#msg").val();
	var status=true;
	
	if(name=="")
	{
		$("#name").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#name").css("border","");
	}
	//============for email====================//
	if(email=="")
	{
		$("#email").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#email").css("border","");
	}
	//===========for mobile=========//
	if(mobile==""||mobile.lenght<10||mobile.lenght>10||isNaN(mobile))
	{
		$("#mobile").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#mobile").css("border","");
	}
	//========for message============//
	if(message=="")
	{
		$("#msg").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#msg").css("border","");
	}
	
	if(status==true)
	{
		var mydata={"n":name,"e":email,"mob":mobile,"msg":message};
		$.ajax({
			url:"savecontact.php",
			type:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
			
		});
	}
//============================================//	
}//closes
function deletecontact(contactid)
{
	var status=confirm("Are U Sure?? Do U Want to Delete");
	if(status==true)
	{
		var mydata={"id":contactid};
		$.ajax({
			url:"deletecontact.php",
			type:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
			
		});
	}
}
function editcontact(contactid)
{
	var status=confirm("Are U Sure?? Do U Want to Edit the Record");
	if(status==true)
	{
		var mydata={"id":contactid};
		$.ajax({
			url:"editcontact.php",
			type:"POST",
			data:mydata,
			success:function(response){
				$("#editresult").html(response);
			}
			
		});
	}
}
function updatecontact()
{
	var name=$("#ename").val();
	var email=$("#eemail").val();
	var mobile=$("#emobile").val();
	var message=$("#emsg").val();
	var id=$("#eid").val();
	var status=true;
	
	if(name=="")
	{
		$("#ename").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#ename").css("border","");
	}
	//============for email====================//
	if(email=="")
	{
		$("#eemail").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#eemail").css("border","");
	}
	//===========for mobile=========//
	if(mobile==""||mobile.lenght<10||mobile.lenght>10||isNaN(mobile))
	{
		$("#emobile").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#emobile").css("border","");
	}
	//========for message============//
	if(message=="")
	{
		$("#emsg").css("border","2px solid red");
		staus=false;
	}
	else{
		$("#emsg").css("border","");
	}
	
	if(status==true)
	{
		var mydata={"n":name,"e":email,"mob":mobile,"msg":message,"id":id};
		$.ajax({
			url:"updatecontact.php",
			type:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
			
		});
}




















