<?php echo form_open_multipart('user/adduserstories'); //this is equal to <form role="form" method="post" enctype="multipart/form-data" accept-charset="utf-8" action="http://localhost/Pet_Adoption/user/adduserstories"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div >
    <div class="form-group text-left">
	<h2 class="heading text-center ">ADD STORY</h2>
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
		<label class="control-label" for="title">Caption: </label>
		<input class="form-control" type="text" id="title" name="title" type="text"/>
    </div>
	
	<div class="margin-left">
	<h5><button type="submit" class="btn btn-muted btn-sm "><span class="glyphicon glyphicon-ok-sign"></span>POST</h5></button>
	</div>
    </form>
    </form>
  
 </div>
 </div>