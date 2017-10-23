<?php
		foreach($user_discussion as $d){ 
		$rated=0;
		echo'
		
						<h4 class="text-left heading"><strong><a href="'.base_url('user/discbody/'.$d['discuss#'].'').'" class="sm">'.$d['Title'].'</a></strong></h4>
			
						<h6 class="sm">posted by <a class="heading" href="'.base_url('user/profile/'.$d['username'].'').'"><strong>'.$d['username'].'</strong></a> |<i> '.date("F j, Y, g:i a", strtotime($d['date'])).'</i></h6>
						<p class="sm">'.$d['body'].'</p>

					<div class="btn-group text-right ">';
		$upvotes = 0;
		foreach($up as $p){
			if($p['discuss#']==$d['discuss#'])
				$upvotes++;
		}
		if($upvotes>0)
			echo '<span><font color="green">'.$upvotes.'</font></span>';
		if($ratedd>0){
		foreach($ratedd as $l){
			if($l['discuss#']==$d['discuss#']){
			$rated++;
			$rate=$l['rate'];
			}
		}
		}
		
		if($rated>0)
		{				
					if($rate=='1')
					{
						echo '
						<button class="rate" id="up_'.$d['discuss#'].'"  style="color:orange;" ><i class="fa fa-thumbs-o-up"></i></button>&nbsp;
						<button class="rate" id="down_'.$d['discuss#'].'"  style="color:black;"><i class="fa fa-thumbs-o-down"></i></button>';
					}
					else
					{
						echo '
						<button class="rate" id="up_'.$d['discuss#'].'"   style="color:black;"><i class="fa fa-thumbs-o-up"></i></button>&nbsp;
						<button class="rate del" id="down_'.$d['discuss#'].'"  style="color:orange;"><i class="fa fa-thumbs-o-down"></i></button>';
					}	
		}		
		else
		{
			echo '
			<button class="rate" id="up_'.$d['discuss#'].'" style="color:black;"><i class="fa fa-thumbs-o-up"></i></button>&nbsp;
			<button class="rate" id="down_'.$d['discuss#'].'" style="color:black;"><i class="fa fa-thumbs-o-down"></i></button>';
		}
		
		$dnvotes = 0;
		foreach($down as $p){
			if($p['discuss#']==$d['discuss#'])
				$dnvotes++;
		}
		if($dnvotes>0)
			echo '<span><font color="red">'.$dnvotes.'</font></span>';
		echo '</div>';
		if($d['username']==$user){
			echo '
					<div class="dropdown1 floater">
							<button class="none floater dropbtn1"><span><i class="fa fa-ellipsis-h"></i></span></button>
								<div class="dropdown-content1">
									<a class="heading sm" <a href="'.base_url('user/delDiscussion/'.$d['discuss#']).'" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span>Delete</a>
								</div>
								<hr />
					</div>';
		}			
		echo '
					</div>
					<hr />
		

		';
		}
				
		?>

<script>
	$(document).ready(function(){
    // like and unlike click
    $(".rate").click(function(){
		
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid

        // Finding click type
        var type = 0;
        if(text == "up"){
            type = 1;
        }
		else if(text == "down"){
            type = 2;
        }
		
		
        // AJAX Request
        $.ajax({
			
            url: "<?php echo base_url('user/rateDiscuss'); ?>",
            type: "POST",
            data: 
			{post:postid,rate:type},
            success: function(data){
				var del = data['del'];
				if(type == 1){
			
					
					
					if ($("#up_"+postid).css('color') == 'rgb(0, 0, 0)')
					$("#up_"+postid).css("color","orange");
				
					else
					$("#up_"+postid).css("color","#000000");
				
                    $("#down_"+postid).css("color","#000000");
					$('#discussions').html();
                }
				else if(type == 2){
					if ($("#down_"+postid).css('color') == 'rgb(0, 0, 0)')
                    $("#down_"+postid).css("color","orange");
					else
					$("#down_"+postid).css("color","#000000");
                    $("#up_"+postid).css("color","#000000");
					$('#discussions').html();
					
                }
                // var unlikes = data['unlikes'];
                // var unlikes = data['unlikes'];

                // $("#likes_"+postid).text(likes);        // setting likes
                // $("#unlikes_"+postid).text(unlikes);    // setting unlikes
            }
            
			});
			
		});

	});
	
	</script>
<script>

			setInterval(function(){
				  $('#discussions').reload('discussion.php');
			 },1000);
</script>