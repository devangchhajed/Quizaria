<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<script>
$(document).ready(function(){
    $("#login_submit").click(function(){
			
			$("#login_submit").attr('value', 'Connecting...');
			$("#login_submit").prop('value', 'Connecting...');
			$("#connectingMsg").html('<div class="btn btn-primary" style="text-align:center; width:100%;"><i class="fa fa-spinner fa-pulse"></i> Connecting...</div>');
			$("#login_submit").hide();
			
    });
});

</script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f6f6f6;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
	        <form method="post" action="login.php">
				<input type="text" placeholder="Email" class="form-control" name="LoginEmail" id="LoginEmail" />
				<input type="password" placeholder="Password" class="form-control" name="LoginPassword" id="LoginPassword" />
				<div id="loginsub">
				<div id="connectingMsg">
				</div>
				<input type="submit" class="form-control btn-primary btn-block" value="Login" name="login_submit" id="login_submit" />
				</div>
            </form>

      </div>
      <div class="modal-footer" style="background-color:#f6f6f6;">
		<a href="./reset.php">Forgot Password</a>
      </div>
    </div>

  </div>
</div>
