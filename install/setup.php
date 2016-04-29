<?php
	ini_set('display_errors',0);
	
	$company=$_POST['company'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$type=$_POST['type'];
	$currency=$_POST['currency'];
	$staff=$_POST['staff'];
	
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
	
	header('location: Step2.php');
	
	
?>