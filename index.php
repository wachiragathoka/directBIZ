<?php 
include_once'./application/config/config.php';
include_once'./application/views/templates/header.php';
include_once './application/app/coverDetail.php';
include_once './application/Model/coverDetailsModel.php';
include_once './application/Model/customerDataModel.php';
include_once './application/app/coverDetail.php';
require_once './application/app/Customer.php';

include_once 'library/modalFactory.php';
include_once'library/FormFactory.php';
include_once 'library/quotePDFFactory.php';
include_once 'library/fpdf/fpdf.php';

include_once 'library/FormComponents/FormField.php';
include_once 'library/FormComponents/FormContainer.php';
include_once'library/FormComponents/SelectField.php';
include_once'library/FormComponents/radioField.php';
include_once'library/FormComponents/buttons.php';
include_once 'library/FormComponents/anchor.php';



//include_once 'application/views/quoteModal.php';

//include 'FormComponents/FormField.php';
//include_once 'FormComponents/FormContainer.php';
//include 'FormComponents/SelectField.php';
//include 'FormComponents/radioField.php';
//include 'FormComponents/buttons.php';





//include 'application/controller/PA_controller.php';

/**
 * Message body
 */


if (isset($_REQUEST['compute']) && $_GET['compute']=="motorprivate"){
	

		include 'views/motorquoteform.php';

	
}else if(isset($_REQUEST['compute']) && $_GET['compute']=="quote"){
			
	include 'views/quote.php';
	
//Personal accident form
}else if(isset($_REQUEST['compute']) && $_REQUEST['compute']=="personalaccident_f"){
	include 'application/views/pa_f.php';
}

//personal accident studnets
else if(isset($_REQUEST['pa']) && $_REQUEST['pa']=="pdf"){
	header('location:./application/views/PDFQuote.php');
	
	
}

else{
	include 'application/views/pa_s.php';
	include_once 'application/views/quoteModal.php';
}
/**
 * footer
 */
include './application/views/templates/footer.php';