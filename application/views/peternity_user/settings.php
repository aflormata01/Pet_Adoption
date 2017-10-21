<div class="container">
    <div class="row profile col-md-12"><br/>
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					
				<img src="<?php echo base_url($set[0]['photo']);?>" class="img-responsive img-circle" alt="profilepic" name="photo" id="photo">
				<label>Change your profile picture : </label>
				
			<?php echo form_open_multipart('user/setting/'.$user.''); //this is equal to <form role="form" method="post" enctype="multipart/form-data" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/profile_pic"?>
				<input class="text-center" id="file" name="file" type="file" />
				</div>

				<div class="profile-usertitle">
					<div class="profile-usertitle-name text-center">
					<h2>	<?php echo $set[0]['fname'] ?> <?php echo $set[0]['lname'] ?> </h2>
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
  <?php echo validation_errors(); ?>
 
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First Name: </label>
      <div class="col-sm-4">
        <input type="fname" class="form-control" id="fname" name="fname" value="<?php echo $d['fname'];?>">
      </div>
	  </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name:</label>
      <div class="col-sm-4">
        <input type="lname" class="form-control" id="lname" name="lname" value="<?php echo $d['lname'];?>">
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $d['email'];?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="username">User Name:</label>
      <div class="col-sm-4">
        <input type="uname" class="form-control" id="username" name="username" value="<?php echo $d['username'];?>">
      </div>
	</div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="username">Password:</label>
      <div class="col-sm-4">
        <a  href="<?php echo base_url('user/changepass')?>" class="heading">Change Password</a>
      </div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="sex">Sex</label>
		<div class="col-sm-6">
		<input type="radio" class="" id="sex" name="sex" value="Female" value="Male" /> Male
		<input type="radio" class="" id="sex" name="sex" value="Male" value="Female" /> Female
	</div>
	</div>
		
	<div class="form-group">
    <label class="control-label col-sm-2" for="birthdate" id="birthdate" name="birthdate">Birthday</label>
    <div class="col-sm-2">
      
			
                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo $d['birthdate']; ?>">
				
        
			</div>
		</div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Submit">Save Changes</button>
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
	