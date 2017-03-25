<?php
    require 'config.php';
	include 'common_header.php'; 
	include 'loginModal.php'; 
	include 'registerModal.php'; 
	include 'leaderModal.php'; 
	include 'notificationModal.php'; 
	include 'logoandname.php'; 
?>
</br>
<hr>
<script src="./js/reset.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Forgot Password</h3>
                    </div>

                    <div class="panel-body">
						
                        <div id="dresult">
                     </div> 
					 
                            <fieldset>
                                <div class="form-group">
                               <input class="form-control" name="umail" id="umail" placeholder=" Registered Email ID" type="text" autofocus  AutoComplete=off >
                                </div>
                              <button id="resetButton" class="btn btn-lg btn-success btn-block">Send Password</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  



<?php
	include'associates.php';
	include 'common_footer.php'; ?>
</body>
</html>
