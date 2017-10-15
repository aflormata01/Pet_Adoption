
         <div class="col-md-12">
         <div class="panel with-nav-tabs panel">
           

            <div class="panel-body">
               <div class="tab-content">
                  <div id="signup" class="tab-pane fade in active register">
				   <?php echo form_open('peternity/signup');//this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/peternity/signup"?>
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center heading" style="color: #E9967A;"> <Strong> Sign Up </Strong></h2> 
							  
							  <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-user"></span>
                                             </div>
                                             <input type="text" class="form-control sm" placeholder="First name" name="fname">
                                             <input type="text" class="form-control sm" placeholder="Last name" name="lname">
                                          </div>
                                       </div>
                                    </div>
                                 
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-user"></span>
                                             </div>
                                             <input type="text" class="form-control sm" placeholder="Username" name="uname">
                                          </div>
                                       </div>
                                    </div>
                               

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>
                                             <input type="password" class="form-control sm" placeholder="Enter Password" name="pass">
                                          </div>
                                       </div>
                                    </div>
                                
                                
                                
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-lg btn-block heading" value="Submit"> Register</button>
                                       </div>
                                    </div>
									</form>
									
									   <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       Already have an account? <a href="<?php echo base_url('peternity/')?>" data-toggle="modal" class="sm"> Sign-in. </a>
                                    </div>
                                 </div>
                              </div>
                                
                        </div>
                     </div>
					
                  </div>
               </div>
            </div>
         </div>
      </div>
	



   <div class="modal fade" id="forgot">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss='modal' aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
               <h4 class="modal-title" style="font-size: 32px; padding: 12px;"> Recover Your Password </h4>
            </div>

            <div class="modal-body">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon iga2">
                                 <span class="glyphicon glyphicon-envelope"></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Enter Your E-Mail ID" name="email">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon iga2">
                                 <span class="glyphicon glyphicon-lock"></span>
                              </div>
                              <input type="password" class="form-control" placeholder="Enter Your New Password" name="newpwd">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="modal-footer">
               <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-info"> Save <span class="glyphicon glyphicon-saved"></span></button>

                  <button type="button" data-dismiss="modal" class="btn btn-lg btn-default"> Cancel <span class="glyphicon glyphicon-remove"></span></button>
               </div>
            </div>
         </div>
      </div>
   </div>