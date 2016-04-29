<?php
require_once("dbconn.php");
$db_handle = new DBController();


if(!empty($_POST["staffid"])) {
	$staff=$_POST['staffid'];
  	  $check = mysql_query("SELECT * FROM staff_info WHERE staffid='$staff'");
	  $count=mysql_num_rows($check);
	  if($count>0){
  while($row = mysql_fetch_array($check)){
  $staffid = $row['staffid'];
  $name = $row['name'];
  $sex = $row['sex'];
  $dob = $row['dob'];
  $address = $row['address'];
  $phone = $row['phone'];
  $email = $row['email'];
  $nok = $row['nok'];
  $nokadd = $row['nokadd'];
  $nokphone = $row['nokphone'];
  $dept = $row['dept'];
  $design = $row['design'];
  $gradelvl = $row['gradelvl'];
  $basicslry = $row['basicslry'];
  $photo = $row['photo'];
 
 echo "<table border=1 cellspacing=3 cellpadding=3 style='background:#fff;color:#000;width:98%;margin:auto;border-collapse:collapse;'><caption>Details For ".$staff."</caption>
 <tr>
 <td valign='bottom'>Staff ID:</td>
 <td valign='bottom'>".$staffid."</td>
 <td border=0></td>
 <td><img src='Staff_Photos/".$photo."' width=100 height=125</td>
 </tr>
 <tr>
 <td>Full Name:</td>
 <td>".$name."</td>
 <td>Sex:</td>
 <td>".$sex."</td>
 </tr>
 <tr>
 <td>DOB:</td>
 <td>".$dob."</td>
 <td>Address</td>
 <td>".$address."</td>
 </tr>
 <tr>
 <td>Phone No:</td>
 <td>".$phone."</td>
 <td>Email:</td>
 <td>".$email."</td>
 </tr>
 <tr>
 <td>NOK:</td>
 <td>".$nok."</td>
 <td>NOK Address:</td>
 <td>".$nokadd."</td>
 </tr>
 <tr>
 <td>NOK Phone:</td>
 <td>".$nokphone."</td>
 <td>Dept:</td>
 <td>".$dept."</td>
 </tr>
 <tr>
 <td>Designation:</td>
 <td>".$design."</td>
 <td>Grade Level:</td>
 <td>".$gradelvl."</td>
 </tr>
 <tr>
 <td>Basic Salary:</td>
 <td>".$basicslry."</td>
  </tr>
 </table>";
  }
  }
  else
	  echo "<table border=0 cellspacing=5 cellpadding=5 style='margin:auto;background:#ff0;color:#000;'><caption>Details For ".$staff."</caption>
  <tr>
  <td colspan=4 align='center'>No Matching Records Found</td>
  </tr>
  </table>";
}

?>