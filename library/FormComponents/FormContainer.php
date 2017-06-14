<?php
class FormContainer{	
	var $containerStart;
	var $containerend;
	
	var $td;
	var $end_td;
	
	var $tr;
	var $end_tr;
	
	
	function __construct(){
		$this->containerStart="<table width=100%>
									<tr>
										<th>&nbsp;</th>
									</tr>";
		$this->tr="<tr>";
		$this->tr_end="</tr>";
		
		$this->td="<td>";
		$this->td_end="</td>";
		
		$this->containerend="</table>";
	}
	
	function getContainerStart(){
		return $this->containerStart;
	}
	
	function containerwithNoHeader($paramTabulardata){
		$table="<table width=100%><tr>";
		$tds="";
		$tabulardata="";
		
		
		
		for($i=0; $i< count($paramTabulardata); $i++){
			$tds=$tds."<td align=left>".$paramTabulardata[$i]."</td>";
		}
		
		return $table.$tds."</tr></table>";
		
		//var_dump($table.$tds."</tr></table>");
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
		return "<table width=100% class=benefit-values>";					
	}
	
	function getNumberTd($number){
		return "<td align=right class=align-right>".number_format($number)."</td>";
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
		return "<th width=20%>".$headerText."</th>";
	}
	
	function getTD1($text){
		return "<td>".$text."</td>";
	}
	
	
	function getControlsTD($param) {
		return "<td height=30px align=center>".$param."</td>";
	}
	
	
	function getControlsContainer($paramTabulardata) {
		$table="<table width=100% align=centre><tr>";
		$tds="";
		$tabulardata="";
		
		
		
		for($i=0; $i< count($paramTabulardata); $i++){
			$tds=$tds."<td align=centre>".$paramTabulardata[$i]."</td>";
		}
		
		return $table.$tds."</tr></table>";
	}
	
	function fieldset($legendData,$data){
		return "<fieldset class=fieldset>
			<legend>".$legendData."</legend>
				".$data."
		</fieldset>";
	}
}