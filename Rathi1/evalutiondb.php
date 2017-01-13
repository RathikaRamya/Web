<?php
session_start();
$title = $_POST["title"];
$trainingdate = $_POST["trainingdate"];
$topic = $_POST["topic"];
$session = $_POST["session"];
$trainername = $_POST["trainername"];
$venue = $_POST["venue"];
$check = $_POST["check"];
$check1 = $_POST["check1"];
$check2 = $_POST["check2"];
$check3 = $_POST["check3"];
$check4 = $_POST["check4"];
$check5 = $_POST["check5"];
$check6 = $_POST["check6"];
$check7 = $_POST["check7"];
$check8 = $_POST["check8"];
$check9 = $_POST["check9"];
$check10 = $_POST["check10"];
$comment = $_POST["comment"];
//checking
if($title=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the title')</script>";
exit();//this use if first is not work then other will not show
    }
	if($trainingdate=='')
    {
        echo"<script>alert('Please enter the trainingdate')</script>";
         exit();
	}
	if($topic=='')
    {
        echo"<script>alert('Please enter the topic')</script>";
         exit();
	}
	if($session=='')
    {
        echo"<script>alert('Please enter the session')</script>";
         exit();
	}
	if($trainername=='')
    {
        echo"<script>alert('Please enter the trainername')</script>";
         exit();
	}
	if($venue=='')
    {
        echo"<script>alert('Please enter the venue')</script>";
         exit();
	}
	if($check=='')
    {
        echo"<script>alert('Please enter the check')</script>";
         exit();
	}
if($comment=='')
    {
        echo"<script>alert('Please enter the comment')</script>";
         exit();
	}
	
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.

$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");
//if(@$_POST['save']){
    $query = mysqli_query($con,"INSERT INTO evalution VALUES('$title','$trainingdate','$topic','$session','$trainername','$venue','$comment','$check','$check1','$check2','$check3','$check4','$check5','$check6','$check7','$check8','$check9','$check10')");
	//echo "Your Data Inserted";}
	//$check_register_no_query = mysqli_query($con,"select * from admission WHERE title='$title'");
	//$check_register_no_query = mysqli_query($con,"select * from createpage WHERE regno='$register_no'");
	
  if(!mysqli_query($con, $query))
    {
    echo 'Records added successfully.';
 }
 else{
	 echo 'Failed';
 }

?>
