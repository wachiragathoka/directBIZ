<?php
class CoverDetailsModel{
	
	function __construct() {
		
	}
	
	function getSelectedCoverDetails($selectedCover){
		return array(
				100000,
				20000,
				10000,
				30000,
				2000,
				50000,
				200
		);
	}
	
	
	function getSelectedCoverPremium($paORstudent,$selectedCoverBenefit){
		//selectFrom database all where cover matches the params
		
		return 60000;
	}
}