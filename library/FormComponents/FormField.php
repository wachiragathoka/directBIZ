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
		return "<label for=".$this->labelnametag.">".$this->labelName." <input type=text name=".$this->fieldname." id=".$this->fieldId."> </label>";
	}
	
	
}
?>