      <div class="panel with-nav-tabs container">
			<div class="panel-body container col-sm-4 centered">
<?php echo validation_errors(); ?>
<?php echo form_open('user/changepass');//this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/changepass"?>
                        <div class="row">
                              <h2 class="text-center heading" style="color: #E9967A;"> <Strong> Change Password </Strong></h2> 
                               

							   <div class="col-xs-12 col-sm-12 col-md-12 margintop">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>
                                             <input type="password" class="form-control sm" placeholder="Enter Current Password" name="password" id="password">
                                          </div>
                                       </div>
                                    </div>
									
									
                                    <div class="col-xs-12 col-sm-12 col-md-12 margintop">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>
                                             <input type="password" class="form-control sm" placeholder="New Password" name="confirm_password">
											 
                                             <input type="password" class="form-control sm" placeholder="Re-enter New Password" name="new_password" id="new_password">
                                          </div>
                                       </div>
                                    </div>
									
									
                                
                                
                                
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group col-sm-5">
                                          <button type="submit" class="btn btn-lg btn-block heading signinbutton margintop" value="Submit"> SUBMIT</button>
                                       </div>
                                    </div>
								
									
									   
                              </div>
                                
                        </div>
                     </div>
					
                  </div>
                  </div>
				 </form>
                  </div>
            
	



  