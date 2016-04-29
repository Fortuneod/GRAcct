<?php
	ini_set('display_errors',0);
	
	
	$pagecontents = <<< EOD
<!DOCTYPE html>
<html>
	<head>
		<title>GR-ACCT | COMPANY SETUP</title>
		<link rel="shortcut icon" href="grlogo.png" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="alert.js"></script>
	</head>
	
	<body>
	
	<div id="container">
	<header>
	<img src="grlogo.png" style="width:250px;height:95%;margin:auto;" /> ...Accounting Solutions
	</header>
	<content>
	<div id="left">
	Congratulations.<br><br>
	Company Setup Complete<br><br>
	This program is developed to meet the needs of Accountants, Managers and Administrators. <br><br>
	We encourage you to send your comments, complaints and suggestions to: <br><br>
	<address>support@gracct.com</address>
	</div>
	<div id="right" style="padding-left:10px;">
	<h2 align="center"><u>COMPANY SETUP COMPLETE</u></h3><br>
	<b><em>Congratulations</em></b><br><br>
	You have successfully set up your company/organisation. <br><br>
	The following Accounts have been created <br>
	<ul>
	<li>Assets</li>
	<li>Liabilities</li>
	<li>Income</li>
	<li>Expenditure</li>
	</ul><br>
	In addition, the following tables have been created
	<ul>
	<li>Users - For Other Users to be created by the Admin</li>
	<li>Staff - To Keep Record of Employees</li>
	<li>Allowance - For Employees' Salary/Wages Allowance as will be specified by the Admin</li>
	<li>Deductions - For Employees' Salary/Wages Deductions such as Tax, etc.</li>
	<li>Clients - For Other Organisations connected to Your Organisation</li>
	</ul>
	<br>
	<b>Payroll and Financial Statements will be generated subsequently as at when due.</b>	
	<br>
	<a href="../index.php" style="text-decoration:none;"><button style="color:#fff;text-shadow:1px 1px 1px #000;background:#3C0;font-size:24px;margin-top:25px;padding:7px;border:3px solid #fff inset;border-radius:7px;height:auto;">Click Here To Begin</button></a>
	</div>
	</content>
	</div>	
	<footer>Copyright &copy; and Support - GR-ACCT</footer>
	</body>
	</html>
EOD;
	
	include("connect.php");
	
	require_once("Tables.php");
	
	session_start();
	$company=$_SESSION['company'];
	$address=$_SESSION['address'];
	$city=$_SESSION['city'];
	$state=$_SESSION['state'];
	$country=$_SESSION['country'];
	$phone=$_SESSION['phone'];
	$email=$_SESSION['email'];
	$type=$_SESSION['type'];
	$staff=$_SESSION['staff'];
	$currency=$_SESSION['currency'];
	$logo=$_SESSION['logo'];	
	$adminus=$_SESSION['adminus'];
	$adminpw=$_SESSION['adminpw'];
	
	
	$a=mysql_query("INSERT INTO `login_admin` VALUES('', '$adminus', '$adminpw', 'Administrator', 'Administrator')");
	
	$b=mysql_query("INSERT INTO `details` VALUES('', '$company', '$address', '$city', '$state', '$country', '$phone', '$email', '$type', '$staff', '$currency', '$logo')");
	
	if($a&&$b){
		echo $pagecontents;
		}

?>
	
	
	
	
	
	
	
	