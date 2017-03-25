<?php
    require 'config.php';
	include 'common_header.php'; 
	include 'notificationModal.php'; 
	include 'logoandname.php'; 
			if(!isset($_SESSION["name"])||!isset($_SESSION["email"]))
			{
				echo '<script>window.location="round1.php"</script>';
			}	
//			if($_SESSION["score"]!=0)
	//			echo '<script>alert("You can only Play once."); window.location="round1.php"</script>';

?>
</br>
<hr>
          


		 	
			<div class="row" style="margin-top:10px;">
                <div class="col-lg-7  col-sm-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Sample Quiz    
						 </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <table class="table table-hover">
                                    <tbody>
										<tr>
										<td>
										
										<h3>About Round 1:</h3>
The questions in this round are general knowledge questions.<br>
Round 1 consists of 100 multiple choice questions.<br>
Maximum Time limit : 20 minutes<br>
Each question has ONLY ONE correct answer.<br>
You will be awarded for correct answers. In case of equal correct answers, positions will be decided according to the time consumed. NO NEGATIVE MARKING.<br>
Round 2 has no qualifying criteria, hence everyone is eligible for round 2 which will begin tomorrow </p>
<h3>Things to take care of:<h3>
DO NOT REFRESH the page, you’ll be disqualified if you do so.</p>
If you change the tab or window,or if you minimize the window, the question will change automatically.</p>
In case the server doesn’t respond due to heavy traffic, please wait for 10-15 seconds, we will patch it up. Don’t worry, we won’t let that time affect your scores!</p>
	<hr>

										</td>
                        </tr>
										<tr>
											<td valign="top">
												<input type="checkbox" name="agree" id="agree"> Tick this checkbox , if you have read all instructions <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and ready to attempt quiz / test.
												<div id="warning_checkbox"  class="arrow_box" style="display:none;color:#ffffff;background:#D03800;padding:2px; width:150px;">Tick above check box ! </div>
											</td>
											<td>
												<input type="button" id="starttestbtn" Value=" Start Test" onClick="javascript:checkbox_validate();"   class="btn btn-success" style="cursor:pointer;">
											</td>
										</tr>


                                   </tbody>
								</table>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
	  

	  <script>
	function checkbox_validate(){

	if(document.getElementById('agree').checked==true){
		window.location='processing.php';		}else{
	document.getElementById('warning_checkbox').style.display="block";
		}
	
	}
	
</script>
	  
	  


<?php
	include'associates.php';
	include 'common_footer.php'; ?>
</body>
</html>
