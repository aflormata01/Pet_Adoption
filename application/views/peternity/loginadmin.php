<title><?php echo $title;?></title>
<div class="container-fluid adminlog">
     <div class="container col-sm-4  margintop" style="margin: 150px 300px 300px 100px; background-color: rgba(252, 152, 51, 0.3);">
	  <h3 class="text-center heading">ADMIN LOG IN</h3>
		 <form method="post">
					<div class=" text-center b">
						<span class="glyphicon glyphicon-user"></span> <label for="username"> USERNAME: </label>
						<input type="text" class="form-control" id="username" name="username"  />
					</div>
					<div class="text-center b">
						 <span class="glyphicon glyphicon-lock"></span> <label for="password"> PASSWORD: </label>
						<input type="password" class="form-control" id="password" name="password"  />
						<h5 class="heading"><button type="submit" class="btn btn-muted col-xs-5  marginbottom text-center" style="margin-left: 120px;" value="Login"><span class="glyphicon glyphicon-log-in"></span> LOG IN</h5></button>

			</form>	
		</div>
	</div>
</div>
			