<div class="container">
	<h1 class="text-center">STORIES</h1>
	
		<div class="panel container text-center">
		<table class="table table-bordered">

		<?php
		foreach($user_stories as $d){ 
		echo'
		<tr>
		<td>
			<table class="table-responsive">
				<thead>
					<th>'.$d['title'].'</th>
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
		
		</table>
		
		
		</div>
		
		<div class="text-right">
		<a href="<?php echo base_url('user/addstories')?>" data-toggle="modal" data-target="#myModal">
    <button class="btn btn-muted" type="button" id="addButton"><span class="glyphicon glyphicon-plus"> </span>Add Story</button></a>
    <div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>
</div>
		
		
</div>
		
	