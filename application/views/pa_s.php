<?php 
include 'library/FormComponents.php';
//include 'library/FormComponents/FormField.php';
include 'library/FormFactory.php';
?>

<form method="post" action=""> 
	<?php
//form container
	echo $container->getContainerStart();
	
	//data row
	echo $container->getTR();
		echo $container->getTD();
			echo $firstNamefield->getField();
		echo $container->getTdEnd();
		echo $container->getTD();
			echo $middleName->getField();
		echo $container->getTdEnd();
		echo $container->getTD();
			echo $lastName->getField();
		echo $container->getTdEnd();
		echo $container->getTrEnd();
	?>

	<?php echo $container->getContainerEnd(); ?>	
	
</form>