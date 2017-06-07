<?php

class SelectField{
	
	var $selectName;
	var $selectID;
	var $options;
	var $labelnametag;
	var $labelName;

	
	function __construct($paramLabelname, $paramLabelfor,$paramSelectName,$paramSelectID,$paramOptions){
		$this->selectName=$paramSelectName;
		$this->selectID=$paramSelectID;
		$this->options=$paramOptions;
		$this->labelnametag=$paramLabelfor;
		$this->labelName=$paramLabelname;
	}
	

	
	function getSelectField(){
		return "<label for=".$this->labelnametag.">".$this->labelName." 
					<select name=".$this->selectName." id=".$this->selectID.">".
					
					$this->optionValues()
						
					."</select>
				</label>";
	}
	
	
	function optionValues(){
		$optionsV="";
		foreach ($this->options as $option){
			$optionsV=$optionsV."<option value=".$option.">".$option."</option>";
		}
		
		return $optionsV;
	}
}