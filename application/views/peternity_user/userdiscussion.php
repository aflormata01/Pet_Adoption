
<div class="container-fluid">

<div class="panel panel-default text-left col-xs-2 margintop sminfo usermarg" id="userin"><br />
	
		<img src="'.base_url($d['photo']).'" class="profilepic img-circle logpic " style="width: 35px ; height:35px" alt="profilepic">
		<h4 class="heading ">Chicken Nuggets</h4>
		<br />
		<hr />
		<h6 class="heading "><span class="glyphicon glyphicon-user"></span> <a class="heading" href="'.base_url('user/profile/'.$d['username'].'').'">chcknnggts</a></h6>
		<h6 class="heading "><span class="glyphicon glyphicon-envelope"></span>nuggetsrlyf@gmail.com</h6>
		<h6 class="heading "><i class="fa fa-birthday-cake"></i> 10-22-17</h6>
		<hr />
		<h6 class="heading "><span class="glyphicon glyphicon-list-alt"></span> <a href="" class="heading sm">My Stories</a></h6>
		<h6 class="heading "><span><i class="fa fa-inbox"></i></span> <a href="" class="heading sm">Inbox</a></h6>
	
		<h6>
		<div class="text-left">
		<a href="<?php echo base_url('user/addDiscussion')?>" data-toggle="modal" data-target="#myModal"><button class="btn btn-muted sm" type="button" id="addButton"><span class="glyphicon glyphicon-plus"> </span>Add Discussion</button></a>

    <div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>
</div>
		</h6>

	</div>
	
	<div class="panel panel-default margintop col-sm-6">
	<h2 class="text-center heading">-DISCUSSIONS-</h2>	
	</div>
	<div class="panel panel-default marginbottom col-sm-6">
		<table class="table table-bordered">
		<?php
		foreach($user_discussion as $d){ 
		echo'
						<h4 class="text-left heading">'.$d['Title'].'</h4>
			
						<h6 class="sm">posted by '.$d['username'].' | '.date("F j, Y, g:i a", strtotime($d['date'])).'</h6>
						<p class="sm"><a href="'.base_url('user/discbody/'.$d['discuss#'].'').'" class="sm">'.$d['body'].'</a></p>

					<div class="btn-group text-right ">
						<button class="none"><i class="fa fa-thumbs-o-up"></i></button>&nbsp;
						<button class="none"><i class="fa fa-thumbs-o-down"></i></button>
						</div>
					
					<div class="dropdown1 floater">
							<button class="none floater dropbtn1"><span><i class="fa fa-ellipsis-h"></i></span></button>
								<div class="dropdown-content1">
									<a class="heading sm" <a href="'.base_url('user/delDiscussion/'.$d['discuss#']).'" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span>Delete</a>
								</div>
								</hr>
					</div>
					
					</div>
		

		';
		}
		?>
		
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
		