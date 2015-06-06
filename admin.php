<?php
session_start();
if(isset($_SESSION['id'])){
$usname=$_SESSION['username'];
$uid=$_SESSION['id'];

$toplinks='<a href="admin.php?id=' .$uid.'">' .$usname. '</a> &bull; 
	<a href="admin_account.php">Account</a> &bull; 
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
    <td width="40%" rowspan="2" valign="top"><b>Username:</b>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['username']; ?><br />
    <b> Firstname:</b>&nbsp;&nbsp; &nbsp;<?php echo "$firstname"; ?><br/>
     <b> Lastname:</b>&nbsp; &nbsp;&nbsp;<?php echo "$lastname";?><br/>
	 <b> designation:</b>&nbsp; &nbsp;&nbsp;<?php echo "$designation"; ?><br/>
      
	  
    </td>
  
  </tr>
</table>

</body>
</html>