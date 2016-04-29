<?php
	ini_set('display_errors');
	
	mysql_connect("localhost", "root", "");
	
	mysql_select_db("gracct");
	
	$query=mysql_query("SELECT * FROM `company` WHERE id=1");
	while($row=mysql_fetch_array($query)) {
		$id=$row['id'];
		$dbname=$row['dbname'];
	}


?>