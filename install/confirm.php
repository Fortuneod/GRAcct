<?php
	ini_set('display_errors',0);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("gracct");
	
	
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
	