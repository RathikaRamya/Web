<html>
<head> <link rel="stylesheet" type="text/css" href="rescss.css">
<title> 
Activity
</title>
</head>
<body>
<?php include("headmenu.php")?>
<br><br><br>
<label class="set1"><center><b>EXTRA CURRICULAR ACTIVITIES</b></center></label>
<center>
<form method="post" action="activitydb.php" name="stuform">
<table style="width="100%"; cellspacing="50">
<tr><td><label class="profile_control">CERTIFICATES:</label></td>
<td><input type="text"  class="radiuscontrol" name="certificates" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">VALUE ADDED / CERTIFIED COURSES:</label></td>
<td><input type="text"  class="radiuscontrol" name="courses" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">SKILL SET:</label></td>
<td><input type="text"  class="radiuscontrol" name="skills" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">GATE / TANCET SCORE:</label></td>
<td><input type="text"  class="radiuscontrol" name="gate" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<center>
<tr><td style="font-align:center">
<button name="save" value="save" onclick="alert('Are you sure go to save this page')" class="savebutton">SAVE</button></td>

<td><a href="semester.php">
<button type="button" onclick="alert('Are you sure go to next page')" class="nextbutton">NEXT</button></a></td>

<td><!--<button type="button" class="submitbutton">SUBMIT</button>--></td></tr>
</center>
</form>
</center>
</body>
</html>