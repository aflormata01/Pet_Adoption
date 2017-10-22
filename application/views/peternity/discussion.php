
<div class="container">
	<h2 class="text-center heading">DISCUSSIONS</h2>
	
	<div class="panel panel-default container text-left col-sm-8">
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