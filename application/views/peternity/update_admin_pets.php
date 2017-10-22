<?php echo form_open_multipart('admin/updatePets/'.$pets['petID'].''); //this is equal to <form role="form" method="post" enctype="multipart/form-data" accept-charset="utf-8" action="http://localhost/Pet_Adoption/admin/updatePets/'.$pets['petID'].'"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div >
    <div class="form-group text-left">
	<h2 class="heading text-center ">UPDATE PETS</h2>
	<div class="form-group text-left">
	<div class="img"><img src="<?php echo base_url($pets['photo']);?>" alt="img" class="img-circle imagespin img-responsive"></div>
		<label class="control-label" for="">Attach an image: </label>
		<?php
              if( isset($errors) ){
                    echo $errors;
              }
        ?>
		<span enctype="multipart/form-data"> </span>
		<input type="file" name="file" id="file" />
		
    </div>
		<label class="control-label" for="pet_nickname">Pet Nickname: </label>
		<input class="form-control" type="text" id="pet_nickname" name="pet_nickname" type="text" value="<?php echo $pets['pet_nickname']; ?>" />
    </div>
	<div class="form-group text-left">
		<label class="control-label" for="date_rescued">Date Rescued: </label>
		<input class="form-control" type="text" id="date_rescued" name="date_rescued" value="<?php echo $pets['date_rescued']; ?>" />
    </div>
	<div class="form-group text-left">
		<label class="control-label" for="date_rescued">Availability: </label>
		<input class="form-control" type="text" id="availability" name="availability" value="<?php echo $pets['availability']; ?>" />
    </div>
	<div class="margin-left">
	
	<h5><button type="submit" class="btn btn-muted btn-sm "><span class="glyphicon glyphicon-ok-sign"></span>SUBMIT</h5></button>
	</div>
    </form>
    </form>
  
 </div>
 </div>