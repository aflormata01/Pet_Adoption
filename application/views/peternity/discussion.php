<div class=" margintop col-sm-1">
<button onclick="goBack()" class="button btn-sm"><span class="glyphicon glyphicon-triangle-left"><span /><label class="heading">BACK</label></button>
<script>
function goBack() {
    window.history.back();
}
</script>
</div>

<div class="container">
	<h2 class="text-center heading">DISCUSSIONS</h2>
	
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
						<td class="gap sm"><a href="" class="sm">'.$d['body'].'</a></td>
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