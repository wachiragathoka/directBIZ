<?php 
include '../../library/modalFactory.php';
//include 'library/FormFactory.php';
//include_once 'library/FormComponents/FormContainer.php';


$modalFatory= new ModalFactory();
?>
<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 60px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 90%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 10px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 10px;
    background-color: #5cb85c;
    color: white;
}

table{
	width: 100%;
	border-collapse: collapse;
	border-spacing: 0;
}

td, th { border: 1px solid #CCC; padding: 5px;} 

th {
background: #F3F3F3; /* Light grey background */
font-weight: bold; /* Make sure they're bold */
}
</style>
</head>
<body>

<h2>Click below to view Quote</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Click to view Quote</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Cover Summary</h2>
    </div>
    <div class="modal-body">
      <p><?php echo $modalFatory->getPremiumAnddates();?>       
      	<?php echo $modalFatory->getSelectedCoverBenefits("A");?>
      	<?php echo $modalFatory->getDeclarationnResponse();?>      
      	<?php echo $modalFatory->getExclusions();?></p>
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
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
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

</body>
</html>