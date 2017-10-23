 <?php echo form_open('admin/addUser'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/admin/addUser"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div>
    <div class="form-group text-left">
	<h2 class="font text-center heading">ADD USER</h2>

	<div class="form-horizontal">
  <?php echo validation_errors(); ?>
 
  
    <div class="form-group">
      <label class="control-label col-sm-4" for="fname">First Name: </label>
      <div class="col-sm-6">
        <input type="fname" class="form-control" id="fname" name="fname" />
      </div>
	  </div>

	<div class="form-group">
      <label class="control-label col-sm-4" for="lname">Last Name:</label>
      <div class="col-sm-6">
        <input type="lname" class="form-control" id="lname" name="lname" />
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" name="email" />
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="username">User Name:</label>
      <div class="col-sm-6">
        <input type="uname" class="form-control" id="username" name="username" />
      </div>
	</div>
	
	
	
	<div class="form-group">
		<label class="control-label col-sm-4" for="sex">Sex</label>
		<div class="col-sm-6">
		<input type="radio" class="" id="sex" name="sex" value="Female" value="Male" /> Male
		<input type="radio" class="" id="sex" name="sex" value="Male" value="Female" /> Female
	</div>
	</div>
		
	<div class="form-group">
    <label class="control-label col-sm-4" for="birthdate" id="birthdate" name="birthdate">Birthday</label>
    <div class="col-sm-4">
      
			
                <input type="date" class="form-control" id="birthdate" name="birthdate" />
				
        
			</div>
		</div>
		
	<div class="margin-left">
		<h5><button type="submit" class="btn btn-muted btn-sm " value="Submit"><span class="glyphicon glyphicon-ok-sign"></span>SUBMIT</h5></button>
	</div>
    
  </form>
 </div>
 </div>