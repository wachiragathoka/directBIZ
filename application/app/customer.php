<?php

class Customer{
	
	var $cust_title;
	var $cust_first_name;
	var $cust_second_name;
	var $cust_last_name;
	var$cust_idno;
	var $cust_placeOfWork;
	var $customerDOB;
	

	function __construct() {
		$this->cust_first_name= isset($_POST['firstName']) ? $_POST['firstName'] : null;
		$this->cust_second_name= isset($_POST['mName']) ? $_POST['mName'] : null;
		$this->cust_last_name= isset($_POST['lname']) ? $_POST['lname'] : null;
	}
	
	
	function start() {
		if (empty($this->cust_first_name) || empty($this->cust_last_name) || empty($this->cust_second_name)) {
			throw new Exception("Empty Post not allowed");
		}
		
		else
		{
			$customerData=new CustomerDataModel();
			$customerData->insertCustomerData($this->cust_first_name,$this->cust_second_name,$this->cust_last_name);
		}
	}
	
	
	
	/**
	 * 
	 * @param unknown $param_cust_first_name
	 */
	public  function setFirstCustName($param_cust_first_name){
		$this->cust_first_name=$param_cust_first_name;
	}
	
	/**
	 * 
	 * @param unknown $param_cust_second_name
	 */
	public function setSecondCustName($param_cust_second_name){
		$this->cust_second_name=$param_cust_second_name;
	}
	
	/**
	 * 
	 * @param unknown $param_cust_last_name
	 */
	public function setLastCustomerName($param_cust_last_name){
		$this->cust_last_name = $param_cust_last_name;
	}
	
	/**
	 * 
	 * @param unknown $param_cust_title
	 */
	public function setCustomerTitle($param_cust_title){
		$this->cust_title=$param_cust_title;
	}
	
	/**
	 * 
	 * @return unknown
	 */
	public function getFirstCustomerName(){
		return $this->cust_first_name;
	}
	
	/**
	 * 
	 * @return unknown
	 */
	public function getSecondCustName() {
		return $this->cust_second_name;
	}
	
	/**
	 * 
	 * @return unknown
	 */
	public function getCustLastName(){
		return $this->cust_last_name;
	}
	
	
	/**
	 * 
	 * @return unknown
	 */
	public function getCustTitle(){
		return $this->cust_title;
	}
	
	
	function setCutomerID($paramID){
		
	}
	
	function getCustomerID(){
		return $this->cust_idno;
	}
	
	
	function setCustomerDOB($paramDOB){
		$this->customerDOB=$paramDOB;
	}
	
	
	function getCustomerDOB(){
		return $this->customerDOB;
	}
	
}