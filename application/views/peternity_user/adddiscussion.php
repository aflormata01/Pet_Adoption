 <?php echo form_open('user/addDiscussion'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/addDiscussion"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div>
    <div class="form-group text-left">
	<h2 class="font text-center heading">ADD DISCUSSION</h2>
	
	<div class="form-group text-left">
		<label class="control-label" for="">Attach an image: </label>
		<?php
              if( isset($errors) ){
                    echo $errors;
              }
        ?>
		<span enctype="multipart/form-data"> </span>
		<input type="file" name="file" id="file" />
		
    </div>

		<label class="control-label" for="body">Topics: </label>
		<select class="form-control" type="text">
			<option>Pet Grooming</option>
			<option>Pet Vaccinations and Recommended Medicine</option>
			<option>Restrictions when taking care of pets</option>
			<option>Pet Care Tips </option>
			<option>All about dogs </option>
			<option>Cat Forum </option>
			<option>Caring for reptiles and amphibians</option>
		</select>
    <div class="form-group text-left">
		<label class="control-label" for="title">Title: </label><?php echo form_error('title', '<p class="text-danger">', '</p>'); ?>
		<input class="form-control" type="text" id="title" name="title" type="text" value="<?php echo set_value('title'); ?>"/>
    </div>
	<div class="form-group text-left">
		<label class="control-label" for="body">Body: </label><?php echo form_error('body', '<p class="text-danger">', '</p>'); ?>
		<textarea class="form-control" type="text" id="body" name="body" value="<?php echo set_value('body'); ?>"/>
    </div>
	<div class="margin-left">
	<h5><button type="submit" class="btn btn-muted btn-sm " value="Submit"><span class="glyphicon glyphicon-ok-sign"></span>SUBMIT</h5></button>
	</div>
    
  </form>
 </div>
 </div>