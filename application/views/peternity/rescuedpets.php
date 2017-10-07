<div class="container text-center">    
  <h1>RESCUED PETS</h1><br>
  <div class="col-md-12">
	 <p>
		<a href="petcatalogue" style="text-decoration:none"><button type="button" class="btn  btn-lg button1">Pet Catalogue</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="rescuepet" style="text-decoration:none"><button type="button" class="btn  btn-lg button1">Rescued Pets</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="petforadoption" style="text-decoration:none"><button type="button" class="btn btn-lg button1">Pets for Adoption</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	<br/>
	</div>
  <div class="col-md-12  margintpetx">
 <div class="col-md-4 marginpettx">
 
    <div class="ih-item circle effect1 "><a href="#">
        <div class="spinner">
		</div>
        <div class="img"><img src=" <?php echo base_url('assets/images/r5.jpg'); ?>" alt="img" class="img-circle imagespin  img-responsive"></div></div></a>
        <div class="panel-body  margintpett">
			   <h4 class="text-center">'.$d['pet_nickname'].'</h4>
			   <h5 class="text-center">adopted '.$d['date_rescued'].' </h5>
            </div>
        

    </div>
<?php
foreach($petrescue as $d){ 
  echo' <div class="col-md-4 marginpettx">
 
    <div class="ih-item circle effect1 "><a href="#">
        <div class="spinner">
		</div>
        <div class="img"><img src=" assets/images/r1.jpg" alt="img" class="img-circle imagespin  img-responsive"></div></div></a>
        <div class="panel-body  margintpett">
			   <h4 class="text-center">'.$d['pet_nickname'].'</h4>
			   <h5 class="text-center">adopted '.$d['date_rescued'].' </h5>
            </div>
        
    </div>';
}
?>
 </div>
 </div>
