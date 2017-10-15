<div class="container">
	<h2 class="text-center heading ">STORIES</h2>
	
		<div class="panel container text-center">
		<table class="table table-bordered">
<?php
foreach($stories as $d){ 
  echo'
		<tr>
		<td>
			<table class="table-responsive">
			<thead>
			<th><img src="assets/images/hh.jpg" style="width: 150px; height: 100px;" /></th>
			<th class="gap sm"><a href="" class="sm">'.$d['body'].' </a></th>
			</thead>
			</table>
			
			<table class="table-responsive">
			<thead>
			<th>'.$d['title'].'</th>
			</thead>
			<tbody>
			<tr> 
			<td>posted by '.$d['username'].' | '.$d['date'].' | '.$d['time'].'</td>
			</tr>
			</tbody>
			</table>
		</td>
		</tr>';
}
?>
		
		</table>	
</div>
</div>