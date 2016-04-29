<?php
ini_set('display_errors',0);

	include("connect.php");
	
$staffid=$_POST['staffid'];



	$sql="DELETE FROM `staff_info` WHERE staffid='$staffid'";
	$r=mysql_query($sql);
	
	if ($r) {
		echo "<script>
					alert('DONE!!! RECORD DELETED SUCCESSFULLY.');
					window.location.href='AdminHome.php';</script>";
		}
		else 
			echo "<script>
					alert('SORRY! AN ERROR OCCURRED. PLEASE TRY AGAIN.');
					window.location.href='AdminHome.php';</script>";
					
?>