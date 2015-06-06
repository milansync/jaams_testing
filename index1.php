 <?php
 session_start();
include_once "connect.php";
if(isset($_POST['facultylogin'])){
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
header("location: user2.php");
}
}
exit();
}
else{
echo 'incorrect username and password<br> <a href="index1.php">click here </a>to go back to home page ';
exit();
}
}

 if(isset($_POST['adminlogin'])){
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
echo 'incorrect username and password<br> <a href="index1.php">click here </a>to go back to home page ';
exit();
}
}
 
 ?>
 <html>
<head>
<meta charset="utf-8">
<title>JAAMS</title>

<style type="text/css">
</style>
<link rel="shortcut icon" href="favicon.ico" /> <!-- for the icon in the title bar -->
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
<form action="index1.php" method="post" enctype="multipart/form-data">
username:<p><input type="text" name="username"/><br/></p>
password:<p><input type="password" name="password"/><br/></p>
<input type="submit" value="faculty Login" name="facultylogin"/><br><br>
<input type="submit" value="admin Login" name="adminlogin"/>
</form>
<p><span class="btn-round">or</span></p>
<p>
<a class="iiitm_site"></a>
<a href="http://www.iiitm.ac.in/"><button class="iiitm">go to iiitm.ac.in</button></a>

</p>
</div> <!-- end login -->
</body>
</html>