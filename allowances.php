<?php
ini_set('display_errors',0);

	include("connect.php");
	
$med=$_POST['medical'];
$trp=$_POST['transport'];
$meal=$_POST['meal'];
$haz=$_POST['hazard'];


	$sql="INSERT INTO `allowances` VALUES('', '$med', '$trp', '$meal', '$haz')";
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