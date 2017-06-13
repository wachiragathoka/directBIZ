<?php
//include_once '../Model/coverDetailsModel.php';
class CoverDetail{
	
	var $coverPlan;
	var $coverStartDate;
	var $coverEndDate;
	var $coverBenefits;
	var $premiumPayable;
	var $declarations;
	var $excludedItems;
	
	
	var $coverDetailModel;
	
	function __construct(){
		$this->coverDetailModel=new CoverDetailsModel();
	}
	
	function getCoverPlan(){
		return $this->coverPlan;
	}
	
	function getCoverStartDate(){
		return $this->coverStartDate;
	}
	
	function getCoverEndDate(){
		return $this->coverEndDate;
	}
	
	function getCoverBenefits($paramChosenCover){
		return $this->coverDetailModel->getSelectedCoverDetails($paramChosenCover);
	}
	
	function getPremiumPayable(){
		return $this->premiumPayable;
	}
	
	function getDeclarations(){
		return $this->declarations;
	}
	
	function getExcludedItems(){
		return $this->excludedItems;
	}
}