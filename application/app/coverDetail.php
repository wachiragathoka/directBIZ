<?php
include_once '../Model/coverDetailsModel.php';
class CoverDetail{
	
	public $coverPlan;//personal accident or Students cover
	var $coverStartDate; //
	var $coverEndDate;
	var $coverBenefits;//Benefits for plan A,B,C,D,E,F
	var $premiumPayable;
	var $declarations;
	var $excludedItems;
	var $coverPlanOption;
	
	
	var $coverDetailModel;
	
	function __construct(){
		$this->coverDetailModel=new CoverDetailsModel();
	}
	
	/**
	 * @return selected cover plan Personal accident or Student PA
	 */
	public function getCoverPlan(){		
		return $this->coverPlan;
		var_dump($this->coverPlan);		
	}
	
	
	
	
	/**
	 * 
	 * @return selected cover plan option
	 *  e.g. A,B,C,D,E,F,G
	 */
	function getCoverPlanOption(){
		return  $this->coverPlanOption;
	}
	
	
	/**
	 * 
	 * @param unknown $CoverPlanOption
	 * 
	 * Set cover plan option to either A,B,C,D,E,F,G
	 */
	function setCoverPlanOption($paramCoverPlanOption){
		$this->coverPlanOption=$paramCoverPlanOption;
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
	
	
	/**
	 * 
	 * @param unknown $paORstudent
	 * 
	 * Set coverplan to PA or Student Cover
	 */
	function setCoverPlan($paORstudent){
		$this->coverPlan=$paORstudent;
		
		//echo $this->coverPlan;
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