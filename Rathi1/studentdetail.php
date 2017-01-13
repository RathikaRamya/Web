<html>
<head><link rel="stylesheet" type="text/css" href="loginstyle.css">
<style>
#myDIV {
    width: 500px;
    height: 500px;
  
}
</style>
<title>Student Details</title>
</head>
<body>
<?php include("headmenu.php"); ?><center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"

<br>
<div id="nav">
<div id="bodycolor">
<div id="table">


<table  cellspacing="10px">
<tr>
<td><label name="par" class="stufont">STUDENT </label></td><td><label name="parr" class="stufont">PARTICULARS</label></td></tr></table>
<table style="width="100%"; cellspacing="50"  >
<tr><td><label class="profile_control">REG.NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="regno" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">NAME:</label></td>
<td><input type="text"  class="radiuscontrol" name="name" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">ADMITTED TO:</label></td>
<td><input type="text"  class="radiuscontrol" name="admitted" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">DEPARTMENT:</label></td>
<td><input type="text"  class="radiuscontrol" name="dept" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">DURATION:</label></td>
<td><input type="text"  class="radiuscontrol" name="duration" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">D.O.B:</label></td>
<td><input type="text"  class="radiuscontrol" name="dob" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">GENDER:</label></td>
<td><input type="text"  class="radiuscontrol" name="gender" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">BLOOD GROUP:</label></td>
<td><input type="text"  class="radiuscontrol" name="blood" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">Email:</label></td>
<td><input type="text"  class="radiuscontrol" name="email" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">CONTACT NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="contact" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">MOTHER TONGUE:</label></td>
<td><input type="text"  class="radiuscontrol" name="mothertongue" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">LANGUAGE KNOWN:</label></td>
<td><input type="text"  class="radiuscontrol" name="language" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">PAN CARD NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="pancard" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">AADHAR CARD NO:</label></td>
<td><input type="text"  class="radiuscontrol" name="aadhar" size="20" style="font-size:20pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
</form>
</center>

</body>

</html>