<?php
	ini_set('display_errors',0);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("gracct");
	
	session_start();
	$_SESSION['company']=$company;
	$_SESSION['address']=$address;
	$_SESSION['phone']=$phone;
	$_SESSION['email']=$email;
	$_SESSION['type']=$type;
	$_SESSION['staff']=$staff;
	$_SESSION['city']=$city;
	$_SESSION['state']=$state;
	$_SESSION['country']=$country;
	$_SESSION['currency']=$currency;
	
	
	$dbname=$_POST['dbname'];
	$adminus=$_POST['adminus'];
	$adminpw=$_POST['adminpw'];
	
	
	$path="../Images/";
	mkdir($path, 0777, true);
	
	$logo=$_FILES['logo']['name'];
	$logo2=$_FILES['logo']['tmp_name'];
	$lgname=$logo;
	
	move_uploaded_file($logo2, $path.$lgname);
	
	session_start();
	$_SESSION['dbname']=$dbname;
	$_SESSION['adminus']=$adminus;
	$_SESSION['adminpw']=$adminpw;
	$_SESSION['logo']=$lgname;
	
	header('location: SetupComplete.php');

?>
	