<?php
/*
NAME: authenticate
DESCRIPTION: authenticates user login against user database
REQUIRES:
==============================================================================================
CHANGE LOG:

==============================================================================================
IN-WORK:

==============================================================================================
CHANGE REQUESTS:


OUTLINE:
authenticate.php:
	check db for user
if good:
	set session cookie values:
		Authorized
		Admin
		Commenter
		UserName
		UserEmail
	Redirect to /admin or allow commenting as appropriate	<< HOW TO DIFFERENTIATE?
else:
	clear session cookie
	redirect to fail.php with fail message

*/


include "includes/application_top.php";
include "../../../utility/dbconnect.php";


//get user
$query = "SELECT * FROM Users";		//HOW TO pass parameters securely?


//clean up
mysqli_free_result($result);	//free result set
mysqli_close($conn);					//close db connection

?>
