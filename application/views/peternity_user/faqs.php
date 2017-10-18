<div class=" margintop col-sm-1">
<button onclick="goBack()" class="button btn-sm"><span class="glyphicon glyphicon-triangle-left"><span /><label class="heading">BACK</label></button>
<script>
function goBack() {
    window.history.back();
}
</script>
</div>

<div class="container margintop">
	<h2 class="text-center heading">FREQUENTLY ASKED QUESTIONS</h2>
<?php
foreach($faqs as $d){ 
  echo'	 
	<div class="panel panel-default shadow margintop">
		<div class=" panel-heading heading"><h5>Question #'.$d['faqs_no'].'</h5></div>
		<div class=" panel-body sm">Answer: '.$d['body'].'</div>
		<div class=" panel-footer"></div>
	</div>';
}
?>
</div>