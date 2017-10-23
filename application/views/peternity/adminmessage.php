<div class="fluid">
<div class="text-center col-sm-6" style="margin-left: 490px;">
<h1 class="heading">MESSAGES</h1>
<a href="<?php echo base_url('admin/addMessage');?>" class="none heading " data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-circle"></i></span>Add</a>

<div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>

 <div class="table-responsive table" id="myTable">
            <table class="table table-striped">
                <thead>
                    <tr id="trHead">
						<th>Msg no.</th>
						<th>Username</th>
						<th>Message</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
				</thead>
			<tbody>
				<?php
					foreach($msg as $c){  
						echo "<tr><td>".$c['msg#']."</td><td>".$c['username']."</td><td>".$c['msg']."</td><td>".date("F j, Y, g:i a", strtotime($c['time'])).'</td><td><a onclick = "getConfirm(this.href);" href="'.base_url('admin/delMessage/'.$c['msg#']).'">Delete</a></td></tr>
						';
					}
				?>
			</tbody>
			</table>
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
