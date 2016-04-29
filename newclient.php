<?php
ini_set('display_errors',0);

	include("connect.php");
	
$clientid=$_POST['clientid'];
$company=$_POST['company'];
$type=$_POST['type'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$remark=$_POST['remark'];

	$sql="INSERT INTO `clients` VALUES('', '$clientid', '$company', '$type', '$address', '$phone', '$remark')";
	$r=mysql_query($sql);
	
	if ($r) {
		echo "<script>
					alert('DONE!!! RECORD STORED SUCCESSFULLY.');
					window.location.href='AdminHome.php';</script>";
		}
		else 
			echo "<script>
					alert('SORRY! AN ERROR OCCURRED. PLEASE TRY AGAIN.');
					window.location.href='AdminHome.php';</script>";
					
?>