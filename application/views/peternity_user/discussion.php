<?php
		foreach($user_discussion as $d){ 
		$rated=0;
		echo'
		
						<h4 class="text-left heading">'.$d['Title'].'</h4>
			
						<h6 class="sm">posted by '.$d['username'].' |<i> '.date("F j, Y, g:i a", strtotime($d['date'])).'</i></h6>
						<p class="sm"><a href="'.base_url('user/discbody/'.$d['discuss#'].'').'" class="sm">'.$d['body'].'</a></p>

					<div class="btn-group text-right ">';
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
						<button class="rate" id="down_'.$d['discuss#'].'"><i class="fa fa-thumbs-o-down"></i></button>';
					}
					else
					{
						echo '
						<button class="rate" id="up_'.$d['discuss#'].'"  ><i class="fa fa-thumbs-o-up"></i></button>&nbsp;
						<button class="rate del" id="down_'.$d['discuss#'].'"  style="color:orange;"><i class="fa fa-thumbs-o-down"></i></button>';
					}	
		}		
		else
		{
			echo '
			<button class="rate" id="up_'.$d['discuss#'].'"><i class="fa fa-thumbs-o-up"></i></button>&nbsp;
			<button class="rate" id="down_'.$d['discuss#'].'"><i class="fa fa-thumbs-o-down"></i></button>';
		}
		echo '</div>
					<div class="dropdown1 floater">
							<button class="none floater dropbtn1"><span><i class="fa fa-ellipsis-h"></i></span></button>
								<div class="dropdown-content1">
									<a class="heading sm" <a href="'.base_url('user/delDiscussion/'.$d['discuss#']).'" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span>Delete</a>
								</div>
								<hr />
					</div>
					
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
            success: function(){
                // var likes = data['likes'];
                // var unlikes = data['unlikes'];

                // $("#likes_"+postid).text(likes);        // setting likes
                // $("#unlikes_"+postid).text(unlikes);    // setting unlikes
				
                if(type == 1){
					
					$("#up_"+postid).css("color","orange");
					$("#up_"+postid).css("color","#00000");
                    $("#down_"+postid).css("color","#000000");
					$('#discussions').html(data);
                }
				if(type == 2){
					
                    $("#down_"+postid).css("color","orange");
                    $("#up_"+postid).css("color","#000000");
					$('#discussions').html(data);
					
                }
				
			
            }
            
			});
		
		});

	});
		
	</script>