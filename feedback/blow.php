<?php
$Name= $_POST['Name'];	
$EmailAddress=	$_POST['EmailAddress'];
$Message= $_POST['Message'];	

$con= mysqli_connect('localhost','root', '');
if(!$con)
{
	echo "Not connect to the server";
}

if(!mysqli_select_db($con,'feedback'))
{
	echo " Database not selected";
}
 
$sql="INSERT INTO feed(Name ,EmailAddress ,Message) VALUES ('$Name', '$EmailAddress','$Message') ";

if(!mysqli_query($con,$sql))
{
	echo "Not inserted";
}
else
{
	echo "Data entered successfully";
}
header("refresh:3 ; url:new.html");
?>