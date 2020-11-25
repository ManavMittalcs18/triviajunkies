<?php
$enterId= $_POST['enterId'];	
$enterEmail= $_POST['enterEmail'];
$enterPassword= $_POST['enterPassword'];

$con= mysqli_connect('localhost','root', '');
if(!$con)
{
	echo "Not connect to the server";
}

if(!mysqli_select_db($con,'login'))
{
	echo " Database not selected";
}
 
$sql="INSERT INTO login_signup(enterId,enterEmail ,enterPassword) VALUES ('$enterId','$enterEmail',	'$enterPassword') ";

if(!mysqli_query($con,$sql))
{
	echo "Not inserted";
}
else
{
	echo "Data entered successfully";
}
header("refresh:3 ; url:login.html");
?>
