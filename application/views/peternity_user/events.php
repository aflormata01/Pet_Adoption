
<div class="container-fluid adminlog">
	<div class="row" id="#panel">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
        
  	
			<br/>
			
    	    <div class="panel"  class="col-md-12">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <span class="glyphicon glyphicon-calendar"></span>
                        Calendar Events<hr/>
                    </h3>
                </div>
				<?php
				foreach($events as $d){ 
				echo'
				
				
                <div class="panel-body" class="s">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <div class="panel text-center date" style="border: 1px solid black;">
                                    <div class="panel-heading month">
                                        <span class="panel-title strong">
                                             EVENT #<hr/>
                                        </span>
                                    </div>
                                    <div class="panel-body day text-danger">
                                       '.$d['event_no'].'
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    '.$d['title'].'<br/><h5>'.$d['body'].'
								</h4>
                            </div>
                        </li>
                        
                    </ul>
					</div> ';
}
?>		

                    <a href="#" class="btn btn-block">More Events »</a>
                
           </div> </div>
            <!-- End fluid width widget --> 
            
		</div>
	</div>

