<?php

session_start();
$cut_off = $_POST["cutoff"];
$first_graduate = $_POST["fgraduate"];
$mode_of_admission = $_POST["moa"];
$mode_of_accommodation = $_POST["moacc"];
$year_of_joining = $_POST["yoj"];
//checking
if($cut_off=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the cutoff')</script>";
exit();//this use if first is not work then other will not show
    }
	if($first_graduate=='')
    {
        echo"<script>alert('Please enter the first graduate')</script>";
         exit();
	}
	if($mode_of_admission=='')
    {
        echo"<script>alert('Please enter the mode of admission')</script>";
         exit();
	}
	if($mode_of_accommodation=='')
    {
        echo"<script>alert('Please enter the mode of accommodation')</script>";
         exit();
	}
	if($year_of_joining=='')
    {
        echo"<script>alert('Please enter the year of joining')</script>";
         exit();
	}

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.

$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");

    $query = mysqli_query($con,"INSERT INTO admission VALUES('$cut_off','$first_graduate','$mode_of_admission','$mode_of_accommodation','$year_of_joining')");
	$check_register_no_query = mysqli_query($con,"select * from admission WHERE cutoff='$cut_off'");
	//$check_register_no_query = mysqli_query($con,"select * from createpage WHERE regno='$register_no'");
	
  if(!mysqli_query($con, $query))
    {
    echo 'Records added successfully.';
 }
 else{
	 echo 'Failed';
 }
?>