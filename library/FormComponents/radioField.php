<?php

class RadioField{
	
	var $radioValues;
	var $radioName;
	var $labelName;
	var $labelFor;
	var $radioID;
	

	function __construct($paramLabelname, $paramLabelfor,$paramRadioName,$paramRadioID,$paramRadioValues){
		$this->radioValues=$paramRadioValues;
		$this->radioName=$paramRadioName;
		$this->labelName=$paramLabelname;
		$this->labelFor=$paramLabelfor;
		$this->radioID=$paramRadioID;
	}
	
	
	function getRadioField(){
		
		return "<input id=".$this->radioID." type=radio name=".$this->radioName." value=".$this->radioValues."><label for=".$this->radioName."><span><span></span></span>".$this->labelName."</label><br />";
	}
}
?>