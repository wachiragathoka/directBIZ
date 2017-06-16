<?php $modalFatory= new ModalFactory();
?>

<div id="dialog-confirm" title="<?php echo var_dump($controller->getSelectedCoverPlan())." ok";?>">
	<p>	<?php 
					
			echo $modalFatory->getPremiumAnddates();
			echo "<br><br>";
			echo $modalFatory->getSelectedCoverBenefits("A");
			
			?>
	</p>
</div>