<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
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
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
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
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p><table>
      	<tr>
      		<td>Name</td>
      		<td><?php ?></td>
      		<td>Phone Number</td>
      		<td><?php ?></td>
      		<td>ID No</td>
      		<td></td>
      		<td></td>
      		<td></td>
      	</tr>
      	<tr>
      		<td>Email Address</td>
      		<td><?php ?></td>
      		<td>KRA PIN</td>
      		<td><?php ?></td>
      		<td>Date Of birth</td>
      		<td><?php ?></td>
      		<td>Postal address</td>
      		<td><?php ?></td>
      	</tr>
      	
      	<tr>
      		<td>Next of kin</td>
      		<td><?php ?></td>
      		<td>Relationship</td>
      		<td><?php ?></td>
      		<td>Phone Number</td>
      		<td><?php ?></td>
      		<td>Email Address</td>
      		<td><?php ?></td>
      	</tr>
      	
      </table></p>
      <p><table>
      	<tr>
      		<td>Cover option:</td>
      		<td><?php ?></td>
      		<td>Start date:</td>
      		<td><?php ?></td>
      		<td>End date:</td>
      		<td><?php ?></td>
      	</tr>      	
      </table></p>
      
      <p>
      	<table>
      		<tr>
      			<td> BENEFIT </td>
      			<td> Accidental death</td>
      			<td> Accidental Permanent Total Disablement</td>
      			<td> Hospital cash</td>
      			<td> Accidental temprary, total disablement.<br> Per week maximum 104 weeks</td>
      			<td> Accidental medical Expense</td>
      			<td> Artificial Appliance</td>
      			<td> Last Expense(Accidental Death)</td>
      		</tr>
      		<tr>
      			<td> Amount ( KES )</td>
      			<td> <?php ?></td>
      			<td> <?php ?></td>
      			<td> <?php ?></td>
      			<td> <?php ?></td>
      			<td> <?php ?></td>
      			<td> <?php ?></td>
      			<td> <?php ?></td>
      		</tr>
      	</table>
      </p>
      
      <p>
      
      	<table>
      		<tr>
      			<td> Declaration</td>
      			<td> Response </td>
      		</tr>
      		<tr>
      			<td> <?php ?> </td>
      			<td> <?php ?></td>
      		</tr>
      	</table>
      </p>
      <p>
      <table>
      	<tr>
      		<td>1. Manufacture of fireworks or explosives</td>
      		<td>5. Racing, Rallies and speed testing</td>
      	</tr>
      	<tr>
      		<td>2. Sinking of air, water or gas wells</td>
      		<td>6. Naval, military, police or Air force operations</td>
      	</tr>
      	<tr>
      		<td>3. Construction and maintenance of coffer dam</td>
      		<td>7. Professional sports</td>
      	</tr>
      	<tr>
      		<td>4. Airline crew & ship or boat crew</td>
      		<td>8. Diving</td>
      	</tr>
      	<tr>
      		<td>9. Mining</td>
      		<td></td>
      	</tr>
      </table>
      	
      </p>
      
      <p>
      	<table>
      		<tr>
      			<td>MPESA</td>
      			<td>BANK DEPOSIT</td>
      		</tr>
      		<tr>
      			<td>Paybill Number: 260260</td>
      			<td>Bank Name : Kenya Commercial Bank</td>
      		</tr>
      		<tr>
      			<td>Account Number : Your Policy Number</td>
      			<td>Account Name : UAP INSURANCE COMPANY LIMITED</td>
      		</tr>
      		<tr>
      			<td></td>
      			<td>Account number : 1107154170</td>
      		</tr>
      		<tr>
      			<td></td>
      			<td>Branch : Moi Avenue</td>
      		</tr>
      		
      	</table>
      </p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
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