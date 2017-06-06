<?php

class FormContainer{
	
	var $containerStart;
	var $containerend;
	
	var $td;
	var $end_td;
	
	var $tr;
	var $end_tr;
	
	
	function __construct(){
		$this->containerStart="<table>
									<tr>
										<th colspan=3>&nbsp;</th>
									</tr>";
		$this->tr="<tr>";
		$this->tr_end="<\tr>";
		
		$this->td="<td>";
		$this->td_end="</td>";
		
		$this->containerend="<tr>
								<td>&nbsp;</td>
							 </tr>
							</table>";
	}
	
	function getContainerStart(){
		return $this->containerStart;
	}
	
	function getContainerEnd(){
		return $this->containerend;
	}
	
	function getTR() {
		return $this->tr;
	}
	
	function getTrEnd(){
		return $this->end_tr;
	}
	
	function getTD(){
		return $this->td;
	}
	
	function getTdEnd(){
		return $this->end_td;
	}
}