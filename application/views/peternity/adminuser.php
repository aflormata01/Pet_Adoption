<div class="container-fluid">
<div class="side-body">
<div class="text-center col-sm-12" >
<h1 class="heading">PETERNITY-USERS</h1>
<a href="<?php echo base_url('admin/addUser');?>" class="none heading " data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-circle"></i></span>Add</a>

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
						<th>Username</th>
						<th>Name</th>
						<th>Email</th>
						<th>Birthdate</th>
						<th>Sex</th>
						<th>Action</th>
					</tr>
				</thead>
			<tbody>
				<?php
					foreach($user as $c){  
						echo "<tr><td>".$c['username']."</td><td>".$c['fname']." ".$c['lname']."</td><td>".$c['email']."</td><td>".$c['birthdate']."</td><td>".$c['sex'].'</td><td><a onclick = "getConfirm(this.href);" href="'.base_url('admin/delUser/'.$c['username']).'">Delete</a></td></tr>
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