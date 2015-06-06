 <?php
 session_start();
 include_once "connect.php";
// if satement for faculty login
if(isset($_POST['FACULTYLOGIN'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM members WHERE username='$username' AND password='$password' LIMIT 1";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==1)
{
while($row= mysqli_fetch_array($res))
{
$dbid= row['id'];
$dbusername= $row['username'];
$dbpassword= $row['password'];
if($username== $dbusername && $password== $dbpassword)
{
$_SESSION['username']= $dbusername;
$_SESSION['id']= $dbid;
header("location:user.php");
}
}
exit();
}
else{
echo 'incorrect username and password<br> <a href="index.php">click here </a>to go back to home page ';
exit();
}
}


 if(isset($_POST['ADMINLOGIN'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM members WHERE username='$username' AND password='$password' LIMIT 1";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==1)
{
while($row= mysqli_fetch_array($res))
{
$dbid= row['id'];
$dbusername= $row['username'];
$dbpassword= $row['password'];
if($username== $dbusername && $password== $dbpassword)
{
$_SESSION['username']= $dbusername;
$_SESSION['id']= $dbid;
header("location: admin.php");
}
}
exit();
}
else{
echo 'incorrect username and password<br> <a href="index.php">click here </a>to go back to home page ';
exit();
}
}
 
 
 ?>
 
 <html>
<head>
<meta charset="utf-8">
<title>JAAMS</title>
<link rel="stylesheet" href="test2.css">
<link rel="shortcut icon" href="favicon.ico" />  <!-- for the icon in the title bar -->
</head>
<body>
<table style="background-color: #CCC" width="100%" border="0" cellpadding="12">
  <tr>
    <td width="20%"><img src="logo.png" alt="my logo" /></td>
	<td width="100%"<p><h2>Indian Institute Of Informaton Technology And Management , Gwalior</h2></p> </td>
  </tr>
</table>
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
<fieldset>
<p><input type="text" required value="username" name="username" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')this.value='' "></p>
<p><input type="password" required value="password" name="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value='' "></p>
<p><a href="#">Forgot Password?</a></p>
<p><input type="submit" value="faculty Login" name="FACULTYLOGIN"/></p>
<p><input type="submit" value="admin Login" name="ADMINLOGIN"/></p>
</fieldset>
</form>
<p><span class="btn-round">or</span></p>
<p>
<a class="iiitm_site"></a>
<a href="http://www.iiitm.ac.in/"><button class="iiitm">go to iiitm.ac.in</button></a>

</p>
</div> <!-- end login -->
</body>
</html>