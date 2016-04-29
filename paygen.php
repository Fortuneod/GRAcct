<?php
	
	$month=$_POST['month'];
	$year=$_POST['year'];
	
	session_start();
	$_SESSION['month']=$month;
	$_SESSION['year']=$year;
	
	header('location: Payroll');

?>