<?php
ini_set('display_errors',0);

	include("connect.php");
	
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$client=$_POST['client'];
$purpose=$_POST['purpose'];
$amount=$_POST['amount'];


	$sql="INSERT INTO `income` VALUES('', '$day', '$month', '$year', '$client', '$purpose', '$amount', 'Paid')";
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