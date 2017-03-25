$(document).ready(function()
{
		$("#feedButton").click(function(){
			alert("asd");

			$('#feedbackblock').html('<div style="text-align:center; width:100%;"><i class="fa fa-spinner fa-pulse"></i> Recording Feedback...</div>');
	
			var name=document.getElementById("name").value;
			var feedback=document.getElementById("feedback").value;
		
		
			$.ajax(
			{
				data:
				{
					name: name,
					feedback: feedback
				}, 
				url: "../working/feedbackBack.php", 
				success: function(result){
                	$('#feedbackblock').html('<div style="text-align:center; width:100%;"><i class="fa fa-spinner"></i> Feedback Recorded...</div>');
			}});

});
});
