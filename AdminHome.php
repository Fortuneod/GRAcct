<?php
ini_set('display_errors',0);

	session_start();
	if(isset($_SESSION['admin'])) {
		
		$username=$_SESSION['admin'];
	
	include("Details.php");
		
		
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $cmpname; ?> | Home</title>
<link rel="shortcut icon" href="Images/<?php echo $logo; ?>" type="icon/image"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="popup.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
a {text-decoration: none;}
#staffview table tr td:nth-child(odd){text-align:left;width:80px;}
#staffview table tr td:nth-child(even){text-align:center;color:#f00;background:#ccc;}
</style>
<script type="text/javascript">
	function edit() {
	jQuery.ajax({
	url: "checkpic.php",
	data:'colm='+$("#colm").val(),
	type: "POST",
	success:function(data){
		$("#ninfo").html(data);
	},
	error:function (){}
	});
}

function cliented() {
	jQuery.ajax({
	url: "checkclient.php",
	data:'clientid='+$("#clientid").val(),
	type: "POST",
	success:function(data){
		$("#clientview").html(data);
	},
	error:function (){}
	});
}

function staffed() {
	jQuery.ajax({
	url: "staffview.php",
	data:'staffid='+$("#staffid").val(),
	type: "POST",
	success:function(data){
		$("#staffview").html(data);
	},
	error:function (){}
	});
}

</script>
</head>
<body>
<div class="main">
<header>
<h1><?php echo $cmpname; ?></h1>
<h2></h2>
</header>
<p style="font-size:20px;font-weight:bold;padding:10px">Logged In As: <span style="text-transform:uppercase;"><?php echo $username; ?></span><span style="float:right;"><a href="Admin_Logout.php"><input type="button" value="Logout"  style="background:#f66;"></a></span></p>
<hr style="border-color:#008;"></hr>
<fieldset class="login0">
	<input type="button" value="Home"  style="margin-bottom:5px;margin-top:5px;background:#3C0;" onClick="location.reload();"/><br>
	<input type="button" value="Users Records"  style="margin-bottom:5px;margin-top:5px;background:#3C0;" id="person"/><br>
	<input type="button" value="Clients"  style="margin-bottom:5px;margin-top:5px;background:#3C0;" id="finance"/><br>
	<input type="button" value="Staff Records"  style="margin-bottom:5px;margin-top:5px;background:#3C0;" id="staff"/><br>
	<input type="button" value="Accounts"  style="margin-bottom:5px;margin-top:5px;background:#3C0;" id="stock"/><br>
</fieldset>

<fieldset class="login02">
<h1 style="font-size:72px;padding-top:30px;font-family:Arial;color:#ff0;text-shadow:2px 2px 2px #f00">WELCOME<br>TO<br><?php echo $cmpname; ?></h1>
</fieldset>

<!--USER MAIN-->
<fieldset class="login2">
<table border="0" align="center" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr>
<td align="center"><img src="Images/img6.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="New User Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newuser"/></td>
<td align="center"><img src="Images/img4.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Update User Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="upduser"/></td>
</tr>
<tr>
<td align="center"><img src="Images/img3.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="View Users Record(s)"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewusers"/></td>
<td align="center"><img src="Images/img5.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Delete/Remove User"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="removeuser"/></td>
</tr>

</table>
</fieldset>



<!--CLIENTS MAIN-->
<fieldset class="login21">
<table border="0" align="center" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr>
<td align="center"><img src="Images/img2.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Register New Client"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newclient"/></td>
<td align="center"><img src="Images/img5.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="View Clients"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewclients"/></td>
<td align="center"><img src="Images/inco.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Check Remittance(s)"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="checkclient"/></td>
</table>
</fieldset>

<!--STAFF MAIN-->
<fieldset class="login23">
<table border="0" align="center" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr>
<td align="center"><img src="Images/staff.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="New Staff Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newstaff"/></td>
<td align="center"><img src="Images/suped.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Update Staff Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="updatestaff"/></td>
</tr>
<tr>
<td align="center"><img src="Images/stf.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="View Staff Record(s)"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewstaff"/></td>
<td align="center"><img src="Images/supdel.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Delete Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="deletestaff"/></td>
</tr>
</table>
</fieldset>

<!--Accounts MAIN-->
<fieldset class="login22">
<table border="0" align="center" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr>
<td align="center"><img src="Images/warehouse.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Assets"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="assetmain"/></td>
<td align="center"><img src="Images/expenses.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Expenditure"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="expensemain"/></td>
<td align="center"><img src="Images/income.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Income"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="incomemain"/></td>
<td align="center"><img src="Images/img1.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Liabilities"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="liabilitymain"/></td>
<td align="center"><img src="Images/exp.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Payroll"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="payrollmain"/></td>

</tr>
</table>
</fieldset>

<!--NEW User RECORD-->
<fieldset class="login3" style="color:#000;"><legend align="center" style="font-size:24px;text-decoration:underline;">NEW USER RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newuserback" style="background:#f66;"></span><br/><br/>
<form action="newuser.php" method="post">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;color:#008;">
<tr>
<td style="border-right:hidden;text-align:right;">ID: </td>
<td><input type="text" name="userid" size="40" value="User<?php print rand(1,1000) ?>" readonly style="background:transparent;color:#000;font-weight:bold;border:none" /></td>
<td>Password:</td>
<td><input type="text" name="password" value="<?php print substr(md5(rand()), 0, 8); ?>" readonly /></td>
</tr>
<tr>
<td style="border-right:hidden;text-align:right;">Full Name: </td>
<td><input type="text" name="fullname" size="40" /></td>
<td>Role:</td>
<td><select name="role"><option value="">-Choose Role-</option><option>Admin Officer</option><option>Accountant</option><option>Accounts Officer</option></select></td>
</tr>
<tr>
<td align="center" colspan="4" style="border-right:hidden;border-left:hidden;border-bottom:hidden;"><input type="submit" value="Submit"  style="margin-top:25px;"/></td>
</tr>
</table>
</form>
<br><br>
</fieldset>

<!--EDIT USER RECORD-->
<fieldset class="login10" style="color:#000;"><legend align="center" style="font-size:24px;text-decoration:underline;">EDIT/UPDATE USER RECORD</legend>
<span style="float:left;"><input type="button" value="<== GO BACK" id="upduserback" style="background:#f66;"></span><br/><br/>
<form action="updateuser.php" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;color:#008;">
<tr>
<td style="border-right:hidden;text-align:right;">User ID: </td>
<td><select name="userid"><option>--Choose--</option>
	<?php
	include("connect.php");
	$query=mysql_query("select * from `login_users`");
	while($dt=mysql_fetch_array($query)) {
		$sid=$dt['username'];
	?>
	<option><?php echo $sid; ?></option>
	<?php		
		}
	?>
	</select>
	</td>
<td style="border-right:hidden;text-align:right;">Info to Edit: </td>
<td><select name="colm" id="colm" onChange="edit();"><option>--Choose--</option><option value="username">Username</option><option value="password">Password</option><option value="role">Role</option></select></td>
</tr>
<tr id="ninfo">
</tr>
<tr>
<td align="center" colspan="4" style="border-right:hidden;border-left:hidden;border-bottom:hidden;"><input type="submit" value="Update"  style="margin-top:25px;"/></td>
</tr>
</table>
</form>
<br><br>
</fieldset>

<!--<fieldset class="login8" style="color:#000;"><legend align="center" style="font-size:24px;text-decoration:underline;">PERSONAL RECORDs</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="viewpersonback" style="background:#f66;"></span><br/><br/>
<table border="0" align="center" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr>
<td align="center"><img src="Images/img6.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="All Personal Records"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewallperson"/></td>
<td align="center"><img src="Images/img7.png" width="100" height="100" style="margin-bottom:-10px;"/><br><input type="button" value="Individual Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewindperson"/></td>
</tr>

</table>
</fieldset>-->

<!--VIEW ALL USERS RECORD-->
<fieldset class="login9" style="color:#000;"><legend align="center">ALL USERS RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="viewusersback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr style="background:#fff;">
<td>ID</td>
<td>Full Name</td>
<td>Username</td>
<td>Password</td>
<td>Role</td>
</tr>
<?php
ini_set('display_errors',0);

	include("connect.php");
	
	$sql="SELECT * FROM `login_users`";
	$r=mysql_query($sql);
	while($row=mysql_fetch_array($r)) {
		$id=$row['id'];
		$fname=$row['name'];
		$uname=$row['username'];
		$pw=$row['password'];
		$role=$row['role'];
	?>
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $fname; ?></td>
<td><?php echo $uname; ?></td>
<td><?php echo $pw; ?></td>
<td><?php echo $role; ?></td>
</tr>

<?php
	}
?>

</table>
</fieldset>

<!--REMOVE USER-->
<fieldset class="login11" style="color:#000;"><legend align="center">REMOVE USER</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="removeuserback" style="background:#f66;"></span><br/><br/>
<form action="removeuser.php" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:100%;margin:auto;">
<tr>
<td align="right">User:</td>
<td>
	<select name="userid"><option value="">-Select User-</option>
<?php
ini_set('display_errors',0);

	include("connect.php");
	
	$sql2="SELECT * FROM `login_users`";
	$r2=mysql_query($sql2);
	while($rw=mysql_fetch_array($r2)) {
		$sd=$rw['username'];	
?>
<option><?php echo $sd; ?></option>
<?php
	}
?>
</select>
</td>
</tr>
<tr>
<td align="center" colspan="2" style="border-right:hidden;border-left:hidden;border-bottom:hidden;"><input type="submit" value="Remove User"  style="margin-top:25px;"/></td>
</tr>
</table>
</form>
<br><br>
</fieldset>

<!--NEW CLIENT REGISTRATION-->
<fieldset class="login4" style="color:#000;"><legend align="center">NEW CLIENT RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newclientback" style="background:#f66;"></span><br/><br/>
<form action="newclient.php" method="post">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:60%;margin:auto;">
<tr>
<td>Client ID: </td>
<td><input type="text" name="clientid" value="BCL<?php print rand(1, 100000); ?>" size="40" /></td>
<td>Client Name:</td>
<td><input type="text" name="company" size="50"/></td>
</tr>
<tr>
<td>Client Type:</td>
<td><select name="type"><option value="">-Select-</option><option>Tax Payer</option><option>Debtor</option><option>Creditor</option>
</select></td>
<td>Address: </td>
<td><textarea name="address" cols="35" rows="5" maxlength="201"></textarea></td>
</tr>
<tr>
<td>Client Phone:</td>
<td><input type="text" name="phone" size="40"/></td>
<td>Remark: </td>
<td><textarea name="remark" cols="35" rows="5"></textarea></td>
</tr>
<tr>
<td align="center" colspan="4"><input type="submit" value="Submit"  style="margin-top:25px;"/></td>
</tr>
</table>
</form>
</fieldset>

<!--VIEW CLIENTS RECORDS-->
<fieldset class="login5" style="color:#000;"><legend align="center">CLIENTS</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="viewclientsback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:75%;margin:auto;"><caption align="center" style="color:#f00;">Tax Payers</caption>
<tr style="background:#fff;">
<td>Client ID: </td>
<td>Client Name: </td>
<td>Phone: </td>
</tr>
<?php 
	$cl=mysql_query("SELECT * FROM `clients` WHERE type='Tax Payer'");
	while($clr=mysql_fetch_array($cl)){
		$clid=$clr['clientid'];
		$clnm=$clr['company'];
		$clph=$clr['phone'];
	?>
	<tr>
<td><?php echo $clid; ?></td>
<td><?php echo $clnm; ?></td>
<td><?php echo $clph; ?></td>
</tr>
	<?php
	}
?>
</table><br><br>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:75%;margin:auto;"><caption align="center" style="color:#f00;">Debtors</caption>
<tr style="background:#fff;">
<td>Client ID: </td>
<td>Client Name: </td>
<td>Phone: </td>
</tr>
<?php 
	$cl=mysql_query("SELECT * FROM `clients` WHERE type='Debtor'");
	while($clr=mysql_fetch_array($cl)){
		$clid=$clr['clientid'];
		$clnm=$clr['company'];
		$clph=$clr['phone'];
	?>
	<tr>
<td><?php echo $clid; ?></td>
<td><?php echo $clnm; ?></td>
<td><?php echo $clph; ?></td>
</tr>
	<?php
	}
?>
</table><br><br>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:75%;margin:auto;"><caption align="center" style="color:#f00;">Creditors</caption>
<tr style="background:#fff;">
<td>Client ID: </td>
<td>Client Name: </td>
<td>Phone: </td>
</tr>
<?php 
	$cl=mysql_query("SELECT * FROM `clients` WHERE type='Creditor'");
	while($clr=mysql_fetch_array($cl)){
		$clid=$clr['clientid'];
		$clnm=$clr['company'];
		$clph=$clr['phone'];
	?>
	<tr>
<td><?php echo $clid; ?></td>
<td><?php echo $clnm; ?></td>
<td><?php echo $clph; ?></td>
</tr>
	<?php
	}
?>
</table>

</fieldset>

<!--CHECK CLIENT REMITTANCE-->
<fieldset class="login6" style="color:#000;"><legend align="center">REMITTANCE</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="checkclientback" style="background:#f66;"></span><br/><br/>
<table border="0" id="clientform" style="width:50%;">
	<tr>
	<td>Client ID:</td>
	<td><select name="clientid" id="clientid"><option value="">-Select-</option>
	<?php
	$clt=mysql_query("SELECT * FROM `clients` WHERE type='Tax Payer' || type='Debtor'");
	while($cltr=mysql_fetch_array($clt)) {
		$cid=$cltr['clientid'];
		?>
		<option><?php echo $cid; ?></option>
		<?php
		}
		?>
		</select>
		</td>
	<td><input type="button" value="Check" id="checkrem" onClick="cliented();" style="background:#3C0;color:#fff;"/></td>
	</tr>
</table>
<table id="client2" border="1" cellpadding="5" cellspacing="5" style="display:none;border-collapse:collapse;width:100%;margin:auto;">
<tr style="background:#fff;">
<td width="20%" style="word-wrap:break-word;">ClientID</td>
<td width="20%" style="word-wrap:break-word;">Amount</td>
<td width="20%" style="word-wrap:break-word;">Date</td>
<td width="30%" style="word-wrap:break-word;">Purpose</td>
<td width="10%" style="word-wrap:break-word;">Remark</td>


</tr>
<tr id="clientview">

</tr>

</table>

</fieldset>

<!--NEW STAFF RECORD-->
<fieldset class="login12" style="color:#000;"><legend align="center">NEW STAFF RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newstaffback" style="background:#f66;"></span><br/><br/>
<form action="newstaff.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:90%;margin:auto;">
<tr>
<td>STAFF ID: </td>
<td><input type="text" name="staffid" size="30" value="BIR<?php print rand(1, 10000); ?>" readnoly /></td>
<td>Surname: </td>
<td><input type="text" name="sname" size="30" />
</tr>
<tr>
<td>First Name: </td>
<td><input type="text" name="fname" size="30"/></td>
<td>Other Name: </td>
<td><input type="text" name="oname" size="30"/></td>
</tr>
<tr>
<td>Sex:</td>
<td><select name="sex"><option value="">-Select-</option><option>Male</option><option>Female</option></select></td>
<td>Birthday: </td>
<td><input type="text" name="day" size="5" placeholder="DD"/>/<input type="text" name="month" size="5" placeholder="MM"/>/<input type="text" name="year" size="7" placeholder="YYYY"/></td>
</tr>
<tr>
<td>Address: </td>
<td colspan="3"><textarea name="address" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td>Phone No: </td>
<td><input type="text" name="phone" size="30"/></td>
<td>Email Address: </td>
<td><input type="text" name="email" size="30"/></td>
</tr>
<tr>
<td>NOK: </td>
<td><input type="text" name="nok" size="30"/></td>
<td>NOK Address: </td>
<td><textarea name="nokaddress" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td>NOK Phone: </td>
<td><input type="text" name="nokphone" size="30"/></td>
<td>Dept: </td>
<td><input type="text" name="dept" size="30"/></td>
</tr>
<tr>
<td>Designation: </td>
<td><input type="text" name="design" size="30"/></td>
<td>Grade Level: </td>
<td><input type="text" name="grdlevel" size="30"/></td>
</tr>
<tr>
<td>Basic Salary: </td>
<td>N<input type="text" name="salary" size="28"/></td>
<td>Photo: </td>
<td><input type="file" name="photo"/></td>
</tr>
<tr>
<td align="center" colspan="4"><input type="submit" value="Submit"  style="margin-top:25px;"/></td>
</tr>
</table>
</form>
</fieldset>

<!--UPDATE STAFF RECORD-->
<fieldset class="login13" style="color:#000;"><legend align="center">UPDATE STAFF RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="updatestaffback" style="background:#f66;"></span><br/><br/>
<form action="updatestaff.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td>STAFF ID: </td>
<td><select name="staffid"><option value="">-Choose-</option>
		<?php
	$get=mysql_query("SELECT * FROM `staff_info`");
	while($rgt=mysql_fetch_array($get)){
		$sfd=$rgt['staffid'];
		?>
	<option><?php echo $sfd; ?></option>
	<?php
		}
	?>
	</select>
	</td>
<td>Update What?: </td>
<td><select name="colm"><option value="">-Choose-</option><option value="address">Address</option><option value="phone">Phone No</option><option value="email">Email</option><option value="dept">Department</option><option value="design">Designation</option><option value="gradelvl">Grade Level</option><option value="basicslry">Salary</option>
</tr>
<tr>
<td>New Info: </td>
<td><textarea name="newinfo" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td align="center" colspan="4"><input type="submit" value="Update"  style="margin-top:25px;"/></td>
</tr>
</table>
</form>
</fieldset>

<!--VIEW STAFF RECORD-->
<fieldset class="login14" style="color:#000;"><legend align="center">VIEW STAFF RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="viewstaffback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="VIEW ALL RECORDS"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewallstaff"/></td>
<td align="center"><br><input type="button" value="VIEW INDIVIDUAL RECORD"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewindstaff"/></td>
</tr>
</table>
</fieldset>

<!--ALL STAFF RECORD-->
<fieldset class="login16" style="color:#000;"><legend align="center">STAFF RECORDS</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="viewallstaffback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:90%;margin:auto;">
<tr style="background:#fff">
<td>STAFF ID</td>
<td>FULL NAME</td>
<td>SEX</td>
<td>DEPT</td>
<td>DESIGNATION</td>
</tr>

	<?php
	$get=mysql_query("SELECT * FROM `staff_info`");
	while($rgt=mysql_fetch_array($get)){
		$sfd=$rgt['staffid'];
		$sfn=$rgt['name'];
		$sfs=$rgt['sex'];
		$sfdp=$rgt['dept'];
		$sfdz=$rgt['design'];
		?>
	<tr>
	<td><?php echo $sfd; ?></td>
	<td><?php echo $sfn; ?></td>
	<td><?php echo $sfs; ?></td>
	<td><?php echo $sfdp; ?></td>
	<td><?php echo $sfdz; ?></td>
	</tr>
	<?php
		}
	?>
</table>
</fieldset>

<!--INDIVIDUAL STAFF RECORD-->
<fieldset class="login17" style="color:#000;"><legend align="center">INDIVIDUAL STAFF RECORD</legend>
<span style="float:left;" id="getstaff" ><input type="button" value="GO BACK" id="viewindstaffback" style="background:#f66;"><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
<tr>
<td>STAFF ID: </td>
<td><select name="staffid" id="staffid"><option value="">-Choose-</option>
	<?php
	$get=mysql_query("SELECT * FROM `staff_info`");
	while($rgt=mysql_fetch_array($get)){
		$sfd=$rgt['staffid'];
		?>
	<option><?php echo $sfd; ?></option>
	<?php
		}
	?>
	</select>
	</td>
<td><input type="button" value="View" id="indstaff" onClick="staffed();" style="background:#3C0;color:#fff;" /></td>
</tr>
</table></span><br>
<span id="stafftable" style="display:none;">
	<input type="button" value="GO BACK" id="indstaffback"  style="background:#f00;color:#fff;" /><br>
	<span id="staffview">
	
	</span>
</span>
</fieldset>

<!--REMOVE STAFF RECORD-->
<fieldset class="login15" style="color:#000;"><legend align="center">REMOVE STAFF RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="deletestaffback" style="background:#f66;"></span><br/><br/>
<form action="deletestaff.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
<tr>
<td>STAFF ID: </td>
<td><select name="staffid"><option value="">-Choose-</option>
		<?php
	$get=mysql_query("SELECT * FROM `staff_info`");
	while($rgt=mysql_fetch_array($get)){
		$sfd=$rgt['staffid'];
		?>
	<option><?php echo $sfd; ?></option>
	<?php
		}
	?>
	</select>
	</td>
<td><input type="submit" value="Delete Record" style="font-size:16px" /></td>
</tr>
</table>
</form>
</fieldset>

<!--ASSETS-->
<fieldset class="login18" style="color:#000;"><legend align="center">ASSETS REGISTER</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="assetmainback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="Register Asset"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newasset"/></td>
<td align="center"><br><input type="button" value="View Assets Register"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewassets"/></td>
<td align="center"><br><input type="button" value="Remove From Register"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="removeasset"/></td>
</tr>
</table>
</fieldset>

<!--NEW ASSET-->
<fieldset class="login19" style="color:#000;"><legend align="center">NEW ASSET REGISTRATION</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newassetback" style="background:#f66;"></span><br/><br/>
<form action="newasset.php" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr>
<td>ID</td>
<td>Asset Name</td>
<td>Type</td>
<td>Qtty</td>
<td>Value</td>
<td>Life Span</td>
<td>Date Acquired</td>
</tr>
<tr>
<td><input type="text" name="assetid" size="10" value="<?php print rand(1,
10000); ?>" readonly /></td>
<td><input type="text" name="assetname" size="40" /></td>
<td><select name="assettype"><option value="">-Choose-</option><option>Current</option><option>Fixed</option></select></td>
<td><input type="text" name="qtty" size="10" /></td>
<td><input type="text" name="amount" size="15" /></td>
<td><input type="text" name="lifespan" size="10" /></td>
<td><input type="text" name="acquired" size="10" /></td>
</tr>
<tr>
	<td align="center" colspan=7 style="border:hidden;border-top:1px solid;"><br><input type="submit" value="Register Asset" /></td>
</tr>
</table>
</form>
<hr>
<br>
<p style="color:#f00;text-shadow:1px #000;">To Register Multiple Assets (up to 1000), prepare the register as an Excel Spreadsheet(CSV Format) and upload it below. Remember to follow the format given above but leave the ID Column blank.</p><br><br>
<form action="multipleassets.php" method="post" enctype="multipart/form-data">
	Upload Excel File: <input type="file" name="assetsfile" /> &nbsp; <input type="submit" value="Upload Assets" style="font-size:16px;"/>
</form>
</fieldset>

<!--VIEW ASSETS-->
<fieldset class="login24" style="color:#000;"><legend align="center">ALL ASSETS REGISTER</legend>
	<span style="float:left;"><input type="button" value="GO BACK" id="viewassetsback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr style="background:#fff;">
<td>ID</td>
<td>Asset Name</td>
<td>Type</td>
<td>Qtty</td>
<td>Value</td>
<td>Life Span</td>
<td>Date Acquired</td>
</tr>
<?php
	$find=mysql_query("SELECT * FROM `assets` ORDER BY assetid");
	while($rf=mysql_fetch_array($find)) {
		$aid=$rf['assetid'];
		$anm=$rf['name'];
		$aty=$rf['type'];
		$aqt=$rf['quantity'];
		$avl=$rf['value'];
		$als=$rf['lifespan'];
		$aac=$rf['acquired'];
	
	?>
<tr>
<td><?php echo $aid; ?></td>
<td><?php echo $anm; ?></td>
<td><?php echo $aty; ?></td>
<td><?php echo $aqt; ?></td>
<td>N <?php echo number_format($avl, 2, ".", ","); ?></td>
<td><?php echo $als; ?></td>
<td><?php echo $aac; ?></td>
</tr>
		<?php
		}
	?>
</table>
</fieldset>

<!--REMOVE ASSET-->
<fieldset class="login25" style="color:#000;"><legend align="center">REMOVE ASSET FROM REGISTER</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="removeassetback" style="background:#f66;"></span><br/><br/>
<form action="removeasset.php" method="post" enctype="multipart/form-data">
	Asset ID: <select name="assetid"><option value="">-Select-</option>
	<?php
	$ass=mysql_query("SELECT * FROM `assets`");
	while($ras=mysql_fetch_array($ass)) {
		$aid=$ras['assetid'];
		?>
		<option><?php echo $aid; ?></option>
	<?php
		}
	?>
		&nbsp; <input type="submit" value="Remove Asset" style="font-size:16px;"/>
</form>
</fieldset>

<!--EXPENDITURE-->
<fieldset class="login26" style="color:#000;"><legend align="center">EXPENDITURES</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="expensemainback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="Enter New Expenditure"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newexpense"/></td>
<td align="center"><br><input type="button" value="View Expenditure Records"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewexpenses"/></td>
</tr>
</table>
</fieldset>

<!--NEW EXPENDITURE-->
<fieldset class="login27" style="color:#000;"><legend align="center">NEW EXPENDITURE RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newexpenseback" style="background:#f66;"></span><br/><br/>
<form action="newexpense.php" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr>
<td>Date</td>
<td>Purpose</td>
<td>Reciever</td>
<td>Amount</td>
<td>Approved By</td>
</tr>
<tr>
<td><input type="text" name="day" size="1" value="<?php echo date('d'); ?>"  /><input type="text" name="month" size="3" value="<?php echo date('F'); ?>"  /><input type="text" name="year" size="2" value="<?php echo date('Y'); ?>"  /></td>
<td><input type="text" name="purpose" size="40" /></td>
<td><input type="text" name="reciever" size="15" /></td>
<td>N<input type="text" name="amount" size="10" /></td>
<td><input type="text" name="approved" size="10" /></td>
</tr>
<tr>
	<td align="center" colspan=7 style="border:hidden;border-top:1px solid;"><br><input type="submit" value="Submit Record" /></td>
</tr>
</table>
</form>
<hr>
<br>
</fieldset>

<!--VIEW ASSETS-->
<fieldset class="login28" style="color:#000;"><legend align="center">EXPENDITURE RECORDS</legend>
	<span style="float:left;"><input type="button" value="GO BACK" id="viewexpensesback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr style="background:#fff;">
<td>Date</td>
<td>Purpose</td>
<td>Reciever</td>
<td>Amount</td>
<td>Approved By</td>
</tr>
<?php
	$exp=mysql_query("SELECT * FROM `expenditure`");
	while($rep=mysql_fetch_array($exp)) {
		$edd=$rep['day'];
		$emm=$rep['month'];
		$eyy=$rep['year'];
		$epp=$rep['purpose'];
		$erp=$rep['reciever'];
		$eam=$rep['amount'];
		$eap=$rep['approved'];
	
	?>
<tr>
<td><?php echo $edd.'/'.$emm.'/'.$eyy; ?></td>
<td><?php echo $epp; ?></td>
<td><?php echo $erp; ?></td>
<td>N <?php echo number_format($eam, 2, ".", ","); ?></td>
<td><?php echo $eap; ?></td>
</tr>
		<?php
		}
	?>
</table>
</fieldset>

<!--INCOME-->
<fieldset class="login29" style="color:#000;"><legend align="center">INCOME</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="incomemainback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="Enter New Income Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newincome"/></td>
<td align="center"><br><input type="button" value="View Income Records"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewincome"/></td>
</tr>
</table>
</fieldset>

<!--NEW INCOME RECORD-->
<fieldset class="login30" style="color:#000;"><legend align="center">NEW INCOME RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newincomeback" style="background:#f66;"></span><br/><br/>
<form action="newincome.php" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr>
<td>Date</td>
<td>Payer/Client</td>
<td>Purpose</td>
<td>Amount</td>
</tr>
<tr>
<td><input type="text" name="day" size="1" value="<?php echo date('d'); ?>"  /><input type="text" name="month" size="3" value="<?php echo date('F'); ?>"  /><input type="text" name="year" size="2" value="<?php echo date('Y'); ?>"  /></td>
<td><select name="client"><option value="">-Choose Client-</option>
	<?php 
	$gcl=mysql_query("SELECT * FROM clients");
	while($rgl=mysql_fetch_array($gcl)){
		$client=$rgl['company'];
		?>
		<option><?php echo $client; ?></option>
		<?php
		}
		?>
		</select>
	</td>
<td><input type="text" name="purpose" size="30" /></td>
<td>N<input type="text" name="amount" size="10" /></td>
</tr>
<tr>
	<td align="center" colspan=7 style="border:hidden;border-top:1px solid;"><br><input type="submit" value="Submit Record" /></td>
</tr>
</table>
</form>
<hr>
<br>
</fieldset>

<!--VIEW INCOME RECORDS-->
<fieldset class="login31" style="color:#000;"><legend align="center">INCOME RECORDS</legend>
	<span style="float:left;"><input type="button" value="GO BACK" id="viewincomeback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr style="background:#fff;">
<td>Date</td>
<td>Payer/Client</td>
<td>Purpose</td>
<td>Amount</td>
</tr>
<?php
	$inc=mysql_query("SELECT * FROM `income`");
	while($ric=mysql_fetch_array($inc)) {
		$idd=$ric['day'];
		$imm=$ric['month'];
		$iyy=$ric['year'];
		$icp=$ric['client'];
		$ipp=$ric['purpose'];
		$iam=$ric['amount'];
			
	?>
<tr>
<td><?php echo $idd.'/'.$imm.'/'.$iyy; ?></td>
<td><?php echo $icp; ?></td>
<td><?php echo $ipp; ?></td>
<td>N <?php echo number_format($iam, 2, ".", ","); ?></td>
</tr>
		<?php
		}
	?>
</table>
</fieldset>

<!--LIABILITIES-->
<fieldset class="login32" style="color:#000;"><legend align="center">LIABILITIES</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="liabilitymainback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="Enter Liability Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="newliability"/></td>
<td align="center"><br><input type="button" value="View Liabilities"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="viewliabilities"/></td>
<td align="center"><br><input type="button" value="Remove From Record"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="removeliability"/></td>
</tr>
</table>
</fieldset>

<!--NEW LIABILITY RECORD-->
<fieldset class="login33" style="color:#000;"><legend align="center">ENTER LIABILITY RECORD</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="newliabilityback" style="background:#f66;"></span><br/><br/>
<form action="newliability.php" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr>
<td>ID</td>
<td>Creditor</td>
<td>Description</td>
<td>Value (Monetary)</td>
</tr>
<tr>
<td><input type="text" name="libid" size="5" value="<?php print rand(1, 10000); ?>"  /></td>
<td><select name="creditor"><option value="">-Choose Client-</option>
	<?php 
	$gcl=mysql_query("SELECT * FROM clients WHERE type='Creditor'");
	while($rgl=mysql_fetch_array($gcl)){
		$client=$rgl['company'];
		?>
		<option><?php echo $client; ?></option>
		<?php
		}
		?>
		</select>
	</td>
<td><input type="text" name="description" size="30" /></td>
<td>N<input type="text" name="amount" size="10" /></td>
</tr>
<tr>
	<td align="center" colspan=7 style="border:hidden;border-top:1px solid;"><br><input type="submit" value="Submit Record" /></td>
</tr>
</table>
</form>
<hr>
<br>
</fieldset>

<!--VIEW LIABILITIES-->
<fieldset class="login34" style="color:#000;"><legend align="center">LIABILITIES</legend>
	<span style="float:left;"><input type="button" value="GO BACK" id="viewliabilitiesback" style="background:#f66;"></span><br/><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:98%;margin:auto;">
<tr style="background:#fff;">
<td>ID</td>
<td>Creditor</td>
<td>Description</td>
<td>Value (Monetary)</td>
</tr>
<?php
	$lnc=mysql_query("SELECT * FROM `liabilities` ORDER BY libid");
	while($ldc=mysql_fetch_array($lnc)) {
		$lid=$ldc['libid'];
		$lcd=$ldc['creditor'];
		$ldd=$ldc['description'];
		$lam=$ldc['value'];
					
	?>
<tr>
<td><?php echo $lid; ?></td>
<td><?php echo $lcd; ?></td>
<td><?php echo $ldd; ?></td>
<td>N <?php echo number_format($lam, 2, ".", ","); ?></td>
</tr>
		<?php
		}
	?>
</table>
</fieldset>

<!--REMOVE LIABILITY-->
<fieldset class="login35" style="color:#000;"><legend align="center">REMOVE LIABILITY FROM RECORDS</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="removeliabilityback" style="background:#f66;"></span><br/><br/>
<form action="removeliability.php" method="post" enctype="multipart/form-data">
	Asset ID: <select name="libid"><option value="">-Select-</option>
	<?php
	$lss=mysql_query("SELECT * FROM `liabilities`");
	while($rls=mysql_fetch_array($lss)) {
		$lid=$rls['libid'];
		?>
		<option><?php echo $lid; ?></option>
	<?php
		}
	?>
		&nbsp; <input type="submit" value="Remove Liability" style="font-size:16px;"/>
</form>
</fieldset>

<!--PAYROLL MAIN-->
<fieldset class="login36" style="color:#000;"><legend align="center">PAYROLL</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="payrollmainback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="Organise Payroll"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="organisepayroll"/></td>
<td align="center"><br><input type="button" value="Generate Payroll"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="generatepayroll"/></td>
<td align="center"><br><input type="button" value="Confirm Salaries Payment"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="payconfirm"/></td>
</tr>
</table>
</fieldset>

<!--ORGANIZE PAYROLL-->
<fieldset class="login37" style="color:#000;"><legend align="center">ORGANIZE PAYROLL</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="organisepayrollback" style="background:#f66;"></span><br/><br/>
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;width:80%;margin:auto;">
<tr>
<td align="center"><br><input type="button" value="Enter Allowances"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="allowances"/></td>
<td align="center"><br><input type="button" value="Enter Deductions"  style="margin-bottom:50px;margin-top:7px;background:none;border:none;color:#008;text-decoration:underline;" id="deductions"/></td>
</tr>
</table>
</fieldset>

<!--ALLOWANCES-->
<fieldset class="login38" style="color:#000;"><legend align="center">PAYROLL</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="allowancesback" style="background:#f66;"></span><br/><br/>
<form action="allowances.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
<tr>
<td>Medical Allowance: </td>
<td><input type="text" name="medical" size="5" />%</td>
</tr>
<tr>
<td>Transport Allowance: </td>
<td><input type="text" name="transport" size="5" />%</td>
</tr>
<tr>
<td>Meal Allowance: </td>
<td><input type="text" name="meal" size="5" />%</td>
</tr>
<tr>
<td>Hazard: </td>
<td><input type="text" name="hazard" size="5" />%</td>
</tr>
<tr>
<td colspan="2" align="center"><br><input type="submit" value="Submit" /></td>
</tr>
</table>
</form>
</fieldset>

<!--DEDUCTIONS-->
<fieldset class="login39" style="color:#000;"><legend align="center">PAYROLL</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="deductionsback" style="background:#f66;"></span><br/><br/>
<form action="deductions.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
<tr>
<td>Tax: </td>
<td><input type="text" name="tax" size="5" />%</td>
</tr>
<tr>
<td>Pension: </td>
<td><input type="text" name="pension" size="5" />%</td>
</tr>
<tr>
<td>Levy: </td>
<td><input type="text" name="levy" size="5" />%</td>
</tr>
<tr>
<td colspan="2" align="center"><br><input type="submit" value="Submit" /></td>
</tr>
</table>
</form>
</fieldset>

<!--GENERATE PAYROLL-->
<fieldset class="login40" style="color:#000;"><legend align="center">PAYROLL GENERATION</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="generatepayrollback" style="background:#f66;"></span><br/><br/>
<form action="paygen.php" method="post" target="_blank" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;"><caption>
<tr>
<td>Month:</td>
<td><select name="month"><option value="">-Choose-</option>
<?php
	
	$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	
	foreach($month as $mth){
?>
	
	<option><?php echo $mth; ?></option>
  <?php
		}
	?>
    </select></td>
	<td>Year:</td>
	<td><select name="year"><option value="">-Choose-</option>
	<?php
	for($i=1960;$i<=2100;$i++){
		echo "<option>$i</option>";
		}
	?>
	</select>
</tr>
<tr>
<td colspan="4" align="center"><br><input type="submit" value="Generate" /></td>
</tr>
</table>
</form>
</fieldset>

<!--COMFIRM SALRIES PAYMENT-->
<fieldset class="login41" style="color:#000;"><legend align="center">CONFIRM SALARIES PAYMENT</legend>
<span style="float:left;"><input type="button" value="GO BACK" id="payconfirmback" style="background:#f66;"></span><br/><br/>
Choose the Month and Year you wish to confirm payment of Salaries for. Remember, you must have genereated the payroll for the month before you can and payments should have been made.<br><br>
<form action="confirmpay.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
<tr>
<td>Month:</td>
<td><select name="month" style="font-weight:bold;font-size:20px;"><option value="">-Choose-</option>
<?php
	
	$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	
	foreach($month as $mth){
?>
	
	<option><?php echo $mth; ?></option>
  <?php
		}
	?>
    </select></td>
	<td>Year:</td>
	<td><select name="year" style="font-weight:bold;font-size:20px;"><option value="">-Choose-</option>
	<?php
	for($i=1960;$i<=2100;$i++){
		echo "<option>$i</option>";
		}
	?>
	</select>
</tr>
<tr>
<td colspan="4" align="center"><br><input type="submit" value="Confirm" /></td>
</tr>
</table>
</form>
</fieldset>

<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?> <?php echo $cmpname; ?> <br>
	<span style="font-size:14px;"><i>Supported By GR-ACCT</i></span>
</div>



</div>
</body>
</html>

<?php
}	
elseif(isset($_SESSION['username']))
{
	header('location: UserHome.php');
}
else 
	echo "<script>
	alert('ACCESS DENIED. PLEASE LOGIN FIRST');
	window.location.href='/gracct';</script>";

?>