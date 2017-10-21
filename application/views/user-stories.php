<?php	
	foreach($user_stories as $d){ 
		$liked=0;
		echo'
		
		<div class="panel panel-default marginbottom col-sm-12">
		<div class="storypic" style="background-image: url('.base_url($d['file_name']).');"/>
		<div class="capt"><span class="u_story"><a class="story" href="'.base_url('user/profile/'.$d['username'].'').'">'.$d['username'].'</a></span>
		<span class="storycapt">'. $d['title'].'</span></div>
		<div class="likebtn">';
		if($liked_stories>0){
		foreach($liked_stories as $l){
		if($l['story#']==$d['story#'])
		$liked++;
		}
		}
		if($liked==1){
		echo'
		<button class=" like" id="unlike_'.$d['story#'].'" style="color: orange;">
		<span class="glyphicon glyphicon-heart-empty" ></span> LIKE</h4></button>';
	
		}
		else
		{	
		echo '
		<button class=" like" style="text-decoration: none;" id="like_'.$d['story#'].'">
		<span class="glyphicon glyphicon-heart-empty" ></span> LIKE</h4></button>';
		}
		
		echo'
		
		</div>
		</div>
		';
	}
	
?>

<script>
	$(document).ready(function(){

    // like and unlike click
    $(".like").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid

        // Finding click type
        var type = 0;
        if(text == "like"){
            type = 1;
        }else{
            type = 0;
        }

        // AJAX Request
        $.ajax({
			
            url: "<?php echo base_url('user/addstorylikes'); ?>",
            type: "POST",
            data: 
			{post:postid,del:type},
            success: function(data){
                // var likes = data['likes'];
                // var unlikes = data['unlikes'];

                // $("#likes_"+postid).text(likes);        // setting likes
                // $("#unlikes_"+postid).text(unlikes);    // setting unlikes

                if(type == 1){
                    $("#like_"+postid).css("color","#ffa449");
					$('#stories').html(data);
                    // $("#unlike_"+postid).css("color","lightseagreen");
					
                }

                if(type == 0){
                    $("#unlike_"+postid).css("color","#000000");
					$('#stories').html(data);
                    // $("#like_"+postid).css("color","lightseagreen");
                }


            }
            
			});

		});

	});
		
	</script>