<?php
include 'FormComponents/FormField.php';
include 'FormComponents/FormContainer.php';

 $firstNamefield=new FormField("firstName","firstName","First Name","firstName");
 $middleName=new FormField("mName","mName","Middle Name","mName");
 $lastName= new FormField("lname","lname","Last Name","lname");
 
 $container=new FormContainer();
 

 
 $txt_nextofakin=new FormField("nofkin","nofkin","Next of Kin","nofkin");
 
 
 $selectValues=array("Spouse"=>"Spouse","Children"=>"Children","Spouse"=>"Spouse","Children"=>"Children");// get values from DB
 
 $txt_relationshiptonok=new SelectField($selectValues);