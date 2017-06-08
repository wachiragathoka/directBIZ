<?php
include '../app/customer.php';

$customer = new Customer();
if(!empty($_POST))
{
	//pageLoader("localhost\eclipse\workspace\directBIZ\application\views\quoteModal.php");
	$customer->start();	
	header('location:../views/quoteModal.php');
	
}else{
	echo "empty Fields";
}



function pageLoader($ParamUrl){
	$url=$ParamUrl;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	$html = curl_exec($ch);
	$redirectURL = curl_getinfo($ch,CURLINFO_EFFECTIVE_URL );
	curl_close($ch);
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
