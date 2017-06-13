<?php
//include 'FormComponents/FormField.php';
//include_once 'FormComponents/FormContainer.php';
//include 'FormComponents/SelectField.php';
//include 'FormComponents/radioField.php';
//include 'FormComponents/buttons.php';
class FormFactory {
	var $container;
	function __construct() {
		$this->container = new FormContainer ();
	}
	function createpersonalData() {
		$firstNamefield = new FormField ( "firstName", "firstName", "First Name", "firstName" );
		$middleName = new FormField ( "mName", "mName", "Middle Name", "mName" );
		$lastName = new FormField ( "lname", "lname", "Last Name", "lname" );
		$dob=new FormField ( "dob", "dob", "Date of Birth", "dob" );
		
				
		// Personal Data
		$personalData = $this->container->getTR () . 
			$this->container->getTD () . 
				$firstNamefield->getField () . 
			$this->container->getTdEnd () . 
			$this->container->getTD () . 
				$middleName->getField () . 
			$this->container->getTdEnd () . 
			$this->container->getTD () . 
				$lastName->getField () . 
			$this->container->getTdEnd () . 
			$this->container->getTD () .
				$dob->getField () .
			$this->container->getTdEnd () .
			$this->container->getTrEnd ();
		return $personalData;
	}
	
	
	function verticalSpacer() {
		return $this->container->getTR () . $this->container->getTD () . $this->container->getTdEnd () . $this->container->getTD () . $this->container->getTdEnd () . $this->container->getTD () . $this->container->getTdEnd () . $this->container->getTrEnd ();
	}
	
	
	function createContactData() {
		$telePhone = new FormField ( "mobile", "mobile", "Mobile Phone No", "mobile" );
		$email = new FormField ( "email", "email", "Email Address", "email" );
		$postalAddress = new FormField ( "paddress", "paddress", "PostalAddress", "paddress" );
		$postalcode = new FormField ( "pcode", "pcode", "Postal Code", "pcode" );
		
		$contactData = $this->container->getTR () . 
							$this->container->getTD () . $telePhone->getField () . $this->container->getTdEnd () . 							
							$this->container->getTD () . 
								$email->getField () . 
							$this->container->getTdEnd () . 
							$this->container->getTD () . 
								$postalAddress->getField () . 
							$this->container->getTdEnd () .
							$this->container->getTD () .
								$postalcode->getField () .
							$this->container->getTdEnd () .
							$this->container->getTrEnd ();
		
		return $contactData;
	}
	
	
	function createIdentification(){
		$idNo=new FormField ( "idNo", "idNo", "ID No*", "idNo" );
		$pinNo=new FormField ( "pinNo", "pinNo", "KRA PIN No", "pinNo" );
		
		return 
			$this->container->getTR () . 
				$this->container->getTD () .$idNo->getField (). $this->container->getTdEnd ().
				$this->container->getTD () .$pinNo->getField (). $this->container->getTdEnd () .
			$this->container->getTrEnd ();
	}
	
	
	function createNextOFAKin(){
		
		$options = array (
				"Select One",
				"Spouse",
				"Son",
				"Daughter",
				"Father",
				"Mother",
				"Relative",
				"Other"
		); // get values from DB
		
		$nokName=new FormField ( "nokName", "nokName", "Name of Next of Kin*", "nokName" );
		$nokPhone=new FormField ( "nokPhone", "nokPhone", "Phone Number of Next of Kin*", "nokPhone" );
		$nokEmail=new FormField ( "nokEmail", "nokEmail", "Email of Next of Kin", "nokEmail" );
		$nokRelationship=new SelectField ( "Relationship with Next of Kin","nokEmail", "nokEmail", "nokEmail",$options);//Label name
																														//Label For
																														//select Name
		
																													//select ID
																														//Options
																														
		
		
		
		
		
		$nextOfAKin=
			$this->container->getTR () .
				$this->container->getTD () . $nokName->getField () . $this->container->getTdEnd () .
				$this->container->getTD () .$nokRelationship->getSelectField().$this->container->getTdEnd () .
			$this->container->getTrEnd ().		
			$this->container->getTR () .
				$this->container->getTD () .$nokPhone->getField () .$this->container->getTdEnd () .
				$this->container->getTD () .$nokEmail->getField () .$this->container->getTdEnd () .		
			$this->container->getTrEnd ();
		
		return $nextOfAKin;
	}
	
	
	function studentOrNormalPA(){
		$divelement="<div class=example>";
		$enddivElement="</div>";
		$iSstudentpaReturn=array("Please select One");
		
		
		
		
		$labelName=array("Personal Accident Cover","Student Personal accident Cover");
		$labelForTags=array("pa","spa");//Same as ID
		$radioValue =array("pa","spa");
		$radioID=array("pa","spa");
		
		 for($i=0;$i<2;$i++){
		 	$iSstudentpa=new RadioField($labelName[$i],$labelForTags[$i],"paORStudent",$radioID[$i],$radioValue[$i]);
		 	array_push($iSstudentpaReturn, $iSstudentpa->getRadioField());		 	
		 }
		 
		 return $divelement.$this->container->containerwithNoHeader($iSstudentpaReturn).$enddivElement;
		 
		 //return $this->container->containerwithNoHeader($iSstudentpaReturn);
	}
	
	
	function coverDetails(){
		
		$leftHeaders=array(
			"A. Accidental Death",
			"B. Accidental Permanent Total Disablement (Continental Scale Benefts)",
			"C. Hospital Cash",
			"D. Accidental Temporary , Total Disablement, (Loss of Income) per week maximum 104 weeks",
			"E. Accidental Medical Expense",
			"F. Artifcial Appliance (Accidental Loss)",
			"G. Last Expense (Accidental Death)"
		);
		
		$columnAtableData=array(
				750000,
				750000,
				2000,
				3500,
				75000,
				10000,
				10000
		);
		
		
		$columnBtableData=array(
				1000000,
				1000000,
				2500,
				5000,
				100000,
				20000,
				15000				
		);
		
		$columnCtableData=array(
			2000000,
			2000000,
			5000,
			10000,
			200000,
			25000,
			25000			
		);
		
		
		$columnDtableData=array(
			3000000,
			3000000,
			7500,
			15000,
			250000,
			30000,
			35000
		);
		
		$columnEtableData=array(
			5000000,
			5000000,
			8500,
			20000,
			300000,
			35000,
			50000
		);
		
		$columnFtableData=array(
			7500000,
			7500000,
			10000,
			25000,
			400000,
			40000,
			50000
		);
		
		$columnGtableData=array(
				10000000,
				10000000,
				20000,
				30000,
				500000,
				50000,
				75000
		);
		
		
		$tableHeaders=array("Options","A","B","C","D","E","F","G");
		
		
		
		
		$coverDetails=
		$this->container->getcustomContainerStart(count($tableHeaders)).//colspan			
				$this->container->getTableheader($tableHeaders).				
				$this->returnTable($leftHeaders, $columnAtableData,$columnBtableData,$columnCtableData,$columnDtableData,
					$columnEtableData,$columnFtableData,$columnGtableData).				
			$this->container->getContainerEnd();
		return $coverDetails;
	}
	
	function returnTable($paramleftHeaders, $paramcolumnAtableData,$paramcolumnBtableData,$paramcolumnCtableData,$paramcolumnDtableData,
			$paramcolumnEtableData,$paramcolumnFtableData,$paramcolumnGtableData){
		
		
		
				
		$tableData="";
		for ($i=0;$i<7;$i++){
			
			$tableData=$tableData.$this->container->getTR ().
				$this->container->getLeftheaderTd($paramleftHeaders[$i]).
					$this->container->getNumberTd($paramcolumnAtableData[$i]).
					$this->container->getNumberTd($paramcolumnBtableData[$i]).
					$this->container->getNumberTd($paramcolumnCtableData[$i]).
					$this->container->getNumberTd($paramcolumnDtableData[$i]).
					$this->container->getNumberTd($paramcolumnEtableData[$i]).
					$this->container->getNumberTd($paramcolumnFtableData[$i]).
					$this->container->getNumberTd($paramcolumnGtableData[$i]).
			$this->container->getTrEnd ();
		}
		
		return $tableData.$this->returnSelectetableRadio();		
	}
	
	function returnSelectetableRadio(){
		$divelement="<div class=example>";
		$enddivElement="</div>";
		$radioValues=array("A","B","C","D","E","F","G");
		$radioLabel="";
		$radioLabelfortag=array();
		$radioID=array("A","B","C","D","E","F","G");
		
		
		$strRadioButtons=$this->container->getControlsTD("");
		
		
		for($i=0;$i<count($radioValues);$i++){
			$coverOption=new RadioField(" ",$radioID[$i],"coverOption",$radioID[$i],$radioValues[$i]);
			$strRadioButtons=$strRadioButtons.$this->container->getControlsTD($coverOption->getRadioField());
		}
		
		return $this->container->getTR ().
		$this->container->getControlsTD(" ").$divelement.$strRadioButtons.$enddivElement.
				$this->container->getTrEnd ();
	}
	
	function declaraions(){		
		$tableHeaders=array("Question","Tick where applicable");
		return $this->container->getcustomContainerStart(count($tableHeaders)).
			$this->container->getTableheader($tableHeaders).
			$this->declationsInfo().			
			$this->container->getContainerEnd();		
	}
		
	
	
	function declationsInfo(){
		$declarationDetails="";
		$declarationQuestions=array(
				"1(a) Have you previously held Personal Accident cover ?",
				"1(b) If yes above , name the insurer:",
				"2(a) Are you free from any physical disability or mental illness to the best of your knowledge ?",
				"2(b) If No above, give details:",
				"3 Give details of all accidents you have sustained in the last five (5) years :",
				"4(a) Are you engaged in any of the  excluded activities / occupations ? *",
				"5(b) If Yes, would you like an extension of cover to these activities ?*",
		);
		
		$paramOptions=array(
				"Yes",
				"No"
		);
		
		$selectCoverBefore=new SelectField("", "CoverBefore","CoverBefore","CoverBefore",$paramOptions);
		$nameofInsurer=new FormField("nameofinsurer","nameofinsurer", " ", "nameofinsurer");
		$diabilityKnowledge=new SelectField("", "diabilityKnowledge","diabilityKnowledge","diabilityKnowledge",$paramOptions);
		$diabilityDetails=new FormField("diabilityDetails","diabilityDetails", " ", "diabilityDetails");
		$allAccidentsIn5years= new FormField("allAccidentsIn5years","allAccidentsIn5years", " ", "allAccidentsIn5years");
		$excludedActivities=new SelectField("", "excludedActivities","excludedActivities","excludedActivities",$paramOptions);
		$activitiesExtenstionOfCover=new FormField("activitiesExtenstionOfCover","activitiesExtenstionOfCover", " ", "activitiesExtenstionOfCover");
		
		
		$declarationAnswers=array(
				$selectCoverBefore->getSelectField(),
				$nameofInsurer->getField(),
				$diabilityKnowledge->getSelectField(),
				$diabilityDetails->getField(),
				$allAccidentsIn5years->getField(),
				$excludedActivities->getSelectField(),
				$activitiesExtenstionOfCover->getField()
		);		
		
		for($i=0;$i<count($declarationQuestions);$i++){
			$declarationDetails=$declarationDetails.
				$this->container->getTR ().//start row
					$this->container->getTD1($declarationQuestions[$i]).
					$this->container->getTD1($declarationAnswers[$i]).
				$this->container->getTrEnd ();//end row
		}
		
		return $declarationDetails;
	}
	
	function finalDeclaration(){
		return 
		$this->container->getcustomContainerStart(1).
			$this->container->getTR ().
				$this->container->getTD1("I warrant that the above statements made by me or on my behalf are true and complete to the best of my knowledge and belief and I agree that this proposal shall be the basis
of the contract between me and the company. I also declare that no insurer has ever declined, refused to renew, terminated my insurance, increased my insurance premium or
imposed special terms.<br><br>
I agree to accept a policy in the company’s usual form for this class of insurance").
			$this->container->getTrEnd ().
		$this->container->getContainerEnd();
	}
	
	function buttonControls(){		
		$submitButton = new Button("submit","GetQuote", "submit", "submit");
		$resetButton = new Button("reset","ResetForm", "reset", "reset");
		
		return 
		$this->container->getcustomContainerStart(1).
			$this->container->getTR ().
				$this->container->getControlsTD($submitButton->getButton()).
				$this->container->getControlsTD($resetButton->getButton()).
			$this->container->getTrEnd ().
		$this->container->getContainerEnd();				
	}
	
	
	function buttonNext(){
		$nextButton = new Button("nextbtn","next", "button", "nextbtn","");
		//var_dump($nextButton->getButton());
		
		
		return $this->container->getControlsContainer(array($nextButton->getButton()));
	}
	
	function step1(){
		$legendData="";
		$data=$this->studentOrNormalPA().$this->coverDetails()."<br>".$this->buttonNext();
		
		return $this->container->fieldset($legendData, $data);
	}
	
	
	function step2(){
		$legendData="";
		
	}
}


