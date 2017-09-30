
 <?php echo form_open('peternity/adopt'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/peternity/adopt"?>
 <div class=" container">
  <div class="container">
	<img src="<?php echo base_url('assets/images/pets.png'); ?>" class="img-responsive" style="width:100% ; height:200px" alt="logoform">
  </div>
   
	<div class="container">
    <div class="form-group petpic">
	<div class="col-sm-4">
		<div class="col-sm-12 ">
			<img src="<?php echo base_url('assets/images/bugsy.jpg'); ?>" class="img-thumbnail" style="width: 400px; height:300px" alt="profilepic">
		</div>
     
     </div>
     </div>
	 
	 <div class="container">
     <div class="form-group">
	 <div class="col-sm-8">
	<div class="col-sm-12">	
	<div class="col-sm-12">	
	 <label class="control-label col-sm-4 margin" for="username">Owner Name: </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="username" placeholder="Enter your name" name="username">
      </div>
	  <br/>
	  <br/>
  </div>
  
  <div class="col-sm-12">	
	 <label class="control-label col-sm-4 margin" for="contactno">Contact Number: </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="contactno" placeholder="Enter contact number" name="contactno">
      </div>
	  <br/>
	  <br/>
  </div>
  
  <div class="col-sm-12">	
	 <label class="control-label col-sm-4 margin" for="address">Address: </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
      </div>
	  <br/>
	  <br/>
  </div>
  <br/>
  <br/>
 
	
	 <div class="text-center">
      <h4 class=" font text-center" >Pet Adopter's Oath <br /></h4>
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
        <button type="submit" class="btn btn-default margin text-center" value="Submit"><span class="glyphicon glyphicon-heart">ADOPT</span></button>
      </div>
    </div>
  </div>

	  </div>
	  </div>
	  </div>
	  </div>
	  </div>
	
