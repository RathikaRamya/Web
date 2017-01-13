<?php
session_start();
$staff_id = $_POST["staffid"];
$full_name = $_POST["fname"];
$dob = $_POST["dob"];
$usernamee = $_POST["usernamee"];
$passwordd = $_POST["pass"];
//checking
if($staff_id=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the register no')</script>";
exit();//this use if first is not work then other will not show
    }
	if($full_name=='')
    {
        echo"<script>alert('Please enter the full name')</script>";
         exit();
	}
	if($dob=='')
    {
        echo"<script>alert('Please enter the Date of Birth')</script>";
         exit();
	}
	if($usernamee=='')
    {
        echo"<script>alert('Please enter the username')</script>";
         exit();
	}
	if($passwordd=='')
    {
        echo"<script>alert('Please enter the password')</script>";
         exit();
	}
	
/*$register_no = mysqli_real_escape_string($con, $_POST['regno']);
$full_name = mysqli_real_escape_string($con, $_POST['fname']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['pass']);*/

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.

$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");

    $insert = mysqli_query($con,"INSERT INTO staffcreate VALUES('$staff_id','$full_name','$dob','$usernamee','$passwordd')");
	
	$check_register_no_query = mysqli_query($con,"select * from createpage WHERE regno='$register_no'");
  //  $run_query = mysqli_query($con, $check_register_no_query);
	
  if(!mysqli_query($con, $insert))
    {
    echo 'Records added successfully.';
 }
 else{
	 echo 'Failed';
 }
	?>