<?php
ini_set('display_errors',0);

	include("connect.php");
	
$day= date('d');
$month=$_POST['month'];
$year=$_POST['year'];
$purpose="Payment of Salaries For ".$month.", ".$year;
$reciever="All Staff";
$approved="Director";

	$check=mysql_query("SELECT * FROM `salaries` WHERE month='$month' && year='$year'");
	$count=mysql_num_rows($check);
	if($count<=0){
		echo "<script>
					alert('PAYROLL FOR THE MONTH HAS NOT BEEN GENERATED. PLEASE GENERATE PAYROLL FIRST.');
					window.location.href='AdminHome.php';</script>";
		}
		else
			$rec=mysql_fetch_array($check);
			$amount=$rec['amount'];
			
	$conf=mysql_query("SELECT * FROM `expenditure` WHERE purpose='$purpose'");
	$ccf=mysql_num_rows($conf);
	if($ccf>0){
		echo "<script>
					alert('PAYMENT FOR THE SELECTED MONTH HAS BEEN CONFIRMED ALREADY!!!');
					window.location.href='AdminHome.php';</script>";
		}
		else
	$sql="INSERT INTO `expenditure` VALUES('', '$day', '$month', '$year', '$purpose', '$reciever', '$amount', '$approved')";
	$r=mysql_query($sql);
	
	if ($r) {
		echo "<script>
					alert('DONE!!! COMFIRMED AND RECORD STORED SUCCESSFULLY.');
					window.location.href='AdminHome.php';</script>";
		}
		else 
			echo "<script>
					alert('SORRY! AN ERROR OCCURRED. PLEASE TRY AGAIN.');
					window.location.href='AdminHome.php';</script>";
?>