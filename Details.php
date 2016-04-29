<?php
	ini_set('display_errors',0);
	
	include("connect.php");
	
	$acq=mysql_query("select * from `details` where id=1");
	$count=mysql_num_rows($acq);
	if($count<=0){
		header('location: install');
		}
		else
		$rec=mysql_fetch_array($acq);
		$cmpname=$rec['cmpname'];
		$address=$rec['address'];
		$phone=$rec['phone'];
		$email=$rec['email'];
		$type=$rec['type'];
		$staffsize=$rec['staffsize'];		
		$logo=$rec['logo'];
		
		
