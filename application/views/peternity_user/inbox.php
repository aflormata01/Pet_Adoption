
<div class="container-fluid fixed-bg">
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

		<h6 class="heading "><span class="glyphicon glyphicon-list-alt"></span> <a href="'.base_url('user/userstories').'" class="heading sm">My Stories</a></h6>
		<h6 class="heading "><span><i class="fa fa-inbox"></i></span> <a href="'.base_url('user/inbox').'" class="heading sm">Inbox</a></h6>

		
	';
	}
	
	?>
	</div>
	<div class="col-sm-6 ">

	<div class="panel panel-default margintop col-sm-12" >

		
	<h2 class="text-center heading"><a class="heading" href="<?php echo base_url('user/inbox')?>">-INBOX-</a></h2>
		</div>

	<div class="container text-center col-sm-12">    
  
  <div class="panel panel-default  text-left col-sm-11 " style="margin-left: 30px;" >
 <?php foreach($msg as $m){
	 
	 echo '
		<div class="table table-bordered">
					<h4 class="heading">Peternity PH</h4> 
						<h5 class="sm"><a href="" class="sm">'.$m['message'].'</a></h5>
					<hr />
		
		</div>';
 }
 ?>
</div>	
</div>	
</div>	


</div>