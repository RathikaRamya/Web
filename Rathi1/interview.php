<html>
<head> <link rel="stylesheet" type="text/css" href="rescss.css">
<title> 
Interview
</title>
</head>
<body>
<?php include("headmenu.php")?>
<label class="set1"><center><b>INTERVIEW TRACK</b></center></label><br><br>
<label class="set"><center><b>TRACK 1</b></center></label>
<center>
<form method="post" action="" name="stuform">
<table style="width="100%"; cellspacing="50"  >
<tr><td><label class="profile_control">NAME OF ORGANIZATION:</label></td>
<td><input type="text"  class="radiuscontrol" name="org" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">VENUE:</label></td>
<td><input type="text"  class="radiuscontrol" name="venue" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">DATE OF INTERVIEW:</label></td>
<td><input type="date" name="dname" class="fontinput" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>
<tr><td><label class="profile_control">MODE OF RECRUITMENT:</label></td>
<td><select name="nor" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>ON-CAMPUS</option>
<option>OFF CAMPUS</option>
<option>POOL DRIVE</option>
<option>JOBFAIR</option>
<option>TNSLPP(ANNAUNI)</option>
<option>SELF</option>
</select>
</td></tr>
</table>
<br>
<label><center><b>ROUNDS</b></center></label><br><br>
<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:50%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>ROUNDS</th>
<th>REMARKS</th>
<th>STATUS</th>
</thead>		
<tr cellspacing="5">
<td><input type="label" value="1" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="label"/></td>
<td><input type="text" style="size=20px; padding:4px; font-size:10pt; height:30px; width:200px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:200px" name="txt"/>
<option>select</option>
<option>SELECTED</option>
<option>NOT SELECTED</option>
</select>
</td>
</tr>
<tr cellspacing="5">
<td><input type="text" value="2" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" style="size=20px; padding:4px; font-size:10pt; height:30px; width:200px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:200px" name="txt"/>
<option>select</option>
<option>SELECTED</option>
<option>NOT SELECTED</option>
</select>
</td>
</tr>
<tr cellspacing="5">
<td><input type="text" value="3" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" style="size=20px; padding:4px; font-size:10pt; height:30px; width:200px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:200px" name="txt"/>
<option>select</option>
<option>SELECTED</option>
<option>NOT SELECTED</option>
</select>
</td>
</tr>
</table>
<table style="width="100%"; cellspacing="50"  >
<tr><td><label class="profile_control">FINAL SELECTION:</label></td>
<td><select name="final" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>QUALIFIED</option>
<option>WAITING FOR RESULT</option>
<option>DISQUALIFIED</option>
</select>
</td></tr>
</table><br><br>
<center>
<tr><td style="font-align:center;";>
<button type="button" onclick="alert('Are you sure save this page')" class="savebutton">SAVE</button></td>
 <td><a href="evalutionform.php">
<button type="button" onclick="alert('Are you sure go to next page')" class="nextbutton">NEXT</button></a></td>
</td></tr>
</center>
</form>
</center>
</body>
</html>