<div class="container-fluid">
<div class="container col-md-6 cent">
<?php 
echo'
	<div class=" margintop">
		<h2 class="heading text-center">'.$disc[0]['Title'].'</h2>
		<h3 class="heading text-center sm" id="username">posted by '.$disc[0]['username'].' | '.date("F j, Y, g:i a", strtotime($disc[0]['date'])).'</h3>		
	</div>
	
	<div class="panel panel-heading panel-default">
		<h3 class="heading text-center sm">'.$disc[0]['body'].'</h3>
	</div>';

?>	
	<div class=" margintop">
		<h2 class="heading text-center"></h2>
		<h3 class="heading text- sm">COMMENTS : </h3>		
	</div>
	
	<div class="panel panel-heading panel-default">
	<img src="<?php echo base_url($pic[0]['photo'])?>" class="img img-responsive img-circle float" alt="featured pet 1" style="width: 50px; height:50px;"/>
		<h5 class="text-left smspace heading"><?php echo $disc[0]['username']?></h5>	
		<h6 class="text-left smspace ver sm "> My dog is a cross breed of a labrador and husky, his name is Jorda.</h6>	
	</div>
	
	<div class="panel panel-heading panel-default1 ">
		 <div class="input-group">
               <div class="input-group-addon iga1">
				<span class="glyphicon glyphicon-comment"></span>
               </div>
                <input type="text" class="form-control sm" placeholder="Write a comment..." name="">
                <div class="input-group-addon iga1">
				<button style="width: 35px; height: 20px;"><span class="glyphicon glyphicon-ok-sign"></span></button>
               </div>                        
		 </div>
	</div>
	
</div>

</div>
</div>