 <?php echo form_open('admin/addMessage'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/admin/addMessage"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div>
    <div class="form-group text-left">
	<h2 class="font text-center heading">MESSAGE</h2>

	<div class="form-group text-left">
		<label class="control-label" for="msg">Message: </label><?php echo form_error('msg', '<p class="text-danger">', '</p>'); ?>
		<textarea class="form-control" type="text" id="msg" name="msg" />
    </div>
	<div class="margin-left">
	<h5><button type="submit" class="btn btn-muted btn-sm " value="Submit"><span class="glyphicon glyphicon-ok-sign"></span>SUBMIT</h5></button>
	</div>
    
  </form>
 </div>
 </div>