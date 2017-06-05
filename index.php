<?php 
include './application/config/config.php';
include './application/views/templates/header.php';

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
else if(isset($_REQUEST['compute']) && $_REQUEST['compute']=="personalaccident_s"){
	include 'application/views/pa_s.php';
}

else{
	include 'application/views/pa_s.php';
	//include 'views/home.php';
}
/**
 * footer
 */
include './application/views/templates/footer.php';