<div class="carouselcontain container"> 
	
						
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
					
					
					
					<div class="carousel-inner item carmargin">
		
					 <div class="item active">
						<img src="<?php echo base_url('assets/images/s1.jpg'); ?>" alt="Rescued Pet 1" style="width:100%; height:auto;" >
					  </div>

					  <div class="item">
						<img src="<?php echo base_url('assets/images/s2.jpg'); ?>" alt="Rescued Pet 2" style="width:100%;height:auto;" >
					  </div>
					  
					  <div class="item">
						<img src="<?php echo base_url('assets/images/s3.jpg'); ?>" alt="Rescued Pet 3" style="width:100%; height: auto;" >
					  </div>
					  
					  <div class="item">
						<img src="<?php echo base_url('assets/images/s4.jpg'); ?>" alt="Rescued Pet 3" style="width:100%; height: auto;" >
					  </div>
					</div>

					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					  <span class="sr-only">Previous</span>
					  <span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					  <span class="sr-only">Next</span>
					  <span class="glyphicon glyphicon-chevron-right"></span>
					</a>

				  </div>
				  </div>
				  
				  
	<div class="form">
     <div class="form-content shadow">
	  <h3 class="text-center heading ">LOG IN</h3>
	   <?php echo validation_errors(); ?>
		 <form method="post">
					<div class="form-group text-center b">
						<span class="glyphicon glyphicon-user"></span> <label for="username"> USERNAME: </label>
						<input type="text" class="form-control" id="username" name="username"  />
					</div>
					<div class="form-group text-center b">
						 <span class="glyphicon glyphicon-lock"></span> <label for="password"> PASSWORD: </label>
						<input type="password" class="form-control" id="password" name="password"  />
						<h5 class="heading"><button type="submit" class="btn btn-muted col-xs-5 login" value="Login"><span class="glyphicon glyphicon-log-in"></span> LOG IN</h5></button>
</br>

			</form>	
			
			<form>
						<div class="margintop">
						<h5 class="heading"><a href="<?php echo base_url('peternity/register')?>" class="heading margintop"><span class="glyphicon "></span> Don't have an account yet? Sign up now!</a></h5>
						</div>
			</form>


		
					</div>
			
		
		
     
  </div>
  </div>
 <div class="container fixed-bg margintop"> 
 
		 <div class="container margintop">
			<h2 class="heading white" id="textmargin">-FEATURED PETS-</h2>
			 <?php
		foreach($petrescue as $d){
			echo'
			<div class="panel panel-default1 col-xs-5 re">
			
			  <img src="'.base_url($d['photo']).'" class="img img-responsive img-circle margintop marginbottom float" alt="featured pet 1" style="width: 100px; height:100px;"/>
			  <h4 class="heading margintop spacing"> '.$d['pet_nickname'].'</h4>
			  <h5 class="sm spacing">'.$d['bio'].'</h5>

			  </div>
			   
			
			
			  </div>
			  <div class="container">
			';
			  }
			?> 
			</div>

			<div class="panel panel-default1 col-sm-2 re text-center border marginbottom" style="margin-left: 700px;">
				<button class="btn-lg none" ><a href="" style="text-decoration: none;"><span><i class="fa fa-paw"></i></span> ADOPT A PET TODAY</a></button>

			  </div>
			
			  
		
			 
</div>

	<div class="container margintop">
		<div class="col-md-12 margintop">
			<div class="col-md-8 panel panel-default1 margintop">
					
					<h2 class="text-center heading"> " Peternity lets you adopt and create a new home for animals. Help out and build better lives for our pets. Browse our pet catalogue and FAQ's for more information and adopt today! <span><i class="fa fa-paw"></i></span> "</h2>
				
			</div>
			<div class="col-md-4">
			<div class="hotAirBalloonMovement">
			<div class="animatedBalloon">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>" style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri2">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri3">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri3">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri4">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri5">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri6">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri7">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri8">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri9">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri10">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri11">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri12">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri13">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri14">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/fishbone.png')?>"style="width: 50px; height: 50px;">
			</div>
			<div class="animatedBalloon meri15">
				<img alt="" class="horizontalMove" src="<?php echo base_url('assets/images/dogbone.png')?>"style="width: 50px; height: 50px;">
			</div>
		</div>
				<img src="<?php echo base_url('assets/images/cd.png')?>" class="img img-responsive margintop margintop" alt="catdog" />
			
			</div>
		
		</div>


</div>


  
  
  
  
 
  

     
  

	
	
			

	



