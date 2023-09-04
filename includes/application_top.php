<?php
//set parameters and perform functions applicable to entire application

//headers as reccommended by: https://www.twilio.com/blog/a-http-headers-for-the-responsible-developer
header('Strict-Transport-Security: max-age=1000; includeSubDomains; preload');
header('Content-Security-Policy: upgrade-insecure-requests');


//reject unauthorized HTTP methods for security
$requestType = $_SERVER['REQUEST_METHOD'];
if(!($requestType == 'GET' | $requestType == 'POST')){
	exit("Invalid request type.");
}

error_reporting(0);		// Turn off all error reporting by default

session_start();

//set useful variables
$thisServer = $_SERVER['SERVER_NAME'];
$appPath = $_SERVER['DOCUMENT_ROOT'];
$temp = explode("/",$_SERVER['SCRIPT_NAME']);
$thisFile = $temp[count($temp)-1];

//set environment-specific variables and settings
$thisEnvironment = "";
switch($thisServer){
	case 'localhost':
		$thisEnvironment = "LOCAL";	//local development environment
		error_reporting(E_ERROR | E_WARNING | E_PARSE);		// Report simple running errors
		break;
	case 'UNKNOWN':
		$thisEnvironment = "DEV";	//development environment
		break;
	case 'kolomoko.com':
		$thisEnvironment = "PROD";	//production environment
		break;
		error_reporting(0);		// Turn off all error reporting
	default:
		$thisEnvironment = "PROD";	//default is the most secure/conservative option
		error_reporting(0);		// Turn off all error reporting
}

//FROM PORTFOLIOPLUS:

//For security, if this is the production web site and user is NOT using SSL, redirect to secure URL
// if($_SERVER['HTTP_HOST']=='www.portfolioplus.biz' && $_SERVER['HTTPS']!='on'){
// 	header("location:https://www.portfolioplus.biz/pplus/login.php");
// }

 ?>
