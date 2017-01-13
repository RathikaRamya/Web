<?php session_start(); ?>
<html>
<head> <link rel="stylesheet" type="text/css" href="rescss.css">
<title> 
Personal
</title></head>

<body>
<?php include("headmenu.php")?>
<br><br><br>
<label class="set1"><center><b>STUDENT PERSONAL DETAILS</b></center></label>
<center>
<form method="POST" action="personaldb.php" name="stuform">
<table style="width="100%"; cellspacing="50"  >
<tr><td><label class="profile_control">REG.NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="regno" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">NAME:</label></td>
<td><input type="text"  class="radiuscontrol" name="name" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">DEGREE:</label></td>
<td><input type="text"  class="radiuscontrol" name="degree" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">BRANCH:</label></td>
<td>
<select name="branch" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>AME</option>
<option>CIVIL</option>
<option>CSE</option>
<option>EEE</option>
<option>ECE</option>
<option>MECH</option>
<option>IT</option>
</select></td></tr>
<tr><td><label class="profile_control">SECTION:</label></td>
<td><select name="section" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>A</option>
<option>B</option>
<option>C</option>
<option>D</option>
</select>
</td></tr>
<tr><td><label class="profile_control">GENDER:</label></td>
<td><select name="gender" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>MALE</option>
<option>FEMALE</option>
</select>
</td></tr>
<tr><td><label class="profile_control">D.O.B:</label></td>
<td><input type="date"  class="radiuscontrol" name="dob" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" max="2099-12-31" ></td></tr>
<tr><td><label class="profile_control">MOTHER TONGUE:</label></td>
<td><input type="text"  class="radiuscontrol" name="mothertongue" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">LANGUAGE KNOWN:</label></td>
<td><input type="text"  class="radiuscontrol" name="language" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">NATIONALITY:</label></td>
<td><input type="text"  class="radiuscontrol" name="nationality" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">COMMUNITY:</label></td>
<td><select name="community" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
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
<tr><td><label class="profile_control">RELIGION:</label></td>
<td><select name="religion" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>HINDU</option>
<option>MUSLIM</option>
<option>CHRISTIANS</option>
<option>OTHERS</option>
</select>
</td></tr>
<tr><td><label class="profile_control">BLOOD GROUP:</label></td>
<td>
<select name="blood" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
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
<tr><td><label class="profile_control">ADDRESS:</label></td>
<td><textarea name="address" style="height:80px; width:250px;"></textarea>
<tr><td><label class="profile_control">PHONE NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="phone" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">MOBILE NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="mobile" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">Email ID:</label></td>
<td><input type="text"  class="radiuscontrol" name="email" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">PASSPORT NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="passport" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">AADHAR CARD NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="aadhar" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">PAN CARD NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="pancard" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">FATHER'S NAME:</label></td>
<td><input type="text"  class="radiuscontrol" name="fname" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">FATHER'S QUALIFICATION:</label></td>
<td><select name="fedu" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>MIDDLE LEVEL(1-5)</option>
<option>SECONDARY LEVEL(6-10)</option>
<option>HIGHER SECONDARY(11-12)</option>
<option>DEGREE(BSc/B.E/MSc/M.E..)</option>
</select>
</td></tr>
<tr><td><label class="profile_control">FATHER'S OCCUPATION:</label></td>
<td><input type="text"  class="radiuscontrol" name="focc" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">ANNUAL INCOME:</label></td>
<td><input type="text"  class="radiuscontrol" name="annual" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control"> MOTHER'S NAME:</label></td>
<td><input type="text"  class="radiuscontrol" name="mname" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">MOTHER'S QUALIFICATION:</label></td>
<td><select name="medu" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>MIDDLE LEVEL(1-5)</option>
<option>SECONDARY LEVEL(6-10)</option>
<option>HIGHER SECONDARY(11-12)</option>
<option>DEGREE(BSc/B.E/MSc/M.E..)</option>
</select>
</td></tr>
<tr><td><label class="profile_control">MOTHER'S OCCUPATION:</label></td>
<td><input type="text"  class="radiuscontrol" name="mocc" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">SIBLINGS:</label></td>
<td><select name="sibling" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>None</option>
<option>BROTHER</option>
<option>SISTER</option>
<option>BROTHER & SISTER</option>
</select>
</td></tr><tr><td style="font-align:center">
<button name="save" value="save" onclick="alert('Are you sure go save this page')" class="savebutton">SAVE</button></td>
<td><a href="studentadmission.php">
<button type="button" onclick="alert('Are you sure go to next page')" class="nextbutton">NEXT</button></a>
</td><!--<button type="button" class="submitbutton">SUBMIT</button>--></form>
</center>
</body>
</html>