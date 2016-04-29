<?php
ini_set('display_errors',0);

	include("connect.php");
	
	$username=$_POST['user'];
	$password=$_POST['pass'];
	
		$sql="SELECT * FROM `login_admin` WHERE username='$username' && password='$password'";
		$sql2="SELECT * FROM `login_users` WHERE username='$username' && password='$password'";
		$r=mysql_query($sql);
		$r2=mysql_query($sql2);
		$count=mysql_num_rows($r);
		$count2=mysql_num_rows($r2);
		
		if ($count>0) {			
			session_start();
			$_SESSION['admin']=$username;
			$query=mysql_query("SELECT * FROM `login_admin` WHERE username='$username'");
			$row=mysql_fetch_array($query);
			if ($username=$row['username']) 
			header('location: AdminHome.php');
			exit;
		}
		
		elseif ($count2>0) {			
			session_start();
			$_SESSION['username']=$username;
			$query=mysql_query("SELECT * FROM `login_users` WHERE username='$username'");
			$row=mysql_fetch_array($query);
			if ($username=$row['username']) 
			header('location: UserHome.php');
			exit;
		}	
		else 
			echo "<script>
						alert('LOGIN CREDENTIALS INCORRECT. PLEASE TRY AGAIN');
						window.location.href='index.php';</script>";

?>