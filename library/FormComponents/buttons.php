<?php 
class Button{
	
	var $butonName;
	var $buttonId;
	var $buttonType;	
	var $buttonValue;
	var $jsFuction;
	
	
	function __construct($paramButtonName,$paramButtonValue, $paramButtonType, $paramButtonId,$paramJSFunction){
		$this->butonName=$paramButtonName;
		$this->buttonId=$paramButtonId;
		$this->buttonType=$paramButtonType;
		$this->buttonValue=$paramButtonValue;
		$this->jsFuction=$paramJSFunction;
		
	}	
	
	function getButton(){
		return "<input type=".$this->buttonType." name=".$this->butonName." id=".$this->buttonId." Value=".$this->buttonValue." onclick=".$this->jsFuction." />";
	}
}
?>