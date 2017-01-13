<html>
<head> <link rel="stylesheet" type="text/css" href="rescss.css">
<title> 
Admission
</title>
</head>
<body>
<?php include("headmenu.php")?>
<br><br><br>
<label class="set1"><center><b>STUDENT ADMISSION DETAILS</b></center></label>
<center>
<form method="post" action="admissiondb.php" name="stuform">


<table style="width="100%"; cellspacing="50" >
<tr><td><label class="profile_control">CUT OFF MARKS:</label></td>
<td><input type="text"  class="radiuscontrol" name="cutoff" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">FIRST GRADUATE:</label></td>
<td><select name="fgraduate" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>YES</option>
<option>NO</option>
</select>
</td></tr>
<tr><td><label class="profile_control">MODE OF ADMISSION:</label></td>
<td><select name="moa" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>COUNSELLING</option>
<option>MANAGEMENT</option>
</select>
</td></tr>
<tr><td><label class="profile_control">MODE OF ACCOMMODATION:</label></td>
<td><select name="moacc" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>DAY-SCHOLAR</option>
<option>HOSTELLER</option>
</select>
</td></tr>
<tr><td><label class="profile_control">YEAR OF JOINING:</label></td>
<td><select name="yoj" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
</select>
</td></tr>
<center>
<tr><td style="font-align:center">
<button name="save" value="save" onclick="alert('Are you sure go to save this page')" class="savebutton">SAVE</button></td>
<td><a href="schoolings.php">
<button type="button" onclick="alert('Are you sure go to next page')" class="nextbutton">NEXT</button></a></td>
<td><!--<button type="button" class="submitbutton">SUBMIT</button>--></td></tr>
</center>
</table>
</form>
</center>
</body>
</html>