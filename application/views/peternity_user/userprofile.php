`
<div class="container margintop">   

        <div class=" imgmarg col-sm-8 ">
			<div class="col-sm-10 text-center ">
				
					<div class="col-sm-8">
						
						<?php
							
							foreach($profile as $p){ 
							echo '
							<img src="'.base_url($p['photo']).' ?>" class="profilepic img-circle " style="width: 200px ; height:200px" alt="profilepic">
							</div>
							<div class="col-sm-12">
							<div class="text-left border" style="float: right;">
							<h1 class="">'.$p['fname'].' '.$p['lname'].'</h1>
				
							<h4 class="heading "><span class="glyphicon glyphicon-user"></span> '.$p['username'].' </h4>
							<h4 class="heading "><span class="glyphicon glyphicon-envelope"></span> '.$p['email'].'</h4>
							<h4 class="heading "><i class="fa fa-birthday-cake"></i></span> '.$p['birthdate'].'</h4>
							<h4 class="heading "><i class="fa fa-male"></i> | <i class="fa fa-female"></i> '.$p['sex'].'</h4> 	</div>' ;
					
						}
						
						?>
						</div>
					</div>
			</div>
		</div>
	
		<div class="row">
		<div class="col-sm-4">
			<div class="panel">
				<div class="thumb panel-heading">
					<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-responsive" style="width:400px ; height:300px" alt="PET1">
					
				</div>
			</div>
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="panel">
				<div class="thumb panel-heading">
					<img src="<?php echo base_url('assets/images/bunny.jpg'); ?>" class="img-responsive" style="width:400px ; height:300px" alt="PET2">
					 
				</div>
			</div>
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="panel">
				<div class="thumb panel-heading">
					<img src="<?php echo base_url('assets/images/r10.jpg'); ?>" class="img-responsive" style="width:400px ; height:300px" alt="PET3">
					 
				</div>
			</div>
		</div>
    

</div>
 
	
	