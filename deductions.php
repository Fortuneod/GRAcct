<?php
ini_set('display_errors',0);

	include("connect.php");
	
$med=$_POST['tax'];
$trp=$_POST['pension'];
$meal=$_POST['levy'];


	$sql="INSERT INTO `deductions` VALUES('', '$med', '$trp', '$meal')";
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