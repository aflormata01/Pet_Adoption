<div class=" container">
  <div class="container">
	<img src="<?php echo base_url('assets/images/pets.png'); ?>" class="img-responsive" style="width:100% ; height:200px" alt="logoform">
  </div>
   <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2 margin" for="oname">Owner Name: </label>
      <div class="col-sm-4">
        <input type="oname" class="form-control" id="oname" placeholder="Enter your name" name="oname">
      </div>
	  </div>
	  
	  <div class="form-group">
		<label class="control-label col-sm-2 margin" for="pet">Pet Type:</label>
		<div class="col-sm-6">
		<input type="radio" class="" id="pet" name="pet" value="D"> Dog <br /></input>
		<input type="radio" class="" id="pet" name="pet" value="C"> Cat <br /></input>
		<input type="radio" class="" id="pet" name="pet" value="C"> Bird <br /></input>
		<input type="radio" class="" id="pet" name="pet" value="C"> Fish <br /></input>
		<input type="radio" class="" id="pet" name="pet" value="C"> Other <br /></input>
		<div class="col-xs-4">
		<input type="other" class="form-control" id="other" placeholder="Others" name="other">
	
	</div>
	</div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2 margin" for="pname">Pet Name:</label>
      <div class="col-sm-4">
        <input type="pname" class="form-control" id="pname" placeholder="Enter pet name" name="pname">
      </div>
	  </div>
	
	  <div class="form-group">
      <label class="control-label col-xs-2 margin" for="height">Pet Height & Weight: </label>
      <div class="col-xs-2">
        <input type="height" class="form-control" id="height" placeholder="Enter pet height" name="height">
	  </div>
      <div class="col-xs-2">
        <input type="weight" class="form-control" id="weight" placeholder="Enter pet weight" name="weight">
      </div>
	  </div>
	 </form><br/><br/>
	 
	 <div class="text-center">
      <h4 class=" text-center" >Pet Adopter's Oath <br /></h4>
	  <p class="text-center ">I hereby swear to take good care of my pet. To feed them, play with them, and take care of their needs.<p>
	  </div>
	  
	 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox text-center margin">
          <label><input type="checkbox" name="remember">I agree to the adopter's oath.</label>
        </div>
      </div>
    </div><br/><br/>
	
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 text-center margin">
        <button type="submit" class="btn btn-default margin text-center"><span class="glyphicon glyphicon-heart">ADOPT</span></button>
      </div>
    </div>
  </div>
