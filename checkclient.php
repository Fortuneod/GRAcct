<?php
require_once("dbconn.php");
$db_handle = new DBController();


if(!empty($_POST["clientid"])) {
	$clientid=$_POST['clientid'];
  $result = mysql_query("SELECT * FROM clients WHERE clientid='$clientid'");
  $row=mysql_fetch_array($result);
  $client=$row['company'];
  
 
	  $check = mysql_query("SELECT * FROM income WHERE client='$client'");
	  $count=mysql_num_rows($check);
	  if($count>0){
  while($row = mysql_fetch_array($check)){
  $client = $row['client'];
  $amount = $row['amount'];
  $purpose = $row['purpose'];
  $day = $row['day'];
  $month = $row['month'];
  $year = $row['year'];
  $purpose = $row['purpose'];
  $remark = $row['remark'];
 
 echo "<td>".$clientid."</td><td>N ".number_format($amount, 2, ".", ",")."</td><td>".$day."/".$month."/".$year."</td><td>".$purpose."</td><td>".$remark."</td>";
  }
  }
  else
	  echo "<td colspan=5 align='center'>No Matching Records Found</td>";
}

?>