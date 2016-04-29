<?php
ini_set('display_errors',0);

	include("connect.php");
	
$staffid=$_POST['staffid'];
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$oname=$_POST['oname'];
$sex=$_POST['sex'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$nok=$_POST['nok'];
$nokaddress=$_POST['nokaddress'];
$nokphone=$_POST['nokphone'];
$dept=$_POST['dept'];
$design=$_POST['design'];
$grdlvl=$_POST['grdlevel'];
$salary=$_POST['salary'];

$fullname=$sname.' '.$fname.' '.$oname;
$birthday=$day.'/'.$month.'/'.$year;


	$sql="INSERT INTO `staff_info` VALUES('', '$staffid', '$fullname', '$sex', '$birthday', '$address', '$phone', '$email', '$nok', '$nokaddress', '$nokphone', '$dept', '$design', '$grdlvl', '$salary', '')";
	$r=mysql_query($sql);
	
	if ($r) {
	
	$path="Staff_Photos/";
	mkdir($path, 0777, true);
	
	$photo=$_FILES['photo']['name'];
	$photo2=$_FILES['photo']['tmp_name'];
	$img=$staffid.'_'.$photo;
	
	move_uploaded_file($photo2,"Staff_Photos/".$img);
	
	$enter=mysql_query("UPDATE `staff_info` SET photo='$img' WHERE staffid='$staffid'");
	
	if($enter) {
		echo "<script>
					alert('DONE!!! RECORD STORED SUCCESSFULLY.');
					window.location.href='AdminHome.php';</script>";
		}
		else 
			echo "<script>
					alert('SORRY! SORRY PHOTO NOT UPLOADED. PLEASE CONTACT SERVICE PROVIDER.');
					window.location.href='AdminHome.php';</script>";
	}
	else 
		echo "<script>
					alert('SORRY! AN ERROR OCCURRED. PLEASE TRY AGAIN.');
					window.location.href='AdminHome.php';</script>";
					
?>