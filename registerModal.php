<!-- Modal -->
<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<script>
    function validateForm()
{
	var pass= document.getElementById("password").value;
	var cpass= document.getElementById("cpassword").value;

	if(cpass!=pass)
	{
		alert("Password Mismatch");
		return false;  
	}
}

      </script>
      <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
	        <form onsubmit = "return validateForm()"  method="post" action="register.php">
					<div class="form-group">
						<label for="usr">Name :</label>
						<input type="text" class="form-control"  placeholder="Abc Xyz" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="usr">Email :</label>
						<input type="email" class="form-control"  placeholder="myid@gmail.com" name="email" id="email">
					</div>
					<div class="form-group">
						<label for="usr">Password :</label>
						<input type="password" class="form-control"  placeholder="Password" name="password" id="password">
					</div>
					<div class="form-group">
						<label for="usr">Confirm Password :</label>
						<input type="password" class="form-control"  placeholder="Confirm Password" name="cpassword" id="cpassword">
					</div>
					<div class="form-group">
						<label for="usr">Mobile Number :</label>
						<input type="number" maxlimit="10" class="form-control"  placeholder="9876543210" name="mobile" id="mobile">
					</div>
					<div class="form-group">
						<label for="usr">Institute :</label>
						<input type="text" class="form-control"  placeholder="Birla Institute of Technology" name="college" id="college">
					</div>
					<input type="submit" value="Register"  class="form-control btn-primary btn-block"  id="signupbutton"/>
											By Clicking Register you agree to our <a href="./tnc.php">T&C</a>
					<!-- </form> -->
            </form>

      </div>
    </div>

  </div>
</div>
  
