// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("nextbtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
 function nextbtn() {

	 modal.style.display = "block";
	 
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
		//document.getElementById("errorCoverOption").value="Please Select one benefit";
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

function step1(){
	selectQuote.setAttribute('class', 'visible');
	personalDetails.setAttribute('class', 'hidden');
	declarationInfo.setAttribute('class','hidden');
}

//Form
function step2(){
	selectQuote.setAttribute('class', 'hidden');
	personalDetails.setAttribute('class', 'visible');
	declarationInfo.setAttribute('class','hidden');
}

function step3(){
	selectQuote.setAttribute('class', 'hidden');
	personalDetails.setAttribute('class', 'hidden');
	declarationInfo.setAttribute('class','visible');
}

function porintPDF(){
	
}