<?php echo form_open('peternity/signup'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/peternity/signup"?>
                                  
<div class="col-md-12">
         <div class="panel with-nav-tabs panel">
            <div class="panel-heading">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
               <ul class="nav nav-tabs">
                  <li></li>
               </ul>
</div>
		  <div class="modal-body">	   
			   <div class="tab-pane">
                     <div class="container-fluid">
                      <div> 
                              <h2 class="text-center heading" style="color: #E9967A;">  Sign Up </h2> 
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-user"></span>
                                             </div>
											 <label for="username"></label>
											 <?php echo form_error('username', '<p class="text-danger">', '</p>'); ?>
                                             <input type="text" class="form-control sm" placeholder="Enter User Name" id="username" name="username" value="<?php echo set_value('username'); ?>" />
                                          </div>
                                       </div>
                                    </div>
                                

                                 
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                             </div>
											 <label for="email"></label>
											 <?php echo form_error('email', '<p class="text-danger">', '</p>'); ?>
                                             <input type="email" class="form-control sm" placeholder="Enter E-Mail" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                                          </div>
                                       </div>
                                    </div>
                                
                                
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>
											 <label for="password"></label>
											 <?php echo form_error('password', '<p class="text-danger">', '</p>'); ?>
                                             <input type="password" class="form-control sm" placeholder="Enter Password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                                          </div> 
                                       </div>
                                    </div>
                                
                                 
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-lg btn-block heading" value="Submit"> Register</button>
                                       </div>
                                    </div>
                             </form>    
                        </div>
                        </div>
                     </div>
                     </div>
                     </div>
                     </div>
                     </div>
                     </div>