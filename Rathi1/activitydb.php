<?php
$certificates = $_POST["certificates"];
$courses = $_POST["courses"];
$skills = $_POST["skills"];
$gate = $_POST["gate"];
//checking
if($certificates=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the certificates')</script>";
exit();//this use if first is not work then other will not show
    }
	if($courses=='')
    {
        echo"<script>alert('Please enter the courses')</script>";
         exit();
	}
	if($skills=='')
    {
        echo"<script>alert('Please enter the skills')</script>";
         exit();
	}
	if($gate=='')
    {
        echo"<script>alert('Please enter the gate')</script>";
         exit();
	}
	

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.

$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");
	
	 $query = mysqli_query($con,"INSERT INTO activity VALUES('$certificates','$courses','$skills','$gate')");
	$check_register_no_query = mysqli_query($con,"select * from admission WHERE certificates='$certificates'");
	//$check_register_no_query = mysqli_query($con,"select * from createpage WHERE regno='$register_no'");
	
  if(!mysqli_query($con, $query))
    {
    echo 'Records added successfully.';
 }
 else{
	 echo 'Failed';
 }

?>