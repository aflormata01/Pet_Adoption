<style>
* {
  box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  height: 1000px;
  min-width: 300px;
  min-height: 300px;
}
h1 {
  text-align: center;  
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
  display: none;
}
button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
button:hover {
  opacity: 0.8;
}
#prevBtn {
  background-color: #bbbbbb;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.bord{
	border-bottom: 5px solid #da9b83;
	float: left;
	display: inline-block;
}


</style>


<form id="regForm" action="/action_page.php">

<div class="row">
<div class="col-md-12">
				<div class="col-md-4 active" >
				<p class="heading text-center">Step 1:</p>
				<p class="heading text-center">CHOOSE A PET</p></div>
			<div class="col-md-4 active" >
				<p class="heading text-center">Step 2:</p>
				<p class="heading text-center">INFORMATION</p></div>
			<div class="col-md-4 bord" >
				<p class="heading text-center">Step 3:</p>
				<p class="heading text-center">CONGRATULATIONS!</p></div>

	
	


	</div>
	</div>

  <h1 class="text-center heading">Success!</h1>
  <!-- One "tab" for each step in the form: -->
 

  <div class="col-md-5"><h3>You have successfully completed every steps. Please click continue to check your inbox for more details.</h3>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button"><a href="<?php echo base_url('user/inbox')?> ">Continue</a></button>
	  </div>
  </div>
  
</form>
