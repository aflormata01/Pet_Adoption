<div class="container text-center">    
  <h1>NEWS</h1><br>
	<div class="row">
	<div class="col-md-4">
<?php
foreach($news as $d){ 
  echo'
  
    <div class="thumbnail">
      <a href="assets/images/bugsy.jpg">
        <img src="assets/images/bugsy.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <h4 class="text-center">'.$d['title'].'</h4>
		  <h6 class="text-center">By: Peternity PH</h6>
		  <h5 class="text-center">'.$d['date'].'</h5>
		  <h6 class="text-center">"'.$d['body'].'"</h6>
        </div>
      </a>
    </div>';
}
?>	
  
</div>
</div>
