<div class="fluid">
<div class="text-center col-sm-6" style="margin-left: 490px;">
<h1 class="heading">PETERNITY-NEWS</h1>
<a href="<?php echo base_url('admin/addNews')?>" class="none heading" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-circle"></i></span> Add News</a>

<div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>
</div>

<div class="text-center col-sm-8" style="margin-left: 365px;">

        <div class="panel-body" style="margin-left: 50px;">
		
		<div class="row">
				<?php
foreach($news as $d){ 
  echo'
  

	<div class="column">
    <div class="thumbnail">
      <a href="'.base_url($d['photo']).'">
        <img src="'.base_url($d['photo']).'" alt="Lights" style="width:100%">
        <div class="caption">
          <h4 class="text-center heading">'.$d['title'].'</h4>
		  <h6 class="text-center sm">By: Peternity PH</h6>
		  <h5 class="text-center sm">'.date("F j, Y, g:i a", strtotime($d['date'])).'</h5>
		  <h6 class="text-center sm">"'.$d['body'].'"</h6>
        </div>
      </a>
	  </div>
	  
	

				<button class="none heading sm"><a href="" class="heading sm"><span><i class="fa fa-edit"></i></span> Edit</a></button> |
				<button class="none heading sm"><a href="'.base_url('admin/delNews/'.$d['news#']).'" class="heading sm" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span> Delete</a></button>
	
	
	</div>
    ';
}
?>	
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


</div>
</div>
</div>


