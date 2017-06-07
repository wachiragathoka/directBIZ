<?php
include '../app/customer.php';

$customer = new Customer();
if(!empty($_POST))
{
	$customer->start();
}else{
	echo "empty Fields";
}






class PA_Controller{
	
	var $customer;
	
	function __construct(){
		
		$customer = new Customer();
		if(!empty($_POST))
		{
			$this->customer->start();
		}else{
			echo "empty";
		}
	}
	
	function renderForm(){
		
	}
}
