
<div class="container margintop">   

        <div class=" imgmarg col-sm-8">
			<div class="">
				
					<div class="col-sm-8 text-center ">
					<?php
						
						foreach($profile as $p){ 
						echo '
						<img src="'.base_url($p['photo']).' ?>" class="profilepic img-circle " style="width: 200px ; height:200px" alt="profilepic">
						<h1 class="">'.$p['fname'].' '.$p['lname'].'</h1>
					<div class="col-sm-8 picstory text-left ">
						<h4 class="heading "><span class="glyphicon glyphicon-user"></span> '.$p['username'].' </h4>
						<h4 class="heading "><span class="glyphicon glyphicon-envelope"></span> '.$p['email'].'</h4>
						<h4 class="heading "><span class="glyphicon glyphicon-baby-formula"></span> '.$p['birthdate'].'</h4>
						<h4 class="heading "><i class="fi-male-female"></i>'.$p['sex'].'</h4> 	</div>' ;
				
					}
					
					?>
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
 
	
	