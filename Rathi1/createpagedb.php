<?php
session_start();
$register_no = $_POST["regno"];
$full_name = $_POST["fname"];
//$dob = $_POST["dob"];
$username = $_POST["username"];
$password = $_POST["pass"];

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.
$connection = mysqli_connect("$host","$username","$password")or die("cannot connect"); 
mysqli_select_db($connection,"ksr")or die("cannot select DB");

$insert = mysqli_query($connection,"INSERT INTO createpage VALUES('$register_no','$full_name','$username','$password')")or die(mysqli_error());
//$sql="insert into createpage(REGISTER_NO,FULL_NAME,D.O.B,USER_NAME,PASSWORD) values('$register_no','$full_name','$dob','$username','$password')";
if(mysqli_query($connection, $insert)){
 echo 'success';
 }
 else{
	 mysqli_error();
 }
 

?>





