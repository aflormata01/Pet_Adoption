<div class="container margintop">   

        <div class=" imgmarg col-sm-8">
			<div class="">
				<img src="<?php echo base_url('assets/images/123.jpg'); ?>" class="profilepic img-circle " style="width: 200px ; height:200px" alt="profilepic">
					<div class="col-sm-8 text-center">
						<h1 class=""><?php echo $profile[0]['fname']; ?><?php echo $profile[0]['lname']; ?></h1>
						<h4 class="font "><span class="glyphicon glyphicon-user"></span> <?php echo $profile[0]['username']; ?></h4>
						<h4 class="font "><span class="glyphicon glyphicon-envelope"></span> <?php echo $profile[0]['email']; ?></h4>
						<h4 class="font "><span class="glyphicon glyphicon-baby-formula"></span><?php echo $profile[0]['birthdate']; ?></h4>
						<h4 class="font "><i class="fi-male-female"></i><?php echo $profile[0]['sex']; ?></h4>
					</div>
			</div>
		</div>
	
		<div class="row">
		<div class="col-sm-4">
			<div class="panel">
				<div class="thumb panel-heading">
					<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-responsive" style="width:400px ; height:300px" alt="PET1">
					 <div class="overlay">
						<div class="text">Pet 1</div>
					 </div>
				</div>
			</div>
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="panel">
				<div class="thumb panel-heading">
					<img src="<?php echo base_url('assets/images/bunny.jpg'); ?>" class="img-responsive" style="width:400px ; height:300px" alt="PET2">
					 <div class="overlay">
						<div class="text">Pet 2</div>
					 </div>
				</div>
			</div>
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="panel">
				<div class="thumb panel-heading">
					<img src="<?php echo base_url('assets/images/r10.jpg'); ?>" class="img-responsive" style="width:400px ; height:300px" alt="PET3">
					 <div class="overlay">
						<div class="text">Pet 3</div>
					 </div>
				</div>
			</div>
		</div>
    

</div>
 
	
	