<?php
ini_set('display_errors',0);

	include("connect.php");
	
$libid=$_POST['libid'];

	$sql="DELETE FROM `liabilities` WHERE libid='$libid'";
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