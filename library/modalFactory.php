<?php
//include 'FormComponents/FormField.php';
//include_once 'FormComponents/FormContainer.php';
//include 'FormComponents/SelectField.php';
//include 'FormComponents/radioField.php';
//include 'FormComponents/buttons.php';

//include '../../application/app/coverDetail.php';//
//include './application/app/coverDetail.php';//relative to inded

class ModalFactory{
	
	var $container;
	var $coverDetails;
	
	function __construct(){
		$this->container = new FormContainer ();
		$this->coverDetails=new CoverDetail();
	}
	
	function getPremiumAnddates(){
		
		return
		 $this->container->getcustomContainerStart(2).//table
		 	$this->container->getTR(). //tr
				$this->container->getLeftheaderTd("Premium Amount").//td
				$this->container->getTD1("30,000").//td
			$this->container->getTdEnd().//</tr>
		
			$this->container->getTR(). //tr
				$this->container->getLeftheaderTd("Cover Startdate").//td
				$this->container->getTD1("12/12/2016").//td
			$this->container->getTdEnd().//</tr>
			
			$this->container->getTR(). //tr
				$this->container->getLeftheaderTd("Cover Enddate").//td
				$this->container->getTD1("01/01/2017").//td
			$this->container->getTdEnd().//</tr>
		$this->container->getContainerEnd(); //</table>
	}
	
	
	function getSelectedCoverBenefits($selectedCover){
		
		$headerText=array(
				"BENEFIT",
				"Accidental death",
				"Accidental Permanent Total Disablement",
				"Hospital cash",
				"Accidental temprary, total disablement.Per week maximum 104 weeks",
				"Accidental medical Expense",
				"Artificial Appliance",
				"Last Expense(Accidental Death)"
		);
		
		
		
		return 
			$this->container->getcustomContainerStart(8).//table
				$this->container->getTableheader($headerText).//headers
					$this->container->getTR(). //tr
						$this->container->getLeftheaderTd("Amount ( KES )").//td
						$this->formatedBenefitValues($selectedCover).//formated values
					$this->container->getTrEnd().//</tr>
			$this->container->getContainerEnd();
		
	}	
		
	
	function formatedBenefitValues($paramChosenCover){
		$formatedBenefits="";
		$benefits=$this->coverDetails->getCoverBenefits($paramChosenCover);//get benefits for chosen cover in array
		 
		for($i=0;$i<count($benefits);$i++){
			$formatedBenefits=$formatedBenefits.$this->container->getNumberTd($benefits[$i]);
		}
		
		return $formatedBenefits;
	}
	
	
	function getDeclarationnResponse(){
		$headerText=array(
				"Declaration",
				"Response"
		);
		
		
		return
		$this->container->getcustomContainerStart(2).//table
			$this->container->getTableheader($headerText).//headers				
					$this->formatedDeclarationsnResponses(). //formated table body				
		$this->container->getContainerEnd();
	}
	
	
	function formatedDeclarationsnResponses(){
		
		$declarationQuestions=array(
				"Have you previously held Personal Accident cover ?",
				"If yes , name the insurer:",
				"Are you free from any physical disability or mental illness to the best of your knowledge ?",
				"If No above, give details:",
				"Give details of all accidents you have sustained in the last five (5) years :",
				"Are you engaged in any of the excluded activities / occupations",
				"If Yes, would you like an extension of cover to these activities<br>(Extra 25% of the basic premium )"
		);
		
		$declarationsResponses=array(
				"Yes",
				"UAP",
				"No",
				"Example of disability is listed here",
				"Accident 1. Give details here, Accident 2. Give details here, Accident 3. Give details here",
				"Yes: Football, horse racing",
				"Yes, I would like. additional cover"
				
		);
		
		$formatedDeclarationsnResponses="";
			//$declarations=$this->coverDetails->getDeclarations();
			
		for($i=0;$i<count($declarationsResponses);$i++){
			$formatedDeclarationsnResponses=$formatedDeclarationsnResponses.$this->container->getTR(). //tr
																				$this->container->getTD1($declarationQuestions[$i]).//td
																				$this->container->getTD1($declarationsResponses[$i]).//td
																			$this->container->getTrEnd();//</tr>
		}
		
		return $formatedDeclarationsnResponses;
	}
	
	
	function getExclusions(){		
		
		return $this->container->getcustomContainerStart(2).//table
					$this->formatedExclusions(). //formated table body
				$this->container->getContainerEnd();//end table
	}
	
	private function formatedExclusions(){
		$formatedExclusions="";
		$exclusions=array(
				"1. Manufacture of fireworks or explosives",
				"2. Sinking of air, water or gas wells",
				"3. Construction and maintenance of coffer dam",
				"4. Airline crew & ship or boat crew",
				"5. Racing, Rallies and speed testing",
				"6. Naval, military, police or Air force operations",
				"7. Professional sports",
				"8. Diving",
				"9. Mining"
		);
				
		$firsthalf=array_slice($exclusions, 0, ceil(count($exclusions)/2));
		$secondhalf=array_slice($exclusions, floor(count($exclusions)/2));
		
		
		if(count($exclusions)%2!=0){
			array_push($exclusions, " ");
		}
		for($i=0;$i<count($exclusions)/2;$i++){
			$formatedExclusions=$formatedExclusions.$this->container->getTR(). //tr
														$this->container->getTD1($firsthalf[$i]).//td
														$this->container->getTD1($secondhalf[$i]).//td
													$this->container->getTrEnd();//</tr>
		}
		
		return $formatedExclusions;
		
	}
	
	
	function getModalControls(){
		$okButton=new Button("okBTN","OkGenerateQuote", "button", "okBTN","step2()");
		$cancelButton=new Button("cancelBTN","ComputeAgain", "button", "cancelBTN","");
		
		echo $okButton->getButton()." ";
		echo " ".$cancelButton->getButton();
	}
}