 <?php echo form_open('admin/updateFaqs/'.$faqs['faqs_no'].''); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Pet_Adoption/admin/updateFaqs/'.$faqs['faqs_no'].'"?>
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  
  <div class="modal-body">
  <div>
    <div class="form-group text-left">
	<h2 class="font text-center heading">UPDATE FAQS</h2>

	<div class="form-group text-left">
		<label class="control-label" for="body">Body: </label>
		<input class="form-control" type="text" id="body" name="body" value="<?php echo $faqs['body']; ?>"/>
    </div>
	<div class="margin-left">
	<h5><button type="submit" class="btn btn-muted btn-sm " value="Submit"><span class="glyphicon glyphicon-ok-sign"></span>Save Changes</h5></button>
	</div>
		
  </form>
 </div>
 </div>