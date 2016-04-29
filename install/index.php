<?php
	ini_set('display_errors',0);
	
	mysql_connect("localhost", "root", "");
	mysql_query("CREATE DATABASE IF NOT EXISTS `gracct`");
	mysql_select_db("gracct");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `company` (
	`id` int(11) unsigned not null auto_increment,
	`dbname` varchar(20) unique not null,
	
	PRIMARY KEY(id)
	)ENGINE=InnoDB CHARSET=default AUTO_INCREMENT=1");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>GR-ACCT | COMPANY SETUP</title>
		<link rel="shortcut icon" href="grlogo.png" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="alert.js"></script>
	</head>
	
	<body onload="ShowProgress()">
	<div id="progressBackgroundFilter">
		
            

        </div>

        <div id="processMessage">

            <div style="position: relative; width: 100%; height: 50%;">

                <div style="height: 20px; text-align: right; border-bottom: black 2px solid; padding-bottom: 10px;">

                    
                </div>

                <h1 style="color: Red; text-decoration:underline;">IMPORTANT!!!</h1>

                <p style="font-size:16px;padding:5px;"><b style="font-size:18px;">Welcome to GR-ACCT.</b><br><br>This program is designed to assist Accountants, Managers and Administrators in day-to-day financial accounting.<br>The program is especially useful in tracking income records, expenditure as well as managing Assets, Liabilities, Organizing and Generating payrolls. and a few others things.</p><br>
				<div id="apply" style="width:95%;margin-right:2%;font-size:16px;">
	<h2 style="text-decoration:underline;padding-bottom:5px;font-size:24px;">Key Notes</h2>
	We are aware that this program is not 100% what you need and so we are working to develop other releases. <br> Please endevor to drop your comments, complaints and suggestions to <i>support@gracct.com</i> to enable us achieve greater results.<br><br>
	To use the program, you have to 
	<ul>
	<li>Set up your company/organisation.</li>
	<li>Set up your database and Admin Details</li>
	<li>The Admin will create other users. The admin has Total control over all aspects of the program while other users will have their limitations.</li>
	<li>A number of Accounts and Table will be created during set up. The Admin can create others if desired. Information will be entered from the User Interface after full set up.</li>
	</ul><br><br>	
	</div>
	<div id="apply2" style="width:80%;font-size:16px;"> 
	<h4 style="text-decoration:underline;padding-bottom:5px; font-size: 20px;">To Begin Set Up</h4>
	Click <button style="font-weight:bold;font-size:24px;color:blue;background:none;border:none;" onclick="HideProgress();"><i>here</i></button>&nbsp; to begin setting up your company/organisation.
	</div>
			      
                                                                 

            </div>



            </div>
	
	<div id="container">
	<header>
	<img src="grlogo.png" style="width:250px;height:95%;margin:auto;" /> ...Accounting Solutions
	</header>
	<content>
	<div id="left">
	Welcome.<br><br>
	Please follow the steps on your right carefully, in order to set up your company/organisation. <br><br>
	This program is developed to meet the needs of Accountants, Managers and Administrators. <br><br>
	We encourage you to send you comments, complaints and suggestions to: <br><br>
	<address>support@gracct.com</address>
	</div>
	<div id="right">
	<h2 align="center"><u>SETUP COMPANY</u></h3>
	<form action="setup.php" method="post" enctype="multipart/form-data">
	<table border="0" cellspacing="3" cellpadding="3">
	<tr>
	<td>Company Name:</td>
	<td><input type="text" name="company" size="40" required/></td>
	</tr>
	<tr>
	<td>Company Address:</td>
	<td><textarea name="address" cols="40" rows="7"  required></textarea></td>
	</tr>
	<tr>
	<td>City:</td>
	<td><input type="text" name="city" size="20"  required/></td>
	</tr>
	<tr>
	<td>State/Province:</td>
	<td><input type="text" name="state" size="20"  required/></td>
	</tr>
	<tr>
	<td>Country:</td>
	<td><input type="text" name="country" size="20"  required/></td>
	</tr>
	<tr>
	<td>Company Phone:</td>
	<td><input type="number" name="phone" size="40"  required/></td>
	</tr>
	<tr>
	<td>Company Email:</td>
	<td><input type="email" name="email" size="40" /></td>
	</tr>
	<tr>
	<td>Company Type:</td>
	<td><select name="type" required><option value="">-Select-</option><option>Sales/Rental</option><option>Sole Proprietorship</option><option>Entertainment</option><option>Private Partnership</option><option>Limited Liability</option><option>Tax Monitoring</option><option>Revenue Board</option><option>Agency</option><option>Banking</option></option><option>NGO</option><option>Non-Profit</option><option>Religious</option><option>Others</option></select>
	</td>
	</tr>
	<tr>
	<td>Staff Size:</td>
	<td><select name="staff" required><option value="">-Select-</option><option>1 - 10</option><option>10 - 25</option><option>25 - 50</option><option>50 - 100</option><option>100 - 200</option><option>200 - 500</option></select>
	</td>
	</tr>
	<tr>
	<td>Currency Symbol:</td>
	<td><select name="currency" required><option value="">-Select-</option><option>£</option><option>$</option><option>€</option><option>Rs</option><option>N</option><option>Y</option></select>
	</td>
	</tr>
	<tr>
	<td align="center" colspan="2"><input type="submit" value="Continue" style="color:#fff;text-shadow:1px 1px 1px #000;background:#3C0;font-size:24px;margin-top:25px;padding:7px;border:3px solid #fff inset;border-radius:7px;height:auto;" />
	</table>
	</form>
	</div>
	</content>
	</div>	
	<footer>Copyright &copy; and Support - GR-ACCT</footer>
	</body>
	</html>
