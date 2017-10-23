<div class="container"><br/>
<div class="side-body">
<div class="text-center col-sm-12" >
<h1 class="heading">PETERNITY EVENTS</h1>
<a href="<?php echo base_url('admin/addEvents')?>" class="none heading" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-circle"></i></span> Add Events</a>

<div id="table">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>

<?php
foreach($events as $d){ 
				echo'
		<div class="row row-striped">
			<div class="col-sm-4 text-right">
				<h2>EVENT #</h2>
				<h1 class=""><span class="">'.$d['event_no'].'</span></h1>
			</div>
			<div class="col-sm-6">
				<h3 class="text-uppercase"> '.$d['title'].'</h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$d['date'].'</li>
				</ul>
				<p>'.$d['body'].'</p>
			</div>
		</div>';
}
?>		
		
	</div>
	</div>
	</div>
	