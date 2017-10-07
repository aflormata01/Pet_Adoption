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
						<img src="<?php echo base_url('assets/images/slide1.jpg'); ?>" alt="Rescued Pet 1" style="width:100%; height:auto;" >
					  </div>

					  <div class="item">
						<img src="<?php echo base_url('assets/images/slide2.jpg'); ?>" alt="Rescued Pet 2" style="width:100%;height:auto;" >
					  </div>
					  
					  <div class="item">
						<img src="<?php echo base_url('assets/images/slide3.jpg'); ?>" alt="Rescued Pet 3" style="width:100%; height: auto;" >
					  </div>
					  
					  <div class="item">
						<img src="<?php echo base_url('assets/images/slide4.jpg'); ?>" alt="Rescued Pet 3" style="width:100%; height: auto;" >
					  </div>
					</div>

					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					  <span class="sr-only">Next</span>
					</a>

				  </div>
				  </div>
				  
				  
	<div class="form">
     <div class="form-content shadow">
	  <h3 class="text-warning text-center b u">LOG IN</h3>
		 <form method="post">
					<div class="form-group text-center b">
						<span class="glyphicon glyphicon-user"></span> <label for="username"> USERNAME: </label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username" />
					</div>
					<div class="form-group text-center b">
						 <span class="glyphicon glyphicon-lock"></span> <label for="password"> PASSWORD: </label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
						<h5><button type="submit" class="btn btn-muted col-sm-5 login" value="Login"><span class="glyphicon glyphicon-log-in"></span> LOG IN</h5></button>
						<a href="<?php echo base_url('peternity/signup')?>" data-toggle="modal" data-target="#myModal">
						<button class="btn btn-muted col-sm-5 login margintop b"><span class="glyphicon glyphicon-edit"></span> SIGN UP</a></h5></button>
						<div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>
					</div>
		</form>	
		
		
     </div>
  </div>

	
	
			

	



