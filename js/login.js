$(document).ready(function(){
    $("#login_submit").click(function(){
	
		var uname=document.getElementById("LoginUsername").value;
		var pass=document.getElementById("LoginPassword").value;
		var sbutton= document.getElementById("login_submit");

		if(uname.length > 30 || name==""){
			alert("Please enter correct Email");
		}else
		if(pass==""){
			alert("Please enter Password ");
		}
		else{
			
			$("#login_submit").attr('value', 'Connecting...');
			$("#login_submit").prop('value', 'Connecting...');
			$.ajax(
			{
				data:
				{
					uname: uname,
					pass: pass
				}, 
				url: "../login.php", 
				success: function(result){
					result = JSON.parse(result);
					var disp = " Server : "+result.last_id;
				    	$("#dresult").html(disp);
			}});
			

		}

    });
});
