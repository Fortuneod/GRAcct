<?php
ini_set('display_errors',0);

	include("connect.php");
	
$assetid=$_POST['assetid'];
$assetname=$_POST['assetname'];
$assettype=$_POST['assettype'];
$qtty=$_POST['qtty'];
$amount=$_POST['amount'];
$lifespan=$_POST['lifespan'];
$acquired=$_POST['acquired'];


	$sql="INSERT INTO `assets` VALUES('', '$assetid', '$assetname', '$assettype', '$qtty', '$amount', '$lifespan', '$acquired')";
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