<!DOCTYPE html>
<html>
	<head>
		<title>GR-ACCT | COMPANY SETUP</title>
		<link rel="shortcut icon" href="grlogo.png" />
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
	<div id="container" style="height:450px;">
	<header>
	<img src="grlogo.png" style="width:250px;height:95%;margin:auto;" /> ...Accounting Solutions
	</header>
	<content>
	<div id="left">
	Welcome.<br><br>
	This is Step 2 in setting up your company. <br><br>
	Fill in the necessary information and we will take care of the rest.<br><br>
	We encourage you to send you comments, complaints and suggestions to: <br><br>
	<address>support@gracct.com</address>
	</div>
	<div id="right">
	<h2 align="center"><u>SETUP COMPANY - STEP 2</u></h3>
	<form action="confirm.php" method="post" enctype="multipart/form-data">
	<table border="0" cellspacing="3" cellpadding="3">
	<tr>
	<td>Database Name:</td>
	<td><input type="text" name="dbname" size="40" value="gracct" readonly/></td>
	</tr>
	<tr>
	<td>Admin Username:</td>
	<td><input type="text" name="adminus" size="40" placeholder="Login Name for the Administrator"/></td>
	</tr>
	<tr>
	<td>Admin Password:</td>
	<td><input type="password" name="adminpw" size="40" placeholder="Password for the Administrator"/></td>
	</tr>
	<tr>
	<td>Company Logo:</td>
	<td><input type="file" name="logo" /></td>
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
