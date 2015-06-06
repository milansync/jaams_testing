<?php
session_start();
if(isset($_SESSION['id'])){
$uid=$_SESSION['id'];
$usname=$_SESSION['username'];

$toplinks='<a href="faculty.php?id=' .$uid.'">' .$usname. '</a> &bull; 
	<a href="member_account.php">Account</a> &bull; 
	<a href="logout.php">Log Out</a>';
	}
else{
$toplinks='<a href="join_form.php">Register</a> &bull; <a href="login.php">Login</a>';
}
?>
<?php

$host="localhost";
$user="root";
$pass="infinity";
$db="tutorial";

$con=mysqli_connect($host,$user,$pass) or die("invalid username");
mysqli_select_db($con,$db) ;
$sql="SELECT * FROM members WHERE username='$usname' LIMIT 1";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==1)
{
while($row= mysqli_fetch_array($res))
{
$uid= $row['id'];
$firstname= $row['firstname'];
$lastname= $row['lastname'];
$designation= $row['designation'];
$_SESSION['id']= $uid;
}
}
?>
<?php


$host="localhost";
$user="root";
$pass="infinity";
$db="tutorial";

$con=mysqli_connect($host,$user,$pass) or die("invalid username");
mysqli_select_db($con,$db) ;
$sql="SELECT * FROM monday WHERE id='$uid' LIMIT 1";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==1)
{
while($row= mysqli_fetch_array($res))
{
$sub1= $row['sub1'];
$sub2= $row['sub2'];
$sub3= $row['sub3'];
$sub4= $row['sub4'];
$sub5= $row['sub5'];
$sub6= $row['sub6'];
$sub7= $row['sub7'];
$_SESSION['id']= $uid;
}
}
?>

<?php
 // php script for monday table update 

// Here we run a login check
if (!isset($_SESSION['id'])) { 
   echo 'Please <a href="login.php">log in</a> to access your account';
   exit(); 
}
//Connect to the database through our include 
include_once "connect.php";
// Place Session variable 'id' into local variable
$uid = $_SESSION['id'];
// Process the form if it is submitted
if (isset($_POST['Submit'])){
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
	$sub5 = $_POST['sub5'];
	$sub6 = $_POST['sub6'];
	$sub7 = $_POST['sub7'];
    $sql = "UPDATE monday SET sub1='$sub1',sub2='$sub2',sub3='$sub3',sub4='$sub4',sub5='$sub5',sub6='$sub6',sub7='$sub7' WHERE id='$uid'"; 
	$res= mysqli_query($con,$sql);
	if($res)
	{
    echo 'Your account info has been updated, visitors to your profile will now see the new info.<br /><br />
To return to your profile edit area, <a href="user.php">click here</a>';
  $_SESSION['id']= $uid;
exit();
}
} // close if post
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>user account</title>
<link rel="shortcut icon" href="favicon.ico" /> 
<style type="text/css">
<!--
body {margin: 0px}
-->
</style></head>
<body>
<table style="background-color: #CCC" width="100%" border="0" cellpadding="12">
  <tr>
    <td width="78%"><img src="logo.png" alt="my logo" /></td>
    <td width="22%"><?php echo $toplinks; ?></td>
  </tr>
</table>
<table width="90%" align="center" cellpadding="5" cellspacing="5" style="line-height:1.5em;">
  <tr>
    <td width="31%" rowspan="2" valign="top">
    <!-- See the more advanced member system tutorial to see how to place default placeholder pic until member uploads one -->
    <div align="center"><img src="photos/<?php echo "$uid"; ?>/pic1.jpg" alt="image" width="150" /></div></td>
    <td width="20%" rowspan="2" valign="top"><b>Username:</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']; ?><br />
     <b>Firstname:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$firstname"; ?><br/>
      <b>Lastname:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$lastname";?><br/>
	  <b>Designation:</b>&nbsp;&nbsp;<?php echo "$designation"; ?><br/>
	  
      
	  
    </td>
  
  </tr>
</table>

<table border="2" cellspacing="3" align="center">

<tr>
 <td align="center">
 <td>09:00-10:00
 <td>10:00-11:00
 <td>11:00-12:00
 <td>12:00-13:00
 <td>13:00-14:00
 <td>14:00-15:00
 <td>15:00-16:00
 <td>16:00-17:00
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center">sub1:<?php echo "$sub1"; ?><td align="center"><font color="black">sub2:<?php echo "$sub2"; ?><br>
 <td align="center"><font color="black">sub3:<?php echo "$sub3"; ?><br>
 <td align="center"><font color="black">sub4:<?php echo "$sub4"; ?><br>
 <td rowspan="6"align="center">L<br>U<br>N<br>C<br>H
 <td align="center"><font color="black">sub5:<?php echo "$sub5"; ?><br>
 <td align="center"><font color="black">sub:6<?php echo "$sub6"; ?><br>
 <td align="center">sub7:<?php echo "$sub7"; ?>
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center"><font color="black">SUB1<br>
 <td align="center"><font color="black">SUB2<br>
 <td align="center"><font color="black">SUB3<br>
 <td align="center">---
 <td align="center"><font color="black">SUB4<BR>
 <td align="center"><font color="black">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><font color="black">SUB1<br>
 <td align="center"><font color="black">SUB2<BR>
 <td align="center"><font color="black">SWA<br>
 <td align="center">---
 <td colspan="3" align="center"><font color="black"> lab
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center">SUB1<br>
 <td align="center"><font color="black">SUB2<br>
 <td align="center"><font color="black">SUB3<BR>
 <td align="center">---
 <td align="center"><font color="black">SUB4<br>
 <td align="center"><font color="black">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center"><font color="black">SUB1<BR>
 <td align="center"><font color="black">SUB2<br>
 <td align="center"><font color="black">SUB3<br>
 <td align="center">---
 <td align="center"><font color="black">SUB4<br>
 <td align="center"><font color="black">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">SATURDAY
 <td align="center"><font color="black">SUB1<br>
 <td colspan="3" align="center">seminar
 <td align="center"><font color="black">SUB4<br>
 <td align="center"><font color="black">SUB5<br>
 <td align="center">library
</tr>
</table>

</body>
</html>