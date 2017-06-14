<?php 
//include 'library/FormFactory.php';
//include_once 'library/FormComponents/FormContainer.php';
?>

<form method="post" action="./application/controller/PA_controller.php" name="applicationForm"> 
	<?php
//form container

	$formFactory=new FormFactory();
	$container=new FormContainer();
	
	
	
	//echo $container->getContainerStart();
	echo $formFactory->step1();	//Select Cover 
	echo $formFactory->step2(); //Personal data, contact information,next of KIN
	echo $formFactory->step3(); //Declarations

	
	?>	
</form>