<?php
ini_set('display_errors',0);

	include("connect.php");
	
$userid=$_POST['userid'];
$password=$_POST['password'];
$fname=$_POST['fullname'];
$role=$_POST['role'];



	if($role=='Admin Officer'){
	$sql="INSERT INTO `login_admin` VALUES('', '$userid', '$password', '$fname', '$role')";
	}
	else {
	$sql="INSERT INTO `login_users` VALUES('', '$userid', '$password', '$fname', '$role')";	
	}
	
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