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
<!-- <div class="example">
<div>
<input id="radio1" type="radio" name="radio" value="1" checked="checked"><label for="radio1"><span><span></span></span>Option 1</label>
</div>
<div>
<input id="radio2" type="radio" name="radio" value="2"><label for="radio2"><span><span></span></span>Option 2</label>
</div>
<div>
<input id="radio3" type="radio" name="radio" value="3"><label for="radio3"><span><span></span></span>Option 3</label>
</div>
</div> -->