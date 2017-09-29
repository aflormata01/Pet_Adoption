<div class="container">
  <div class="container">
  <h2>Sign up form</h2>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First Name: </label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" value="<?php echo set_value('fname'); ?>">
      </div>
	  <?php echo form_error('fname', '<p class="text-danger">', '</p>'); ?>
	  </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" value="<?php echo set_value('lname'); ?>">
      </div>
	  <?php echo form_error('lname', '<p class="text-danger">', '</p>'); ?>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
          <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>">
      </div>
	  <?php echo form_error('email', '<p class="text-danger">', '</p>'); ?>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="mname">User Name:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" id="username" placeholder="Enter user name" name="username" value="<?php echo set_value('username'); ?>">
      </div>
	  <?php echo form_error('username', '<p class="text-danger">', '</p>'); ?>
	</div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
         <input type="text" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo set_value('password'); ?>">
      </div>
	  <?php echo form_error('password', '<p class="text-danger">', '</p>'); ?>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="sex">Sex</label>
		<input type="radio" class="" id="sex" name="sex" value="M" value="<?php echo set_value('birthdate'); ?>" /> Male
			<input type="radio" class="" id="sex" name="sex" value="F" value="<?php echo set_value('birthdate'); ?>" /> Female
		</div>
		<?php echo form_error('sex', '<p class="text-danger">', '</p>'); ?>
	
		
	<div class="form-group">
    <label class="control-label col-sm-2" for="birthdate">Birthday</label>
    <div class="col-sm-2">
           <input type="date" class="form-control" id="birthdate" placeholder="birthday" name="birthdate" value="<?php echo set_value('birthdate'); ?>"/>
	</div>
	<?php echo form_error('birthdate', '<p class="text-danger">', '</p>'); ?>
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
  </form>
</div>