<?php
ini_set('display_errors',0);

	include("connect.php");
	
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$purpose=$_POST['purpose'];
$reciever=$_POST['reciever'];
$amount=$_POST['amount'];
$approved=$_POST['approved'];


	$sql="INSERT INTO `expenditure` VALUES('', '$day', '$month', '$year', '$purpose', '$reciever', '$amount', '$approved')";
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