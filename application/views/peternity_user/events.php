<div class=" margintop col-sm-1">
<button onclick="goBack()" class="button btn-sm"><span class="glyphicon glyphicon-triangle-left"><span /><label class="heading">BACK</label></button>
<script>
function goBack() {
    window.history.back();
}
</script>
</div>

<div class="container">
	<h2 class="text-center heading">UPCOMING EVENTS</h2>
<?php
foreach($events as $d){ 
  echo'
	<div class="col-sm-3">
	<div class="panel panel-default shadow">
		<div class=" panel-heading">
			<h4 class="heading">EVENT #'.$d['event_no'].' '.$d['title'].'</h4></div>
		<div class="panel-body sm">'.$d['body'].'</div>
		</div>
		</div>';
}
?>
</div>