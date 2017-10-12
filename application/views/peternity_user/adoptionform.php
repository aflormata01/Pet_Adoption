
 <?php echo form_open('user/adopt'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/addstories"?>
   <div class="col-md-12">
         <div class="panel " style="width: 500px; height: 650px; float: center;">
            <div class="panel-heading">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="form-group petpic">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<img src="<?php echo base_url('assets/images/bugsy.jpg'); ?>" class="img-responsive img-circle" style="width: 200px; height:200px; margin-left:110px;" alt="profilepic">
		<br/>
		</div>
		</div>
     
 
 <div class="">
  <div class="col-sm-12">	
	 <label class="control-label col-sm-6 margin text-center" for="contactno">Contact Number: </label>
   <div class="col-sm-12">	
        <input type="text" class="form-control" id="contactno" placeholder="Enter contact number" name="contactno">
  
	  <br/>
	  <br/>
  </div>
  </div>
  </div>
  
  <div class="col-sm-12">	
	 <label class="control-label col-sm-6 margin text-center" for="address">Address: </label>
     <div class="col-sm-12">	
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
      
	  <br/>
	  <br/>
  </div>
  </div>
  <br/>
  <br/>
 
	
	 <div class="text-center">
      <h4 class=" font text-center" >Pet Adopter's Oath <br /></h4>
	  <p class="text-center ">I hereby swear to take good care of my pet. To feed them, play with them, and take care of their needs.<p>
	  </div>
	  
	 <div class="form-group">        
      <div class="col-sm-12">
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
  </div> </div>  </div>