<?php
session_start();
if(isset($_SESSION['id'])){
$uid=$_SESSION['id'];
$usname=$_SESSION['username'];

$toplinks='<a href="user.php?id=' .$uid.'">' .$usname. '</a> &bull; 
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

// php script for monday table 
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
$sub8= $row['sub8'];
$sub9= $row['sub9'];
$sub10= $row['sub10'];
$sub11= $row['sub11'];
$sub12= $row['sub12'];
$sub13= $row['sub13'];
$sub14= $row['sub14'];
$sub15= $row['sub15'];
$sub16= $row['sub16'];
$sub17= $row['sub17'];
$sub18= $row['sub18'];
$sub19= $row['sub19'];
$sub20= $row['sub20'];
$sub21= $row['sub21'];
$sub22= $row['sub22'];
$sub23= $row['sub23'];
$sub24= $row['sub24'];
$sub25= $row['sub25'];
$sub26= $row['sub26'];
$sub27= $row['sub27'];
$sub28= $row['sub28'];
$sub29= $row['sub29'];
$sub30= $row['sub30'];
$sub31= $row['sub31'];
$sub32= $row['sub32'];
$sub33= $row['sub33'];
$sub34= $row['sub34'];
$sub35= $row['sub35'];
$sub36= $row['sub36'];
$sub37= $row['sub37'];
$sub38= $row['sub38'];
$sub39= $row['sub39'];
$sub40= $row['sub40'];
$sub41= $row['sub41'];
$sub42= $row['sub42'];
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
	$sub8= $_POST['sub8'];
$sub9= $_POST['sub9'];
$sub10= $_POST['sub10'];
$sub11=$_POST['sub11'];
$sub12= $_POST['sub12'];
$sub13= $_POST['sub13'];
$sub14= $_POST['sub14'];
$sub15= $_POST['sub15'];
$sub16= $_POST['sub16'];
$sub17= $_POST['sub17'];
$sub18= $_POST['sub18'];
$sub19= $_POST['sub19'];
$sub20= $_POST['sub20'];
$sub21= $_POST['sub21'];
$sub22= $_POST['sub22'];
$sub23= $_POST['sub23'];
$sub24= $_POST['sub24'];
$sub25= $_POST['sub25'];
$sub26= $_POST['sub26'];
$sub27= $_POST['sub27'];
$sub28= $_POST['sub28'];
$sub29= $_POST['sub29'];
$sub30= $_POST['sub30'];
$sub31= $_POST['sub31'];
$sub32=$_POST['sub32'];
$sub33= $_POST['sub33'];
$sub34=$_POST['sub34'];
$sub35= $_POST['sub35'];
$sub36= $_POST['sub36'];
$sub37= $_POST['sub37'];
$sub38= $_POST['sub38'];
$sub39= $_POST['sub39'];
$sub40= $_POST['sub40'];
$sub41= $_POST['sub41'];
$sub42= $_POST['sub42'];
    $sql = "UPDATE monday SET sub1='$sub1',sub2='$sub2',sub3='$sub3',sub4='$sub4',sub5='$sub5',sub6='$sub6',sub7='$sub7',sub8='$sub8',sub9='$sub9',sub10='$sub10',sub11='$sub11',sub12='$sub12',sub13='$sub13',sub14='$sub14',sub15='$sub15',sub16='$sub16',sub17='$sub17,sub18='$sub18',sub19='$sub19',sub20='$sub20',sub21='$sub21',sub22='$sub22',sub23='$sub23',sub24='$sub24',sub25='$sub25',sub26='$sub26',sub27='$sub27',sub28='$sub28',sub29='$sub29',sub30='$sub30',sub31='$sub31',sub32='$sub32',sub33='$sub33',sub34='$sub34',sub35='$sub35',sub36='$sub36',sub37='$sub37',sub38='$sub38',sub39='$sub39',sub40='$sub40',sub41='$sub41',sub42='$sub42',WHERE id='$uid'"; 
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
 <td align="center"><font color="black">sub1:<?php echo "$sub1"; ?><br>
 <td align="center"><font color="black">sub2:<?php echo "$sub2"; ?><br>
 <td align="center"><font color="black">sub3:<?php echo "$sub3"; ?><br>
 <td align="center"><font color="black">sub4:<?php echo "$sub4"; ?><br>
 <td rowspan="6"align="center">L<br>U<br>N<br>C<br>H
 <td align="center"><font color="black">sub5:<?php echo "$sub5"; ?><br>
 <td align="center"><font color="black">sub:6<?php echo "$sub6"; ?><br>
 <td align="center">sub7:<?php echo "$sub7"; ?>
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center">sub8:<?php echo "$sub8"; ?><br>
 <td align="center"><font color="black">sub9:<?php echo "$sub9"; ?><br>
 <td align="center"><font color="black">sub10:<?php echo "$sub10"; ?><br>
 <td align="center"><font color="black">sub11:<?php echo "$sub11"; ?><br>
 <td align="center"><font color="black">sub12:<?php echo "$sub12"; ?><br>
 <td align="center"><font color="black">sub13<?php echo "$sub13"; ?><br>
 <td align="center">sub14:<?php echo "$sub14"; ?>
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center">sub15:<?php echo "$sub15"; ?><br>
 <td align="center"><font color="black">sub16:<?php echo "$sub16"; ?><br>
 <td align="center"><font color="black">sub17:<?php echo "$sub17"; ?><br>
 <td align="center"><font color="black">sub18:<?php echo "$sub18"; ?><br>
 <td align="center"><font color="black">sub19:<?php echo "$sub19"; ?><br>
 <td align="center"><font color="black">sub20<?php echo "$sub20"; ?><br>
 <td align="center">sub21:<?php echo "$sub21"; ?>
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center">sub22:<?php echo "$sub22"; ?><br>
 <td align="center"><font color="black">sub23:<?php echo "$sub23"; ?><br>
 <td align="center"><font color="black">sub24:<?php echo "$sub24"; ?><br>
 <td align="center"><font color="black">sub25:<?php echo "$sub25"; ?><br>
 <td align="center"><font color="black">sub26:<?php echo "$sub26"; ?><br>
 <td align="center"><font color="black">sub27<?php echo "$sub27"; ?><br>
 <td align="center">sub28:<?php echo "$sub28"; ?>
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center">sub29:<?php echo "$sub29"; ?><br>
 <td align="center"><font color="black">sub30:<?php echo "$sub30"; ?><br>
 <td align="center"><font color="black">sub31:<?php echo "$sub31"; ?><br>
 <td align="center"><font color="black">sub32:<?php echo "$sub32"; ?><br>
 <td align="center"><font color="black">sub33:<?php echo "$sub33"; ?><br>
 <td align="center"><font color="black">sub34<?php echo "$sub34"; ?><br>
 <td align="center">sub35:<?php echo "$sub35"; ?>
</tr>
<tr>
 <td align="center">SATURDAY
 <td align="center">sub36:<?php echo "$sub36"; ?><br>
 <td align="center"><font color="black">sub37:<?php echo "$sub37"; ?><br>
 <td align="center"><font color="black">sub38:<?php echo "$sub38"; ?><br>
 <td align="center"><font color="black">sub39:<?php echo "$sub39"; ?><br>
 <td align="center"><font color="black">sub40:<?php echo "$sub40"; ?><br>
 <td align="center"><font color="black">sub41<?php echo "$sub41"; ?><br>
 <td align="center">sub42:<?php echo "$sub42"; ?>
</tr>
</table>

</body>
</html>