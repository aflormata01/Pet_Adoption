
<div class="container text-center">    
  <h2 class="heading">RESCUED PETS</h2><br>
  <div class="col-md-12">
	 <p>

		<a href=""><button type="button" class="btn  btn-lg button1"><h4 class="heading">Rescued Pets</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url('user/petforadoption')?>"><button type="button" class="btn btn-lg button1"><h4 class="heading">Pets for Adoption</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	<br/>
	</div>

  <div class="col-md-12  margintpet">


<?php
foreach($petrescue as $d){ 
  echo' <div class="col-md-4 marginpettx">
 
    <div class="ih-item circle effect1 "><a href="'.base_url('user/info').'" style="text-decoration:none" data-toggle="modal" data-target="#myModal"><div id="table">
			<div id="myModal" class="modal fade" role="dialog">
			
    </div>
	</div>
        <div class="spinner">
		</div>
        <div class="img"><img src="'.base_url($d['photo']).'" alt="img" class="img-circle imagespin  img-responsive"></div></div></a>
        <div class="panel-body  margintpett">
			   <h4 class="text-center heading">'.$d['pet_nickname'].'</h4>
			   <h5 class="text-center sm">Rescued '.$d['date_rescued'].' </h5>
            </div>
        
    </div>';
}
?>
 </div>
 </div>
