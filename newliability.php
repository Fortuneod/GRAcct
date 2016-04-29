<?php
ini_set('display_errors',0);

	include("connect.php");
	
$libid=$_POST['libid'];
$creditor=$_POST['creditor'];
$description=$_POST['description'];
$amount=$_POST['amount'];


	$sql="INSERT INTO `liabilities` VALUES('', '$libid', '$creditor', '$description', '$amount')";
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