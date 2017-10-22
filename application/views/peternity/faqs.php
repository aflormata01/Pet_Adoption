
<div class="container-fluid faqbg">
<div class="container margintop">
	<h2 class="text-center heading white" style="margin-left: 700px;">FREQUENTLY ASKED QUESTIONS</h2>
<?php
foreach($faqs as $d){ 
  echo'	 

  <div class="margintop col-sm-5 text-left" style="margin-left: 700px;">
	<div class="panel panel-default1 margintop marginbottom border">
		<div class=" panel-heading heading"><h5 class="heading">Question #'.$d['faqs_no'].'</h5></div>
		<div class=" panel-body sm">Answer: '.$d['body'].'</div>

	</div>
	</div>';
}
?>
</div>
</div>
	
	