<?php
session_start();
if(isset($_POST['regno'])){$register_no = $_POST["regno"];}
if(isset($_POST['name'])){$name = $_POST["name"];}
if(isset($_POST['degree'])){$degree = $_POST["degree"];}
if(isset($_POST['branch'])){$branch = $_POST["branch"];}
if(isset($_POST['section'])){$section = $_POST["section"];}
if(isset($_POST['gender'])){$gender = $_POST["gender"];}
if(isset($_POST['dob'])){$dob = $_POST["dob"];}
if(isset($_POST['mothertongue'])){$mother_tongue = $_POST["mothertongue"];}
if(isset($_POST['language'])){$language_known = $_POST["language"];}
if(isset($_POST['nationality'])){$nationality = $_POST["nationality"];}
if(isset($_POST['community'])){$community = $_POST["community"];}
if(isset($_POST['religion'])){$religion = $_POST["religion"];}
if(isset($_POST['blood'])){$blood_group = $_POST["blood"];}
if(isset($_POST['address'])){$address = $_POST["address"];}
if(isset($_POST['phone'])){$phone_no = $_POST["phone"];}
if(isset($_POST['mobile'])){$mobile_no = $_POST["mobile"];}
if(isset($_POST['email'])){$email_id = $_POST["email"];}
if(isset($_POST['passport'])){$passport_no = $_POST["passport"];}
if(isset($_POST['aadhar'])){$aadhar_no = $_POST["aadhar"];}
if(isset($_POST['pancard'])){$pancard_no = $_POST["pancard"];}
if(isset($_POST['fname'])){$father_name = $_POST["fname"];}
if(isset($_POST['fedu'])){$father_qualification = $_POST["fedu"];}
if(isset($_POST['focc'])){$father_occupation = $_POST["focc"];}
if(isset($_POST['annual'])){$annual_income = $_POST["annual"];}
if(isset($_POST['mname'])){$mother_name = $_POST["mname"];}
if(isset($_POST['medu'])){$mother_qualification = $_POST["medu"];}
if(isset($_POST['mocc'])){$mother_occupation = $_POST["mocc"];}
if(isset($_POST['sibling'])){$sibling = $_POST["sibling"];}

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.
//$insert_user="insert into contact (Username,Email,Message) VALUE ('$Username','$Email','$Message')";
$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");
$insert_user ="INSERT INTO personal VALUES('$register_no','$name','$degree','$branch','$section','$gender','$dob','$mother_tongue','$language_known','$nationality','$community','$religion','$blood_group','$address',
'$phone_no','$mobile_no','$email_id','$passport_no','$aadhar_no','$pancard_no','$father_name','$father_qualification','$father_occupation','$annual_income','$mother_name','$mother_qualification','$mother_occupation','$sibling')";


if(mysqli_query($con, $insert_user))
    {
    echo 'Records added successfully.';
 }
 else{
	 echo 'Failed';
 }

 ?>


