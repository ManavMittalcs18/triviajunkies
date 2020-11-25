<?php
$Name= $_POST['Name'];	
$EmailAddress=	$_POST['EmailAddress'];
$Phone= $_POST['Phone'];	
$Subject= $_POST['Subject'];
$Message= $_POST['Message'];

$con= mysqli_connect('localhost','root', '');
if(!$con)
{
	echo "Not connect to the server";
}

if(!mysqli_select_db($con,'contactus'))
{
	echo " Database not selected";
}

$sql="INSERT INTO contact(Name, EmailAddress, Phone, Subject, Message) VALUES ('$Name',	'$EmailAddress', '$Phone', '$Subject',	'$Message') ";

if(!mysqli_query($con,$sql))
{
	echo "Not inserted";
}
else
{
	echo "Data entered successfully";
}
header("refresh:3 ; url:Contactus.html");
?>