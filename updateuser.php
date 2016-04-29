<?php
ini_set('display_errors',0);

	include("connect.php");
	
$userid=$_POST['userid'];
$colm=$_POST['colm'];
$newinfo=$_POST['newinfo'];



	$sql="UPDATE `login_users` SET $colm='$newinfo' WHERE username='$userid'";
	$r=mysql_query($sql);
	
	if ($r) {
		echo "<script>
					alert('DONE!!! RECORD ALTERED SUCCESSFULLY.');
					window.location.href='AdminHome.php';</script>";
		}
		else 
			echo "<script>
					alert('SORRY! AN ERROR OCCURRED. PLEASE TRY AGAIN.');
					window.location.href='AdminHome.php';</script>";
					
?>