<script src="./js/feedback.js"></script>

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Feedback</h3>
                    </div>

                    <div class="panel-body" id="feedbackblock">
                            <fieldset>
                                <div class="form-group">
                               <input class="form-control" name="name" id="name" placeholder="Name" type="text" <?php	if(isset($_SESSION['name']))	{		echo 'value="'.$_SESSION['name'].'"';	}?> autofocus  AutoComplete=off >
								<textarea class="form-control" name="feedback" id="feedback" rows="5" id="comment"></textarea>
							   </div>
                              <button id="feedButton" class="btn btn-lg btn-success btn-block">Submit Feedback</button>
                            </fieldset>
                    </div>
                </div>
            </div>
			
