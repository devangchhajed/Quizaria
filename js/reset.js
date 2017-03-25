$(document).ready(function(){
    $("#resetButton").click(function(){
	
		var email=document.getElementById("umail").value;

		var atpos = email.indexOf("@");
		var dotpos = email.lastIndexOf(".");
		
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
			alert("Not a valid e-mail address");
			email.focus();
		}
		else{
			$.ajax(
			{
				data:
				{
					email: email,
				}, 
				url: "../working/resetBack.php", 
				success: function(result){
					result = JSON.parse(result);
					var disp = "<div class='alert alert-success'>Check your Mail for your Password.</div>";
				    	$("#dresult").html(disp);
			}});
			

		}

    });
});
