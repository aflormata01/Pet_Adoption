  <?php echo form_open('peternity/signup'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/addstories"?>
  <div class="modal-body modalb">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
	<h2>Sign up form</h2>
	<div class="form-group">
	 <div class="col-sm-12">
      <label class="control-label col-sm-4" for="fname">First Name: </label>
      <div class="col-sm-6">
        <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname">
      </div>
	  <?php echo form_error('fname', '<p class="text-danger">', '</p>'); ?>
	  </div>
	  </div>

	<div class="form-group">
	 <div class="col-sm-12">
      <label class="control-label col-sm-4" for="lname">Last Name:</label>
      <div class="col-sm-6">
        <input type="lname" class="form-control col-sm-4" id="lname" placeholder="Enter last name" name="lname">
      </div>
	  <?php echo form_error('lname', '<p class="text-danger">', '</p>'); ?>
	  </div>
	  </div>
	  
	  <div class="form-group">
	  <div class="col-sm-12">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control col-sm-4" id="email" placeholder="Enter email" name="email">
      </div>
	   <?php echo form_error('email', '<p class="text-danger">', '</p>'); ?>
    </div>
    </div>
	
	<div class="form-group">
	 <div class="col-sm-12">
      <label class="control-label col-sm-4" for="mname">User Name:</label>
      <div class="col-sm-6">
        <input type="uname" class="form-control col-sm-4" id="uname" placeholder="Enter user name" name="uname">
      </div>
	   <?php echo form_error('username', '<p class="text-danger">', '</p>'); ?>
	</div>
	</div>
	
    <div class="form-group">
	 <div class="col-sm-12">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control col-sm-4" id="password" placeholder="Enter password" name="password">
      </div>
	  <?php echo form_error('password', '<p class="text-danger">', '</p>'); ?>
    </div>
    </div>
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember">Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</div>