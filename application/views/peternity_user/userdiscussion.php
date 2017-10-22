
<div class="container-fluid">

<div class="panel panel-default text-left col-xs-2 margintop sminfo discmarg" id="userin"><br />
	
			
	<?php
	foreach($usern as $d){
		echo'
		<img src="'.base_url($d['photo']).'" class="profilepic img-circle logpic " style="width: 35px ; height:35px" alt="profilepic">
		<h4 class="heading ">'.$d['fname'].' '.$d['lname'].'</h4>
		<br />
		<hr />
		<h6 class="heading "><span class="glyphicon glyphicon-user"></span> <a class="heading" href="'.base_url('user/profile/'.$d['username'].'').'">'.$d['username'].'</a></h6>
		<h6 class="heading "><span class="glyphicon glyphicon-envelope"></span> '.$d['email'].'</h6>
		<h6 class="heading "><i class="fa fa-birthday-cake"></i> '.$d['birthdate'].'</h6>
		<hr />

		<h6 class="heading "><span class="glyphicon glyphicon-list-alt"></span> <a href="'.base_url('user/userstories').'" class="heading sm">My Stories</a></h6>
		<h6 class="heading "><span><i class="fa fa-inbox"></i></span> <a href="" class="heading sm">Inbox</a></h6>


		
	';
	}
	
	?>
	
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
	
	<div class="panel panel-default margintop col-sm-7">
	<h2 class="text-center heading">-DISCUSSIONS-</h2>	
	</div>
	<div class="panel panel-default marginbottom col-sm-7">
		<div  id="discussions">
		
		
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

<script>
	 $(document).ready(function(){
            $.ajax({
                url: "<?php echo base_url('user/rateDiscuss'); ?>",
                
                success: function(data){
                    $('#discussions').html(data);
                }
            });
        });
	</script>
		