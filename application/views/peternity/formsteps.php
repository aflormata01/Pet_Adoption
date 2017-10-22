<style>
.process-step .btn:focus{outline:none}
.process{display:table;width:100%;position:relative }
.process-row{display:table-row;padding-top: 20px;}
.process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
.process-row:before{top:40px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
.process-step{display:table-cell;text-align:center;position:relative}
.process-step p{margin-top:4px}
.btn-circle{width:80px;height:80px;text-align:center;font-size:12px;border-radius:50%}


</style>
<div class="container">
 <div class="row" style="padding-top: 20px;">
  <div class="process">
   <div class="process-row ">
    <div class="process-step">
     <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-mouse-pointer fa-3x"></i></button>
     <br/><h4 class="text-center" >CHOOSE A PET</h4>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-info fa-3x"></i></button>
     <br/><h4 class="text-center">FILL INFORMATION</h4>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-pencil-square-o fa-3x"></i></button>
     <br/><h4 class="text-center">TERMS AND CONDITION</h4>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-check fa-3x"></i></button>
     <br/><h4 class="text-center">SAVE RESULT</h4>
    </div>
    
   </div>
  </div>
  <div class="tab-content">
  <h1 class="text-center">ADOPT A PET!</h1>
   <div id="menu1" class="tab-pane fade active in">
   <h3>"yung pets na pede i adopt"</h3>
    
   </div>
   <div id="menu2" class="tab-pane fade"><h2>Contact Info:</h2>
		<p><input class="col-sm-8 margleft" placeholder="Phone" oninput="this.className = ''" name="phone"></p><br/>
		<p><input class="col-sm-8 margleft" placeholder="Address" oninput="this.className = ''" name="add"></p><br/>
    
   </div>
   <div id="menu3" class="tab-pane fade">
   <h2> Pet Adopter's Oath <br /></h2>
	<h3 class="text-center ">I hereby swear to take good care of my pet. 
	To feed them, play with them, and take care of their needs.<h3>
                        
    
   </div>
   
   <div id="menu4" class="tab-pane fade">
    <h3>You have successfully completed every steps.</h3>
   
   </div>
   <div style="overflow:auto;">
					<div style="float:right;">
					<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
			<br/><br/>	</div>
  </div>
 </div>
</div>
</div>

           
					
		

  

<script>
$(function(){
 $('.btn-circle').on('click',function(){
   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
   $(this).addClass('btn-info').removeClass('btn-default').blur();
 });

 $('.next-step, .prev-step').on('click', function (e){
   var $activeTab = $('.tab-pane.active');

   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

   if ( $(e.target).hasClass('next-step') )
   {
      var nextTab = $activeTab.next('.tab-pane').attr('id');
      $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
      $('[href="#'+ nextTab +'"]').tab('show');
   }
   else
   {
      var prevTab = $activeTab.prev('.tab-pane').attr('id');
      $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
      $('[href="#'+ prevTab +'"]').tab('show');
   }
 });
});
</script>