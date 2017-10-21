	<div class="panel panel-heading panel-default1 ">
			 <div class="input-group">
				   <div class="input-group-addon iga1">
					<span class="glyphicon glyphicon-comment"></span>
				   </div>
					<input type="text" class="form-control sm" placeholder="Write a comment..." name="comm" id="comm">
					<div class="input-group-addon iga1">
					<button style="width: 35px; height: 20px;" id="comment"><span class="glyphicon glyphicon-ok-sign"></span></button>
				   </div>                        
			 </div>
		</div>

		
<?php 
	foreach($comments as $c){
		
		echo '
		<div class="panel panel-heading panel-default">
		<img src="" class="img img-responsive img-circle float" alt="featured pet 1" style="width: 50px; height:50px;"/>
			<h5 class="text-left smspace heading">'.$c['username'].'</h5>	
			<h6 class="text-left smspace ver sm ">'.$c['comment'].'</h6>	
		</div>';
		}
?>

<script>
	$(document).ready(function(){

    // like and unlike click
    $('#comment').click(function(){

        // Finding click type
		var textcom = $("#comm").val();
        // AJAX Request
        $.ajax({
			
            url: "<?php echo base_url('user/addcomments/'.$disc.''); ?>",
            type: "POST",
            data: "comment="+textcom,
            success: function(data)
			{
					$('#comment').css("color","#ccffea");
					$('#comments').html(data);
                    // $("#like_"+postid).css("color","lightseagreen");
                


            }
            
			});

		});

	});
		
	</script>