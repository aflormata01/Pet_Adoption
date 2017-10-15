  <?php echo form_open('peternity/signup'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/peternity/signup"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div >
    <div class="form-group text-left">
	<h2 class="heading text-center ">ADD STORY</h2>
		<label class="control-label" for="username">Username: </label><?php echo form_error('username', '<p class="text-danger">', '</p>'); ?>
		<input class="form-control" type="text" id="username" name="username" type="text" value="<?php echo set_value('username'); ?>"/>
    </div>
	<div class="form-group text-left">
		<label class="control-label" for="email">email: </label><?php echo form_error('email', '<p class="text-danger">', '</p>'); ?>
		<input class="form-control" type="email" id="email" name="email" value="<?php echo set_value('email'); ?>"/>
    </div>
	<div class="form-group text-left">
		<label class="control-label" for="password">password: </label><?php echo form_error('password', '<p class="text-danger">', '</p>'); ?>
		<input class="form-control" type="password" id="password" name="password" value="<?php echo set_value('password'); ?>"/>
    </div>
	<div class="margin-left">
	<h5><button type="submit" class="btn btn-muted btn-sm "><span class="glyphicon glyphicon-ok-sign"></span>SUBMIT</h5></button>
	</div>
    
  </form>
 </div>
 </div>