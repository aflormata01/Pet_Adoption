<div class="container-fluid">
<div class="container col-md-6 cent">
<?php 
echo'

	<div class="panel margintop panel-heading panel-default">
		<div class="margintop">
			<h2 class="heading text-center">'.$discuss[0]['Title'].'</h2>
			<h3 class="heading text-center sm" id="username">posted by '.$discuss[0]['username'].' | '.date("F j, Y, g:i a", strtotime($discuss[0]['date'])).'</h3>		
		</div>
		<h3 class="heading text-center sm">'.$discuss[0]['body'].'</h3>';

?>	
	<div class=" margintop">
		<h2 class="heading text-center"></h2>
		<h3 class="heading text- sm">COMMENTS: </h3>		
	</div>
	<div id="comments">
	
	</div>
	
	</div>
	
</div>

</div>
</div>
<script>
	 $(document).ready(function(){
            $.ajax({
                url: "<?php echo base_url('user/addcomments/'.$disc.''); ?>",
                
                success: function(data){
                    $('#comments').html(data);
                }
            });
        });
	</script>