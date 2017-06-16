<?php
//include '../app/customer.php';
include_once '../app/coverDetail.php';


//set selected values



class PA_Controller{
	
	//var $coverdetails;
	function __construct(){
		
	}
	
	/**
	 * Get the selected cover, e.g. Student personal cover and Option A,B,C etc
	 */
	function getSelectedCoverPlan(){		
		//return "Some test values";
		//var_dump( $this->coverdetails->getCoverPlan());
		return $coverdetails->getCoverPlan()." ".$coverdetails->getCoverPlanOption();
	}
	
	/**
	 * Set
	 * PA or Student
	 * Selected Cover benefits
	 * Premium payable
	 * Cover start date and end date
	 */
	function setStep1Values($paORstudent,$selectedCoverBenefit,$coverPlanOption,$startdate,$enddate){
		$coverdetails->setCoverPlan($paORstudent);
		$coverdetails->setCoverBenefits($selectedCoverBenefit);
		$coverdetails->setPremiumPayable($paORstudent,$selectedCoverBenefit);
		$coverdetails->setCoverStartDate($startdate);
		$coverdetails->setCoverEndDate($enddate);
		$coverdetails->setCoverPlanOption($coverPlanOption);
	}
}