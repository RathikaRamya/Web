<html>
<head><link rel="stylesheet" type="text/css" href="loginstyle.css">
<style>
#myDIV {
    width: 500px;
    height: 500px;
  
}
</style>
<title> 
Stu Details
</title>
</head>
<body>
<?php include("headmenu.php"); ?>
<?php
$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"

<br>
<div id="nav"><center> </center>
<div id="bodycolor">
<div id="table">


<table  cellspacing="10px">
<tr>
<td><label name="par" class="stufont">STUDENT </label></td><td><label name="parr" class="stufont">PARTICULARS</label></td></tr></table></center>

<table style="width="100%"; cellspacing="50"  >
<tr><td><span class="error">*</span><label class="profile_control" >STUDENT ID:</label></center></td>
<td><input type="text"  class="radiuscontrol" name="stuid" size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><label class="profile_control" >COLLEGE NAME:</label></td>
<td><input type="text" name="name" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><label class="profile_control" > FACULTY NAME:</label></td> 
<td><input type="text"  class="radiuscontrol" name="stuid" size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><span class="error">*</span><label class="profile_control" >DEPARTMENT:</label></td>
<td><select name="dept"  style="font-size:15pt;height:40px;width:190%; border-radius:15px; box-shadow:3px 3px 5px 6px #ccc;"  >
<option>select</option>
<option>AME</option>
<option>CIVIL</option>
<option>CSE</option>
<option>EEE</option>
<option>ECE</option>
<option>MECH</option>
<option>IT</option>
</select>
</td></tr>
<tr><td>
<label class="profile_control" >PRESENT DESIGNATION:</label></td>
<td><input type="text" name="duration" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>


<tr>
 
<td><span class="error">*</span><label class="profile_control">D.O.B</label></td>
<td><input type="date" name="dob" class="radiuscontrol" size="25" style="font-size:15pt;height:30px;width:190%; box-shadow:3px 3px 5px 6px #ccc;"  max="2099-12-31" > </td>
</tr>
 
<tr>
<td><span class="error">*</span><label class="profile_control">GENDER:</label></td>
<td style="padding-bottom:45px"><select  style="font-size:15pt; height:40px; width:190%; border-radius:15px; box-shadow:3px 3px 5px 6px #ccc;" name="gender"   >
<option>select</option>
<option>MALE</option>
<option>FEMALE</option>
</select>
</td></tr>

<tr>
<td><label class="profile_control">BLOOD GROUP:</label></td>
<td><select name="gender"   class="radiuscontrol"style="font-size:15pt;height:40px;width:190%; border-radius:15px; box-shadow:3px 3px 5px 6px #ccc;" >
<option>select</option>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>A2B+</option>
</select>
</td></tr>
<tr>
<td><span class="error">* <?php echo $emailErr;?></span><label class="profile_control">Email:</label></td>
<td><input type="text" name="email" class="radiuscontrol" placeholder="@gmail.com"size="25" style="font-size:20pt;height:30px; box-shadow:3px 3px 5px 6px #ccc; text-align:right" >
</td></tr>
<tr>
<td><span class="error">*</span><label class="profile_control">CONTACT NO:</label></td>
<td><input type="text" name="contact" class="radiuscontrol" size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><label class="profile_control">MOTHER TONGUE:</label></td>
<td><input type="text" name="mothertongue" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><label class="profile_control">LANGUAGE KNOWN:</label></td>
<td><input type="text" name="language" class="radiuscontrol" size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc" ></td></tr>
<tr>
<td><label class="profile_control">PAN CARD NO:</label></td>
<td><input type="text"  name="pan" class="radiuscontrol" size="25" style="font-size:15pt;height:30px;box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><label class="profile_control">AADHAR CARD NO:</label></td>
<td><input type="text" name="aathar" class="radiuscontrol" size="25" style="font-size:15pt;height:30px;box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><span class="error">*</span><label class="profile_control">PASPORT NO:</label></td>
<td><input type="text" name="passport" class="radiuscontrol" size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>
<tr>
<td><span class="error">*</span><label class="profile_control">ADDRESS:</label></td>
<td><input type="text" name="address" class="radiuscontrol" size="25"  placeholder="Address Line " style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" >

<input type="text" name="taluk" class="radiuscontrol" size="25" placeholder="Taluk" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" >
<input type="text" name="city" class="radiuscontrol" size="25" placeholder="City" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" >
<input type="text" name="district" class="radiuscontrol" size="25" placeholder="District" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" >
<input type="text" name="pincode" class="radiuscontrol" size="25" placeholder="Pincode" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" >
</td></tr>
<tr><td><span class="error">*</span><label class="profile_control">COMMUNITY:</label></td>
<td><select name="community"  style="font-size:15pt;height:40px;width:190%; border-radius:15px; box-shadow:3px 3px 5px 6px #ccc;" >
<option>select</option>
<option>OC</option>
<option>BC</option>
<option>BCM</option>
<option>MBC</option>
<option>SC</option>
<option>ST</option>
<option>DC</option>
</select>
</td></tr>

<tr><td><span class="error">*</span><label class="profile_control">BANK ACCNO:</label><span class="error"></td>
<td><input type="text" name="bank" class="radiuscontrol" size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td>
</tr>
 
<tr><td>
<label class="profile_control" >DATE OF JOINING:</label></td>
<td><input type="text" name="duration" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>

<tr><td>
<label class="profile_control" >SCALE OF PAY:</label></td>
<td><input type="text" name="duration" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>

<tr><td>
<label class="profile_control" >PRESENT BASIC PAY:</label></td>
<td><input type="text" name="duration" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td></tr>

<tr><td>
<label class="profile_control" >TOTAL SALARY:</label></td>
<td><input type="text" name="duration" class="radiuscontrol"  size="25" style="font-size:15pt;height:30px; box-shadow:3px 3px 5px 6px #ccc;" ></td>
</tr>
<tr><td>
<button class="buttonn"> save</button></td></tr>
</table>
<table><tr><td> <div id="next_button">
<a href="next.php">
<input type="submit" value="next"></a></div></tr>
</table>
</div>
</div>
</div>
</form>
</body>
</html>