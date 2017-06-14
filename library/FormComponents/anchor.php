<?php
class Anchor{
	
	var $linkTo;
	var $targetPage;
	var $linkLabel;
	
	function __construct($paramLinkTo,$paramTarget, $paramLinkLabel){
		$this->linkTo=$paramLinkTo;
		$this->targetPage=$paramTarget;
		$this->linkLabel=$paramLinkLabel;
		
		//echo "1";
	}
	
	function getLink(){
		
		return "<a href=".$this->linkTo." target=".$this->targetPage.">".$this->linkLabel."</a>";
		//return "<a hfref=".$this->linkTo." target=".$this->target.">".$this->linkLabel."</a>";
	}
}