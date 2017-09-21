<div class="container">
  <div class="container">
  <h2>Sign up form</h2>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First Name: </label>
      <div class="col-sm-4">
        <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname">
      </div>
	  </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name:</label>
      <div class="col-sm-4">
        <input type="lname" class="form-control" id="lname" placeholder="Enter last name" name="lname">
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="mname">User Name:</label>
      <div class="col-sm-4">
        <input type="uname" class="form-control" id="uname" placeholder="Enter user name" name="uname">
      </div>
	</div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="sex">Sex</label>
		<div class="col-sm-6">
		<input type="radio" class="" id="sex" name="sex" value="M" /> Male
		<input type="radio" class="" id="sex" name="sex" value="F" /> Female
	</div>
	</div>
		
	<div class="form-group">
    <label class="control-label col-sm-2" for="birthday">Birthday</label>
    <div class="col-sm-2">
      
			<div class="form-group">
                <input type="text" class="form-control" placeholder="year"/>
				</div>
           <div class="form-group">
                <input type="text" class="form-control" placeholder="month"/>
				</div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="day"/>
				</div>
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
  </form>
</div>