
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

						<td>posted by '.$d['username'].' | '.date("F j, Y, g:i a", strtotime($d['date'])).'</td>
						<td class="gap sm"><a href="'.base_url('user/discbody/'.$d['discuss#'].'').'" class="sm">'.$d['body'].'</a></td>

					</tr>
					<tr> <div class="btn-group">
						<td class="text-left">
					<button class=""><i class="fa fa-thumbs-o-up"></i></button>
					<button class=""><i class="fa fa-thumbs-o-down"></i></button></td>
						</div>
					</tr>
					<div class="dropdown1 floater">
							<button class="none floater dropbtn1"><span><i class="fa fa-ellipsis-h"></i></span></button>
								<div class="dropdown-content1">
									<a class="heading sm" <a href="'.base_url('user/delDiscussion/'.$d['discuss#']).'" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span>Delete</a>
								</div>
					</div>
					</div>
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
<script type = "text/javascript">

function getConfirm(l)
{
  if(arguments[0] != null)
  {
    if(window.confirm('Are you sure you want to delete?\n'))
    {
      location.href = l;
    }
    
    else
    {
      event.cancelBubble = true;
      event.returnValue = false;
      return false;
    }
  }
  
  else
  {
    return false;
  }
  return;
}
</script>		
		