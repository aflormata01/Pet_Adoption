<div class="container-fluid">   
<div class="container margintop">   

        <div class=" imgmarg col-sm-8 ">
			<div class="col-sm-10 text-center ">
				
					
						
						<?php
							
							foreach($profile as $p){ 
							echo '
							<div class="col-sm-12 text-left panel-default1" style="margin:20px; border-radius: 30px;">
								<img src="'.base_url($p['photo']).' ?>" class="profilepic img-circle border" style="width: 200px ; height:200px; float:left;" alt="profilepic">&nbsp;
									<div style="margin-left: 220px;">
										<h1 class="">'.$p['fname'].' '.$p['lname'].'</h1>
										<h4 class="heading "><span class="glyphicon glyphicon-user"></span> '.$p['username'].' </h4>
										<h4 class="heading "><span class="glyphicon glyphicon-envelope"></span> '.$p['email'].'</h4>
										<h4 class="heading "><i class="fa fa-birthday-cake"></i></span> '.$p['birthdate'].'</h4>
										<h4 class="heading "><i class="fa fa-male"></i> | <i class="fa fa-female"></i> '.$p['sex'].'</h4> 	
									</div>
							</div>
			</div>' ;
					
						}
						
						?>
		</div>




		<div class="container" style="margin-left: 25px;">
<?php foreach($user_stories as $d){ 
				echo'
				
				<div class="panel panel-default marginbottom col-sm-4 " style="float:left; width:300px; height:300px; margin-right: 80px;">

					<div class="storypic margintop" style="background-image: url('.base_url($d['file_name']).'); height: 200px;"></div>
							<div class="dropdown1 floater">
							<button class="none floater dropbtn1"><span><i class="fa fa-ellipsis-h"></i></span></button>
								<div class="dropdown-content1">
									<a class="heading sm" <a href="'.base_url('user/delStories/'.$d['story#']).'" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span>Delete</a>
								</div>
					
							</div>
					<div class="heading">'.$d['title'].'</div>';
				$likescnt=0;
				foreach($likes as $f){
					if($f['story#'] == $d['story#'])
					$likescnt++;
				}
				if($likescnt>0){
					echo '
					<div class="heading" style="float: left; margin-top: 500px;"><span class="glyphicon glyphicon-heart-empty" ></span>
					</div>
					';
					
				}
				echo '
				</div>
				';
				
}
?>
		
		
		
			
			
			
			
			
		</div>
		
		
</div>
</div>
</div>




			

	

	
	