// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("nextbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


var selectQuote = document.getElementById('selectQuote');
var customerDetails = document.getElementById('personalDetails');
var declarations = document.getElementById('declarationInfo');



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

//Form
function step2(){
	selectQuote.setAttribute('class', 'hidden');
	customerDetails.setAttribute('class', 'visible');
	declarations.setAttribute('class','hidden');
}

function step3(){
	selectQuote.setAttribute('class', 'hidden');
	customerDetails.setAttribute('class', 'hidden');
	declarations.setAttribute('class','visible');
}

function porintPDF(){
	
}