
<div class="container">
    <div class="row profile col-md-12"><br/>
		<div class="col-md-3">
			<div class="profile-sidebar">
				
				<div class="profile-userpic">
					
				<img src="<?php echo base_url('assets/images/123.jpg'); ?>" class="img-responsive img-circle" alt="profilepic">
				<label>Change your profile picture : </label><input class="text-center" id="files-upload" type="file">
				</div>
				
				<div class="profile-usertitle">
					<div class="profile-usertitle-name text-center">
					<h2>	Janelyn Ann Gellado </h2>
					</div>
					
					
				</div>
				<br/>
				<div class="profile-usermenu text-center">
					<ul class="nav">
					
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						</ul>
						</div>
					</div>
				</div>
			
			
		
		<div class="col-md-9">
            <div class="profile-content">
			  <div class="container">
  <div class="container">
  <br/><br/>
  <div class="form-horizontal">
  <?php echo form_open('user/setting'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/setting"?>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First Name: </label>
      <div class="col-sm-4">
        <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname" value="<?php echo set_value('fname'); ?>">
      </div>
	  </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name:</label>
      <div class="col-sm-4">
        <input type="lname" class="form-control" id="lname" placeholder="Enter last name" name="lname" value="<?php echo set_value('lname'); ?>">
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="username">User Name:</label>
      <div class="col-sm-4">
        <input type="uname" class="form-control" id="username" placeholder="Enter user name" name="username" value="<?php echo set_value('username'); ?>">
      </div>
	</div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="username">Password:</label>
      <div class="col-sm-4">
        <a href="peternity/changepass">Change Password</a>
      </div>
	</div>
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo set_value('password'); ?>">
      </div>
    </div>
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="sex">Sex</label>
		<div class="col-sm-6">
		<input type="radio" class="" id="sex" name="sex" value="F" value="<?php echo set_value('sex'); ?>" /> Male
		<input type="radio" class="" id="sex" name="sex" value="M" value="<?php echo set_value('sex'); ?>" /> Female
	</div>
	</div>
		
	<div class="form-group">
    <label class="control-label col-sm-2" for="birthdate" id="birthdate" name="birthdate">Birthday</label>
    <div class="col-sm-2">
      
			
                <input type="date" class="form-control" placeholder="bday" id="birthdate" name="birthdate" value="<?php echo set_value('birthdate'); ?>">
				
        
			</div>
		</div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Save Changes</button>
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
		