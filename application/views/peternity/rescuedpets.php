<div class="container text-center">    
  <h2 class="heading">RESCUED PETS</h2><br>
  <div class="col-md-12">
	 <p>
		<a href="<?php echo base_url('peternity/petcatalogue')?>"><button type="button" class="btn  btn-lg button1 "><h4 class="heading">Pet Catalogue</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url('peternity/rescuepet')?>"><button type="button" class="btn   btn-lg button1"><h4 class="heading">Rescued Pets</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url('peternity/petforadoption')?>"><button type="button" class="btn  btn-lg button1"><h4 class="heading">Pets for Adoption</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	<br/>
	</div>

  <div class="col-md-12  margintpet">


<?php
foreach($petrescue as $d){ 
  echo' <div class="col-md-4 marginpettx">
 
    <div class="ih-item circle effect1 "><a href="#">
        <div class="spinner">
		</div>
        <div class="img"><img src=" assets/images/r1.jpg" alt="img" class="img-circle imagespin  img-responsive"></div></div></a>
        <div class="panel-body  margintpett">
			   <h4 class="text-center heading">'.$d['pet_nickname'].'</h4>
			   <h5 class="text-center sm">adopted '.$d['date_rescued'].' </h5>
            </div>
        
    </div>';
}
?>
 </div>
 </div>
