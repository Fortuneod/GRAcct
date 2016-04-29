<?php
ini_set('display_errors',0);

	include("connect.php");
	
	$file = $_FILES['assetsfile']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$assetid= rand(1, 10000);
			$assetname=$filesop[1];
			$assettype=$filesop[2];
			$qtty=$filesop[3];
			$amount=$filesop[4];
			$lifespan=$filesop[5];
			$acquired=$filesop[6];


	$sql="INSERT INTO `assets` VALUES('', '$assetid', '$assetname', '$assettype', '$qtty', '$amount', '$lifespan', '$acquired')";
	$r = mysql_query($sql);
	$c = $c + 1;
		}
	
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