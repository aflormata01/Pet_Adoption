<?php
foreach($stories as $d){ 
  echo'
<div class="container adoptimg">
    <div class="panel panel-default shadow">
        <div class="panel-heading">
            <a href="#" class="MakaleYazariAdi">aflormata01</a>
           
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="assets/images/wilson.jpg" alt="Wilson" style="width:100%" height= "200px">
                    </a>
                </div>
                <div class="media-body">
                <h2 class="font">'.$d['title'].'</h4>
				<small>posted by '.$d['username'].' | '.$d['date'].' | '.$d['time'].'</small>
                <p>'.$d['body'].'</p>
				<div class="clearfix adoptimg"></div>
                <div class="btn-group" role="group" id="BegeniButonlari">
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                </div>                 
               </div>
            </div>
        </div>
    </div>
</div>';
}
?>