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
		<div class="dropdown1 floater">
							<button class="none floater dropbtn1"><span><i class="fa fa-ellipsis-h"></i></span></button>
								<div class="dropdown-content1">
									<a class="heading sm" <a href="'.base_url('user/delDisc_comments/'.$c['discuss#']).'" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span>Delete</a>
								</div>
					</div>
		<img src="" class="img img-responsive img-circle float" alt="featured pet 1" style="width: 50px; height:50px;"/>
			<h5 class="text-left smspace heading">'.$c['username'].'</h5>	
			<h6 class="text-left smspace ver sm ">'.$c['comment'].'</h6>	
		</div>';
		}
?>

<script type = "text/javascript">

function getConfirm(l)
{
  if(arguments[0] != null)
  {
    if(window.confirm('Are you sure you want to delete?\n'))
    {
      location.href = l;
    }
    
    else
    {
      event.cancelBubble = true;
      event.returnValue = false;
      return false;
    }
  }
  
  else
  {
    return false;
  }
  return;
}
</script>	

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