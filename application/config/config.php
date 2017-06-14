<?php 
if(!isset($_SESSION))
{
	session_start();
}
$_SESSION['sysusers_id']=1;
error_reporting(E_ERROR | E_PARSE);
define("EMAIL_cc", "mgathoka@uap-group.com");
define("EMAIL_bcc","wachiragathoka@gmail.com");
define("TITLE","easyDIRECT");

/***** Bank details *****/
define("BANKNAME","Kenya Commercial Bank");
define("ACCOUNTNAME","UAP INSURANCE COMPANY LIMITED");
define("ACCOUNTNUMBER","1107154170");
define("BRANCH","Moi Avenue");
define("BANKSWIFTCODE","KCBLKENX");
define("BANKSORTCODE","-");
define("MPESA","260260");