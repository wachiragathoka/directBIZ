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
										<th>&nbsp;</th>
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
	
	
	
	//CUstom Fields
	function getcustomContainerStart($colspan){
		return "<table>
					<tr>
						<th colspan=".$colspan.">&nbsp; </th>
					</tr>";
	}
	
	function getNumberTd($number){
		return "<td align=right class=align-right>".number_format($number,2)."</td>";
	}
	
	function getnumberTh($headerText){
		return "<th align=right class=align-right>".$headerText."</th>";
	}
	
	
	function getTableheader($headerTitle){
		$titles="";
		for($i=0;$i<count($headerTitle);$i++){
			$titles=$titles."<th class=th-titles align=center>".$headerTitle[$i]."</th>";
		}
		
		
		return $this->getTR().		
					$titles.
				$this->getTrEnd();	
	}
	
	function getLeftheaderTd($headerText){
		return "<th class=td-titles>".$headerText."</th>";
	}
	
	function getTD1($text){
		return "<td>".$text."</td>";
	}
	
	
	function getControlsTD($param) {
		return "<td align=right height=20px>".$param."</td>";;
	}
	
	
}