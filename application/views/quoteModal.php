<div id="dialog-confirm" title="Personal accident Cover option A">
	<p>	<?php 
			$modalFatory= new ModalFactory();
			
			echo $modalFatory->getPremiumAnddates();
			echo "<br><br>";
			echo $modalFatory->getSelectedCoverBenefits("A");
			
			?>
	</p>
</div>