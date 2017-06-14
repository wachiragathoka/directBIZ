<?php 
class FormField{
	
	var $fieldname;
	var $labelnametag;
	var $fieldId;
	var $labelName;
	//private $htmltags = "<label for=lastname>Last Name(*) <input type=text name=lastname id=lastname> </label>";
	
	
	/**
	 * 
	 * @param unknown $paramFieldName
	 * @param unknown $paramlabeltag
	 * @param unknown $paramLabelName
	 * @param unknown $paraid
	 */
	 function __construct($paramFieldName,$paramlabeltag, $paramLabelName, $paraid){
		$this->fieldname=$paramFieldName;
		$this->fieldId=$paraid;
		$this->labelName=$paramLabelName;
		$this->labelnametag=$paramlabeltag;
		
	}
	
	function getField(){
		return "<label for=".$this->labelnametag.">".$this->labelName." <input type=text name=".$this->fieldname." id=".$this->fieldId."/> </label>";
	}
	
	
}

class DateField{
	
	var $fieldId;
	var $fieldname;
	var $label;
	var $labelfortag;
	
	function __construct($paramLabel,$paramLabelForTag,$paramFieldName,$paramID){
		$this->fieldId=$paramID;
		$this->label=$paramLabel;
		$this->labelfortag=$paramLabelForTag;
		$this->fieldname=$paramFieldName;
	}
	
	function dateField(){
		return "<label for=".$this->labelfortag.">".$this->label." <input type=text name=".$this->fieldname." id=".$this->fieldId." /></label>";
	}
}
?>