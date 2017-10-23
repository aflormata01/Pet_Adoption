
<div class="container text-center">    
  <h2 class="heading">PETS FOR ADOPTION</h2><br>
  <div class="col-md-12 ">
	 <p>
		
		<a href="<?php echo base_url('user/rescuepet')?>" style="text-decoration:none"><button type="button" class="btn btn-lg button1"><h4 class="heading">Rescued Pets</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="" style="text-decoration:none"><button type="button" class="btn btn-lg button1"><h4 class="heading">Pets for Adoption</h4></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	<br/>
	</div>
<div class="col-md-12 margintpet ">
 <?php foreach ($petadopt as $p){

echo '
 <div class="col-md-4 margintpett">

 

    <div class="ih-item circle effect1 "><a href="">

        <div class="spinner">
		</div>
        <div class="img"><img src="'.base_url($p['photo']).'" alt="img" class="img-circle imagespin img-responsive"></div></a>
		</div></a>
        <div class="panel-body">
			    <div class="col-sm-11">
				<h3 class="text-center heading">'.$p['pet_nickname'].'</h3>
				<h5 class="text-center sm">Rescued '.$p['date_rescued'].'</h5>

				<a href="'.base_url('user/adoption').'" style="text-decoration:none" />
				<button type="submit" class="btn btn-adopt">ADOPT </a></h5></button>

				<div id="table">
			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
	</div>
            </div>
    </div>
    </div>';
}
?>
	
	

</div>
</div>