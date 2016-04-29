<?php
ini_set('display_errors',0);

	include("connect.php");
	
$assetid=$_POST['assetid'];

	$sql="DELETE FROM `assets` WHERE assetid='$assetid'";
	$r=mysql_query($sql);
	
	if ($r) {
		echo "<script>
					alert('DONE!!! RECORD REMOVED SUCCESSFULLY.');
					window.location.href='AdminHome.php';</script>";
		}
		else 
			echo "<script>
					alert('SORRY! AN ERROR OCCURRED. PLEASE TRY AGAIN.');
					window.location.href='AdminHome.php';</script>";
?>