<?php
//include '../../library/modalFactory.php'; //Path relative toModal window
//include 'library/modalFactory.php';//path relative to index file
//include 'library/FormFactory.php';
//include_once 'library/FormComponents/FormContainer.php';


$modalFatory= new ModalFactory();
?>
<!-- <!<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */

</style>
</head>
<body>

<h2>Click below to view Quote</h2> -->

<!-- Trigger/Open The Modal -->
<!-- <input type="button" id="myBtn" value="Click to view Quote"/> -->

<!-- The Modal -->
<script type="text/javascript" src="application/assets/js/pa.js"></script>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Cover Summary</h2>
    </div>
    <div class="modal-body">
      <p><?php echo $modalFatory->getPremiumAnddates();?>     
      <br />  
      	<?php echo $modalFatory->getSelectedCoverBenefits("A");?>
      	
      	<?php //echo $modalFatory->getDeclarationnResponse();?>      
      	<?php //echo $modalFatory->getExclusions();?></p>
    </div>
    <div class="modal-footer">
      <?php $modalFatory->getModalControls();?>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("nextbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {

	var paORstudent=document.getElementsByName("paORStudent");
	var selectedCoverOption=document.getElementsByName("coverOption");	
	var error=false;


	for (var i = 0; i<selectedCoverOption.length; i++) {
	    if (selectedCoverOption[i].checked) {
	    	selectedCoverBenefit=selectedCoverOption[i];
	        break;
	    }	    
	}

	if(selectedCoverBenefit==""){
		error=true;
		document.getElementById("errorCoverOption").value="Please Select one benefit";
	}
	
	
	if(paORstudent[0].checked || paORstudent[1].checked && !error){
				modal.style.display = "block";
		
	}	else{
		alert(error);
	}
   
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- </body>
</html> -->