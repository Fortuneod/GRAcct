<?php


if(!empty($_POST["colm"])) {
	
	$pic=$_POST['colm'];
  
  if ($pic=="photo") {
	  $display = "<td style='border-right:hidden;text-align:right;'>Upload Pic: </td><td colspan='3'><input type='file' name='newinfo' /></td>";
	}
	elseif($pic=='password') {
		$display = "<td style='border-right:hidden;text-align:right;'>New Password: </td><td colspan='3'><input type='password' name='newinfo'  size='40'/></td>"; 
		}
		elseif($pic=='username') {
		$display = "<td style='border-right:hidden;text-align:right;'>New Username: </td><td colspan='3'><input type='text' name='newinfo'  size='40'/></td>"; 
		}
		elseif($pic=='role') {
		$display = "<td style='border-right:hidden;text-align:right;'>New Role: </td><td colspan='3'><select name='newinfo'><option value=''></option><option>Accountant</option><option>Accounts Officer</option></select></td>"; 
		}
		 elseif($pic=='address') {
			$display= "<td style='border-right:hidden;text-align:right;'>New Info: </td><td colspan='3'><textarea name='newinfo' cols=35 rows=3></textarea></td>";
	   }
		else {
		$display = "<td style='border-right:hidden;text-align:right;'>New Info: </td><td colspan='3'><input type='text' name='newinfo'  size='40'/></td>"; 
		}
		
  echo $display;
  }

?>
