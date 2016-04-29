<?php
ini_set('display_errors',0);
	
	$check=mysql_connect("localhost", "root", "");
	$db=mysql_select_db("gracct");
	if(!$db) {
		header('location: install');
	}


	include("Details.php");

	
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $cmpname; ?> | Login</title>
<link rel="shortcut icon" href="Images/<?php echo $logo; ?>" type="image/icon"/>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="main">
<header>
<h1><?php echo $cmpname; ?></h1>
<div style="width:100%;background:url(Images/img2.png);background-size:100%;margin-top:15px;height:600px;">
<fieldset class="login" style="padding:50px;width:40%;background:none;"><legend style="margin-bottom:-75px;font-size:48px;color:#f00;text-shadow:2px 2px 2px #ff0;margin-top:20px;" align="center"><img src="Images/keys.png" width="75" height="100" style="margin-bottom:-25px;"/> LOGIN</legend><br>
<form action="login.php" method="post">
<table border="0" align="center" cellpadding="5" cellspacing="5" style="background:none;color:#ff0;text-shadow:1px 1px 1px #f00;border:none;width:100%;margin-top:50px;height:200px;width:80%;margin:10px auto;">
<tr>
<td>Login Name: </td>
<td><input type="text" name="user" size="30" /></td>
</tr>
<tr>
<td>Password: </td>
<td><input type="password" name="pass" size="30" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Login" style="background:#3C0;color:#fff;text-shadow:1px 1px 1px #000;padding: 0 5px;font-family:Comic Sans MS"></td>
</tr>
</table>
</form>
</fieldset>
</div>
<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?>. <?php echo $cmpname; ?> <br>
	<span style="font-size:14px;"><i>Supported By GR-ACCT</i></span>
</div>
</div>
</body>
</html>