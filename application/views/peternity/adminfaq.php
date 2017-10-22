<div class="container-fluid">
<div class="side-body">

<div class="text-center col-sm-6" ">
<h1 class="heading">PETERNITY-FAQ's</h1>

<a href="<?php echo base_url('admin/addFaqs')?>" class="none heading " data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-circle"></i></span> Add Entry</a>

<div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>

</div>

<div class="text-center col-sm-8" >

        <div class="panel-body" >
			    <div class="col-sm-6 text-center">

				<?php
foreach($faqs as $d){ 
  echo'	 

				 <div class="margintop  text-left">
					<div class="panel panel-default margintop marginbottom">
						<div class=" panel-heading heading"><h5>Question #'.$d['faqs_no'].'</h5></div>
						<div class=" panel-body sm">Answer: '.$d['body'].'</div>
						<div class=" panel-footer"></div>
					</div>

</div>
				<button class="none heading sm"><a href="'.base_url('admin/updateFaqs/'.$d['faqs_no']).'" class="heading sm" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-edit"></i></span> Edit</a></button> |
				<button class="none heading sm"><a href="'.base_url('admin/delFaqs/'.$d['faqs_no']).'" class="heading sm" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span> Delete</a></button>
				<div id="table">
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content"></div>
						</div>
					</div>
				</div>
';}
	?>

    </div>




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
