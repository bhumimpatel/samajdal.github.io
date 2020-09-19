<?php 

$Connecation = mysqli_connect('localhost','root');

if ($Connecation)
{
	echo "Connecation successfull";
}

else
{
	echo " No Connecation ";
}

mysqli_select_db($Connecation , 'samajdal');

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];


$query = " insert into infodata(user , email , phone , comment) 
values ('$user' , '$email' , '$phone' , '$comment') ";

echo "$query";

mysqli_query($Connecation ,$query);

header('location:index.html');

 ?>

