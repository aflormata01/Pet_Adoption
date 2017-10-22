<div class="">
<div class="fluid " style="padding-right: 420px;">
<div class=" text-center col-sm-8" style="margin-left: 490px;">
<h1 class="heading">PETERNITY</h1>
<a href="<?php echo base_url('admin/addPets')?>" class="none heading " data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-circle"></i></span> Add A Pet</a><br/>
<br/>
</div>


<?php
foreach($pet as $p){ 
  echo'
  <div class="col-md-4">
<div class="col-md-12 pad">
  <div class="text-center col-md-12" style="margin-left: 300px;">
 <div class="ih-item circle effect1 pad "><a href="">

        <div class="spinner">
		</div>
        <div class="img"><img src="'.base_url($p['photo']).'" alt="img" class="img-circle imagespin img-responsive"></div></a>
		</div></a>
        <div class="panel-body" style="margin-left: 30px;">
			    <div class="col-sm-12 text-center" style="margin-left: 55px;">
				<h4 class="text-center heading">'.$p['pet_nickname'].'</h4>
				<h5 class="text-center sm">Rescued '.$p['date_rescued'].'</h5>
					</div>
					<div class="col-md-12 text-center" style="margin-left: 55px;">
				<button class="none heading sm"><a href="" class="heading sm"><span><i class="fa fa-edit"></i></span> Edit</a></button> |
				<button class="none heading sm"><a href="'.base_url('admin/delPets/'.$p['petID']).'" class="heading sm" onclick = "getConfirm(this.href);"><span><i class="fa fa-trash-o"></i></span> Delete</a></button>
    </div>
	</div>
	</div>
	</div>
	</div>
	';
}
?>
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