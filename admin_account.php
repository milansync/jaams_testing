<?php
session_start(); // Must start session first thing

// See if they are a logged in member by checking Session data
$toplinks = "";
if (isset($_SESSION['id'])) {
	// Put stored session variables into local php variable
    $uid = $_SESSION['id'];
    $username = $_SESSION['username'];
	$toplinks = '<a href="admin.php?id=' . $uid . '">' . $username . '</a> &bull; 
	<a href="admin_account.php">Account</a> &bull; 
	<a href="logout.php">Log Out</a>';
} else {
	echo 'Please <a href="login.php">log in</a> to access your account';
    exit(); 
}
?>
<?php
//Connect to the database through our include 
include_once "connect.php";
$uid = $_SESSION['id'];
// Query member data from the database and ready it for display
$sql ="SELECT * FROM account WHERE id='$uid'"; 
$res= mysqli_query($con,$sql);
if(mysqli_num_rows($res)==1)
{
while($row = mysqli_fetch_array($res)){
$uid= $row['id'];
$country = $row["country"];
$state = $row["state"];
$city = $row["city"];
$accounttype = $row["accounttype"];	
$bio = $row["bio"];	
}
}

// Give different options or display depending on which user type it is
if ($accounttype == "a") {
	$userOptions = "You get options for Normal User";
} else if ($accounttype == "b") {
	$userOptions = "You get options for Expert User";
} else {
	$userOptions = "You get options for Super User";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Account</title>
<link rel="shortcut icon" href="favicon.ico" /> 
<style type="text/css">
<!--
body {margin: 0px}
-->
</style>
</head>
<body>
<table style="background-color: #CCC" width="100%" border="0" cellpadding="12">
  <tr>
    <td width="78%"><img src="logo.png" alt="my logo" /></td>
    <td width="22%"><?php echo $toplinks; ?></td>
  </tr>
</table>
<h3><?php echo "$username"; ?></h3>
<table width="768" cellpadding="3" cellspacing="3" style="line-height:1.5em;">
  <tr>
    <td width="139" valign="top" bgcolor="#E4E4E4">YOUR ACCOUNT<br />
        <a href="edit_info.php" target="_self">Edit Information </a><br />
    <a href="edit_pic.php" target="_self">Edit Picture</a><br />	
	<a href="user.php?id=<?php echo "$uid"; ?>" target="_self">View Profile</a><br />
	</td>
     <!-- See the more advanced member system tutorial to see how to place default placeholder pic until member uploads one -->
    <td width="174" valign="top"><div align="center"><img src="photos/<?php echo "$uid"; ?>/pic1.jpg" alt="Ad" width="100" /></div></td>
    <td width="423" valign="top">
      <b>Country:</b> <?php echo "$country"; ?> <br />
      <b>State:</b> &nbsp;  &nbsp; &nbsp;<?php echo "$state"; ?><br />
      <b>City:</b> &nbsp; &nbsp;&nbsp; &nbsp;<?php echo "$city"; ?><br />
    </td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><b>Bio:</b><br />
        <br />
      <br />
    <?php echo "$bio"; ?></td>
  </tr>
</table>

</body>
</html>