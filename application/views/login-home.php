<div class="container-fluid">
	<div class="panel panel-default text-left col-xs-2 margintop sminfo usermarg"><br />
		<img src="<?php echo base_url('assets/images/123.jpg'); ?>" class="profilepic img-circle logpic " style="width: 35px ; height:35px" alt="profilepic"> <h4 class="heading "> Grace Cortez</h4>
		<br />
		<hr />
		<h6 class="heading "><span class="glyphicon glyphicon-user"></span> graceymacey </h6>
		<h6 class="heading "><span class="glyphicon glyphicon-envelope"></span> grace.cortez@yahoo.com</h6>
		<h6 class="heading "><span class="glyphicon glyphicon-baby-formula"></span> 08-28-2007</h6>
		<h6 class="heading "><span class="glyphicon glyphicon-list-alt"></span> <a href="" class="heading sm">My Stories</a></h6>
	</div>

	<div class="panel panel-default margintop col-sm-6">
		
	<h2 class="text-center heading">STORIES</h2>
	
		<div class="text-center">
			<a href="<?php echo base_url('user/adduserstories')?>" data-toggle="modal" data-target="#myModal">
			
			<button class="btn btn-muted sm" type="button" id="addButton"><span class="glyphicon glyphicon-plus"> </span>Add Story</button></a>
			<div id="table">
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content"></div>
					</div>
				</div>
			</div>
		</div>
		
	<div class="margintop marginbottom">
	
		<img src="<?php echo base_url('assets/images/bird1.jpg')?>" style="width: 500px; height: 450px;" class="picstory img-responsive"/>
		<h4 class="heading sm picstory text-warning">posted by graceymacey | Sample Caption</h4>
		<button class="btn-danger heart picstory "><span class="glyphicon glyphicon-heart"></button>	
	
	</div>
		
		
	
	</div>
	
</div>