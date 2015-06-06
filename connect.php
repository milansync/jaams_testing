<?php
$host="localhost";
$user="root";
$pass="infinity";
$db="tutorial";

$con=mysqli_connect($host,$user,$pass) or die( mysql_error());
mysqli_select_db($con,$db) ;
?>