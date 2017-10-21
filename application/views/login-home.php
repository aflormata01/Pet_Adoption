<div class="container-fluid">
	<div class="panel panel-default text-left col-xs-2 margintop sminfo usermarg" id="userin"><br />
		
	<?php
	foreach($usern as $d){
		echo'
		<img src="'.base_url($d['photo']).'" class="profilepic img-circle logpic " style="width: 35px ; height:35px" alt="profilepic">
		<h4 class="heading ">'.$d['fname'].' '.$d['lname'].'</h4>
		<br />
		<hr />
		<h6 class="heading "><span class="glyphicon glyphicon-user"></span> <a class="heading" href="'.base_url('user/profile/'.$d['username'].'').'">'.$d['username'].'</a></h6>
		<h6 class="heading "><span class="glyphicon glyphicon-envelope"></span> '.$d['email'].'</h6>
		<h6 class="heading "><i class="fa fa-birthday-cake"></i> '.$d['birthdate'].'</h6>
		<hr />
		<h6 class="heading "><span class="glyphicon glyphicon-list-alt"></span> <a href="" class="heading sm">My Stories</a></h6>
		<a href="'.base_url('user/addstories').'" data-toggle="modal" data-target="#myModal">
		<h6>
		<button class="btn btn-muted sm" type="button" id="addButton"><span class="glyphicon glyphicon-plus"> </span>Add Story</button></a>
		</h6>
		
	';
	}
	
	?>
	</div>
	<div class="col-sm-6">
	<div class="panel panel-default margintop col-sm-12">
		
	<h2 class="text-center heading">STORIES</h2>
	
		<div class="text-center">
			
			<div id="table">
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="stories">
	<?php	
	// foreach($user_stories as $d){ 
		// $liked=0;
		// echo'
		// <div class="margintop marginbottom">
		// <img src="'.base_url($d['file_name']).'" style="width: 500px; height: 450px;" class="picstory img-responsive"/>
		// <h4 class="heading sm picstory text-warning">posted by <a href="'.base_url('user/profile/'.$d['username'].'').'">'.$d['username'].'</a><br />'. $d['title'].'</h4>
		// <h4 class="sm">';
		// if($liked_stories>0){
		// foreach($liked_stories as $l){
		// if($l['story#']==$d['story#'])
		// $liked++;
		// }
		// }
		// if($liked==1){
		// echo'
		// <button class="picstory heart  heading like" id="unlike_'.$d['story#'].'" style="color: orange;">
		// <span class="glyphicon glyphicon-heart-empty" ></span> LIKE</h4></button>';
	
		// }
		// else
		// {	
		// echo '
		// <button class="picstory heart  heading like" style="text-decoration: none;" id="like_'.$d['story#'].'">
		// <span class="glyphicon glyphicon-heart-empty" ></span> LIKE</h4></button>';
		// }
		
		// echo'
		// </div>
		// <hr />';
	// }
	
?>
	
	</div>
	</div>

</div>
	<script>
	 $(document).ready(function(){
            $.ajax({
                url: "<?php echo base_url('user/addstorylikes'); ?>",
                
                success: function(data){
                    $('#stories').html(data);
                }
            });
        });
	</script>

	