<?php
/*
NAME: login
DESCRIPTION: login form for administrator or commenter
REQUIRES:
==============================================================================================
CHANGE LOG:

==============================================================================================
IN-WORK:

==============================================================================================
CHANGE REQUESTS:


*/

include "includes/application_top.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href="css/thisapp.css" rel="stylesheet" type="text/css" media="all">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>@media only screen {main {margin:0 auto; max-width:30em;}</style>
		<style>
			html {
				/* force linear gradient to fill screen */
				height: 100%;
			}
			div.box1{
				border: 1px solid silver;
				width: 400px;
				align-self: center;
				margin: 70px;
				padding: 20px;
			}

			table.loginTable tr td{
				padding: 10px;
			}

			.textInput{
				width:250px;
				font-size: 20px;
				background-color: silver;
				border:none;
			}

			.loginButtons{
				width:120px;
				height:32px;
				font-size: 18px;
				background-color: silver;
				border:none;
			}

		</style>
		<script language="JavaScript" type="text/javascript">
			function DoLogin(){
				window.alert("login!");
				//validate form
				//redirect to authenticate.php
				//HOW TO pass secure pw to authenticate.php?
			}
		</script>

	</head>
	<body>
		<a id="top"></a>
    <header><a href="/">Kolomoko home</a>:<a href="/dev/blog">blog</a>:login</header>

		<main>

    <h1>Kolomoko's blog</h1>
		<hr noshade="noshade"/>

		<div align="center" style="width:100%;">
			<div class="box1">

				<table class="loginTable">
					<tr>
						<td align="right">
							Username:
						</td>
						<td align="left">
							<input type="text" name="UserName" class="textInput" />
						</td>
					</tr>
					<tr>
						<td align="right">
							Password:
						</td>
						<td align="left">
							<input type="Password" name="Password" class="textInput" />
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="button" value="LOGIN" class="loginButtons" onclick="JavaScript:DoLogin();"/>
							<input type="button" value="CANCEL" class="loginButtons" onclick="javascript:window.location='../blog/';"/>
						</td>
					</tr>
				</table>
			</div>
		</div>

	</body>
</html>
