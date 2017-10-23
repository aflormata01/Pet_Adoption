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

.active{
	border-bottom: 5px solid #b1cdda;
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
			<div class="col-md-4 bord" >
				<p class="heading text-center">Step 2:</p>
				<p class="heading text-center">INFORMATION</p></div>
			<div class="col-md-4 bord" >
				<p class="heading text-center">Step 3:</p>
				<p class="heading text-center">CONGRATULATIONS!</p></div>


	
	


	</div>
	</div>

  <h1 class="text-center heading">ADOPT A PET!</h1>
  <!-- One "tab" for each step in the form: -->
  
  <div class="tab heading">

  <div class="col-md-12">

<?php foreach ($petadopt as $p){


echo '
 

 <div class="col-md-5 ">

 

    <div class="ih-item circle effect1" style="margin-left:35px;"><a href="">

        <div class="spinner col-md-12" style="margin-left:45px;">
		</div>
        <div class="img "style="margin-left:40px"><img src="'.base_url($p['photo']).'" alt="img" class="img-circle imagespin img-responsive "></div></a>
		</div></a>
        <div class="panel-body">
			    <div class="col-sm-12" style="margin-left:45px;">

				<h3 class="text-center heading">'.$p['pet_nickname'].'</h3>
				<h5 class="text-center sm">Rescued '.$p['date_rescued'].'</h5>

				<a href="'.base_url('user/adoptionform/'.$p['petID'].'').'" style="text-decoration:none">

				<button type="submit" class="btn btn-adopt" style="margin-left:65px;">ADOPT </a></h5></button>


				<div id="table">
			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
	</div>
            </div>
    </div>
    </div>';
}
?>
	
</div>
	 
</div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
  

     