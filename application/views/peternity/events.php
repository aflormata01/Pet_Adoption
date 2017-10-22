<style>
	/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: #6A6A68;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.contain {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.contain::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid #FCE095;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent #FCE095;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid #FCE095;
    border-width: 10px 10px 10px 0;
    border-color: transparent #FCE095 transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color:#FCE095 ;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media all and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid black;
    border-width: 10px 10px 10px 0;
    border-color: transparent #FCE095 transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
</style>
<div class="">
<div class="container-fluid">
<h2 class="text-center heading">UPCOMING EVENTS</h2>
<div class="contain" style="margin-left: 300px;">
	
	<?php
foreach($events as $d){ 
  echo'
<div class="timeline">
  <div class="contain left">
    <div class="content">
		<h4 class="heading">EVENT #'.$d['event_no'].' '.$d['title'].'<br/><h5>'.$d['body'].'</h4></h5>
    </div>
  </div>
  <div class="contain right">
    <div class="content">
      <h4 class="heading">EVENT #'.$d['event_no'].' '.$d['title'].'<br/><h5>'.$d['body'].'</h4></h5>
    </div></div>
  </div>';
}
?>		

</div>
</div>
</div>
  