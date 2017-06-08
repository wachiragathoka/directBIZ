<?php 
class Button{
	
	var $butonName;
	var $buttonId;
	var $buttonType;	
	var $buttonValue;
	
	function __construct($paramButtonName,$paramButtonValue, $paramButtonType, $paramButtonId){
		$this->butonName=$paramButtonName;
		$this->buttonId=$paramButtonId;
		$this->buttonType=$paramButtonType;
		$this->buttonValue=$paramButtonValue;
		
	}
	
	
	function getButton(){
		return "<input type=".$this->buttonType." name=".$this->butonName." id=".$this->buttonId." Value=".$this->buttonValue." />";
	}
}
?>