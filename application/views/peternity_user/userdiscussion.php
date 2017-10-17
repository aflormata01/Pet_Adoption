<div class="container">
	<h2 class="text-center heading">DISCUSSIONS</h2>
	
		<div class="panel container text-center">
		<table class="table table-bordered">
		<?php
		foreach($user_discussion as $d){ 
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
					<tr> 
						<td class="text-left"><button class="btn-danger heart"><span class="glyphicon glyphicon-heart"></button></td>
						
					</tr>
				</tbody>
			</table>
		</td>
		</tr>';
		}
		?>
		
		</table>
		</div>
	<div class="text-right">
		<a href="<?php echo base_url('user/addDiscussion')?>" data-toggle="modal" data-target="#myModal">
    <button class="btn btn-muted sm" type="button" id="addButton"><span class="glyphicon glyphicon-plus"> </span>Add Discussion</button></a>
    <div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>
</div>
		
		