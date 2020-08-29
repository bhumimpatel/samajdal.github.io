<?php

$conn= mysqli_connect('localhost','root','bhumi');

if($conn) 
{
	echo "Coonection sucessfully";
}
else
{
	echo "No connection ";
}
mysqli_select_db($conn,'samajdal');

$user =$_POST['user'];
$email = $_POST['email'];
$phone =$_POST['phone'];
$comment =$_POST['comment'];

$query = "insert into infodata (user ,email , phone , comment) values ('$user' , '$email' ,'$phone' ,'$comment')" ;


echo "$query"; 

mysqli_query($conn , $query);

?>