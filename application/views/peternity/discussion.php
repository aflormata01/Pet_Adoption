<div class="container">
	<h1 class="text-center">DISCUSSIONS</h1>
	
	<div class="panel container text-center">
		<table class="table table-bordered">
		<?php
		foreach($discussion as $d){ 
		echo'
		<tr>
		<td>
			<table class="table-responsive">
				<thead>
					<th>'.$d['Title'].'</th>
				</thead>
				<tbody>
					<tr> 
						<td>posted by '.$d['username'].' | '.$d['date'].' | '.$d['time'].'</td>
						<td class="gap"><a href="">'.$d['body'].'</a></td>
					</tr>
				</tbody>
			</table>
		</td>
		</tr>';
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
		</table>
	</div>
</div>	