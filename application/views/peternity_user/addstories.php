
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div >
    <div class="form-group text-left">
	<h2 class="heading text-center ">ADD STORY</h2>
	<div class="form-group text-left">
		<label class="control-label" for="">Attach an image: </label>
		
		<?php echo $error;?>
		<?php echo form_open_multipart('user/upload');?>
		<input type="file" name="userfile" />
		<input type="submit" class="text-center" id="files-upload" name="submit" value="upload">
		</form>
    </div>
		<label class="control-label" for="cname">Title: </label><?php echo form_error('title', '<p class="text-danger">', '</p>'); ?>
		<input class="form-control" type="text" id="title" name="title" type="text" value="<?php echo set_value('title'); ?>"/>
    </div>
	<div class="form-group text-left">
		<label class="control-label" for="cname">Body: </label><?php echo form_error('body', '<p class="text-danger">', '</p>'); ?>
		<textarea class="form-control" type="text" id="body" name="body" value="<?php echo set_value('body'); ?>"/>
    </div>
	<div class="margin-left">
	<h5><button type="submit" class="btn btn-muted btn-sm "><span class="glyphicon glyphicon-ok-sign"></span>SUBMIT</h5></button>
	</div>
    
  
 </div>
 </div>