<?php
session_start();
//SSLC
$sslcname = $_POST["sslcname"];
$sslcboard = $_POST["sslcboard"];
$sslcmedium = $_POST["sslcmedium"];
$sslcmark = $_POST["sslcmark"];
$sslcpercentage  = $_POST["sslcpercentage"];
$sslcyop  = $_POST["sslcyop"];
//HSC
$hscname  = $_POST["hscname"];
$hscboard  = $_POST["hscboard"];
$hscmedium  = $_POST["hscmedium"];
$hscstream  = $_POST["hscstream"];
$hscpercentage  = $_POST["hscpercentage"];
$hscyop  = $_POST["hscyop"];
//Diploma
$dipname  = $_POST["dipname"];
$dipboard  = $_POST["dipboard"];
$dipbranch  = $_POST["dipbranch"];
$dippercentage  = $_POST["dippercentage"];
$dipclass  = $_POST["dipclass"];
$dipyop  = $_POST["dipyop"];
//UG
$ugname  = $_POST["ugname"];
$ugboard  = $_POST["ugboard"];
$ugbranch  = $_POST["ugbranch"];
$ugpercentage  = $_POST["ugpercentage"];
$ugclass  = $_POST["ugclass"];
$ugyop  = $_POST["ugyop"];
//checking
if($sslcname=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the certificates')</script>";
exit();//this use if first is not work then other will not show
    }
	if($sslcboard=='')
    {
        echo"<script>alert('Please enter the courses')</script>";
         exit();
	}
	if($sslcmedium=='')
    {
        echo"<script>alert('Please enter the skills')</script>";
         exit();
	}
	if($sslcmark=='')
    {
        echo"<script>alert('Please enter the gate')</script>";
         exit();
	}
	if($sslcpercentage=='')
    {
        echo"<script>alert('Please enter the gate')</script>";
         exit();
	}
	if($sslcyop=='')
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
	
	 $query = mysqli_query($con,"INSERT INTO qualification VALUES('$sslcname','$sslcboard','$sslcmedium','$sslcmark','$sslcpercentage','$sslcyop','$hscname',
	'$hscboard ','$hscmedium','$hscstream','$hscpercentage','$hscyop','$dipname','$dipboard','$dipbranch','$dippercentage','$dipclass','$dipyop','$ugname','$ugboard','$ugbranch','$ugpercentage','$ugclass','$ugyop')");
	$check_register_no_query = mysqli_query($con,"select * from admission WHERE sslcname='$sslcname'");
	//$check_register_no_query = mysqli_query($con,"select * from createpage WHERE regno='$register_no'");
	
  if(!mysqli_query($con, $query))
    {
    echo 'Records added successfully.';
 }
 else{
	 echo 'Failed';
 }

?>