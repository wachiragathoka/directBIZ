$(function() {
	$("#startdate").datepicker();
});

$(function() {
	$("#enddate").datepicker();
});

$(function() {//'#nextbtn').on('click', 	
	$("#nextbtn").click(function() {
		
		checkselectedvalues() ;

	});

});

function checkselectedvalues() {
	//alert("1");
	var paORstudent = document.getElementsByName("paORStudent");
	var selectedCoverOption = document.getElementsByName("coverOption");
	var pa="";
	var selectedCoverBenefit="";
	var error = false;

	for (var i = 0; i < selectedCoverOption.length; i++) {
		if (selectedCoverOption[i].checked) {
			selectedCoverBenefit = selectedCoverOption[i];
			break;
		}
	}
	

	if (selectedCoverBenefit == "") {
		error = true;
		//document.getElementById("errorCoverOption").value="Please Select one benefit";
		//alert(error);
	}

	if (paORstudent[0].checked || paORstudent[1].checked && !error) {
		
		if(paORstudent[0].checked){
			pa=paORstudent[0].value;
		}else if(paORstudent[1].checked){
			pa=paORstudent[1].value;
		}
		
		
		//ajax call
		//$

		
		$("#dialog-confirm").dialog({
			resizable : true,
			height : "auto",
			width : "1100",
			//float: "left",
			display : "inline-block",
			modal : true,
			buttons : {
				"Looks Ok, proceed :)" : function() {					
					$(this).dialog("close");
					step2();
				},
				Cancel : function() {
					$(this).dialog("close");
				}
			}
		});		

	} else {
		alert(error);
	}
}