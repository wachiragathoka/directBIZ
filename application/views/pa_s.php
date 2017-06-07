<?php 
include 'library/FormFactory.php';
include_once 'library/FormComponents/FormContainer.php';
?>

<form method="post" action="./application/controller/PA_controller.php"> 
	<?php
//form container

	$formFactory=new FormFactory();
	$container=new FormContainer();
	
	echo $container->getContainerStart();
	
	//Personal data	
	echo $formFactory->createpersonalData();
	
	//contact data
	echo $formFactory->createContactData();
	
	//Idnentification
	echo $formFactory->createIdentification();
	
	//Next of a KIN
	echo $formFactory->createNextOFAKin();
	
	echo $container->getContainerEnd();	
	
	echo $formFactory->coverDetails();
	
	echo $formFactory->declaraions();
	
	echo $formFactory->finalDeclaration();
	
	echo $formFactory->buttonControls();
	
	?>

	
</form>