
<div class="container-fluid">

<div class="">
	<h2 class="text-center heading">DISCUSSIONS</h2>
	
<div class="panel panel-default text-left col-xs-3 " style="margin-left: 50px; margin-right: 10px;">
<h4 class="heading text-center">TOPICS:</h4>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/discussion')?>" class="sm heading" "style="text-decoration: none;"> General</a></h6>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/category/Pet Vaccinations and Recommended Medicine')?>" class="sm heading" "style="text-decoration: none;"> Pet Vaccinations and Recommended Medicine</a></h6>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/category/Pet Grooming')?>" class="sm heading" "style="text-decoration: none;"> Pet Grooming</a></h6>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/category/Pet Care Tips')?>" class="sm heading" "style="text-decoration: none;"> Pet Care Tips</a></h6>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/category/All About Dogs')?>" class="sm heading" "style="text-decoration: none;"> All About Dogs</a></h6>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/category/Cat Forum')?>" class="sm heading" "style="text-decoration: none;"> Cat Forum</a></h6>
<h6 ><span><i class="fa fa-circle"></i></span><a href="<?php echo base_url('peternity/category/Caring for reptiles and Amphibians')?>" class="sm heading" "style="text-decoration: none;"> Caring for reptiles and Amphibians</a></h6>


</div>

			
	<div class="panel panel-default  text-left col-sm-8 " >
		<div class="table table-bordered">
		<?php
		foreach($discussion as $d){ 
		echo'
		
			
					<h4 class="heading">'.$d['Title'].'</h4> 
						<h5 class="heading sm">posted by '.$d['username'].' | '.date("F j, Y, g:i a", strtotime($d['date'])).'</h5>
						<h5 class="sm"><a href="" class="sm">'.$d['body'].'</a></h5>
					<hr />';
		}
		?>
		<!--<tr>
		<td>
			<table class="table-responsive">
				<thead>
					<th>Affordable Vet Clinics?</th>
				</thead>
				<tbody>
					<tr> 
						<td>posted by franchescamarie</td>
						<td class="gap"><a href="">Lorem Ipsum Dolor shimberlu eklaboo </a></td>
					</tr>
				</tbody>
			</table>
		</td>
		</tr>-->
	</div>
</div>	
</div>	
</div>	
