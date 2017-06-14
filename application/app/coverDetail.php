<?php
include_once '../Model/coverDetailsModel.php';
class CoverDetail{
	
	var $coverPlan;//personal accident or Students cover
	var $coverStartDate; //
	var $coverEndDate;
	var $coverBenefits;//Benefits for plan A,B,C,D,E,F
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
	
	
	function setCoverPlan($paORstudent){
		$this->coverPlan=$paORstudent;
	}
	
	
	function setCoverBenefits($selectedBenefitsOption){
		$this->coverBenefits=$selectedBenefitsOption;
	}
	
	function setPremiumPayable($paORstudent,$selectedCoverBenefit){
		$this->premiumPayable=$this->coverDetailModel->getSelectedCoverPremium($paORstudent,$selectedCoverBenefit);
	}
	
	function setCoverStartDate($startdate){
		$this->coverStartDate=$startdate;
	}
	
	
	function setCoverEndDate($enddate){
		$this->coverEndDate=$enddate;
	}
}