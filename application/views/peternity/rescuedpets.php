<div class="container text-center">    
  <h1>RESCUED PETS</h1><br>
  <div class="row">
<?php
foreach($petrescue as $d){ 
  echo'<div class="col-xs-4">
        <div class="panel shadow">
		<div class=" panel-heading">
			<img src="assets/images/r1.jpg") class="img-responsive" style="width:100% ; height:200px" alt="RescuedPet1">
			</div>
        <div class="panel-body">
			   <h4 class="text-center">'.$d['pet_nickname'].'</h4>
			   <h5 class="text-center">adopted '.$d['date_rescued'].' </h5>
            </div>
        </div>
    </div>';
}
?>
 </div>
 </div>