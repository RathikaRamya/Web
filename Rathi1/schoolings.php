<html>
<head> <link rel="stylesheet" type="text/css" href="rescss.css">
<title> 
Education
</title>
</head>
<body>
<?php include("headmenu.php")?>
<br><br><br>
<label class="set1"><center><b>QUALIFICATION DETAILS</b></center></label><br><br>
<form method="POST" action="qualificationdb.php" name="stuform">
<label><center><b>SSLC</b></center></label>
<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:100%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>SCHOOL NAME</th>
<th>BOARD</th>
<th>MEDIUM</th>
<th>MARKS</th>
<th>PERCENTAGE</th>
<th>YOP*</th>
</thead>		
<tr cellspacing="5">
<!--input field-->
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="sslcname"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="sslcboard"/>
<option>select</option>
<option>STATEBOARD</option>
<option>MATRICULATION</option>
<option>CBSE</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="sslcmedium"/>
<option>select</option>
<option>ENGLISH</option>
<option>TAMIL</option>
</select>
</td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="sslcmark"/></td>
<td><input type="text" placeholder="%" style="size=20px; font-size:10pt; height:30px; padding:4px; width:150px" name="sslcpercentage"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="sslcyop"/>
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
</td>
</table>
<label><center><b>HSC</b></center></label>
<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:100%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>SCHOOL NAME</th>
<th>BOARD</th>
<th>MEDIUM</th>
<th>STREAM</th>
<th>PERCENTAGE</th>
<th>YOP*</th>
</thead>		
<tr cellspacing="5">
<!--input field-->
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="hscname"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="hscboard"/>
<option>select</option>
<option>STATEBOARD</option>
<option>MATRICULATION</option>
<option>CBSE</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="hscmedium"/>
<option>select</option>
<option>ENGLISH</option>
<option>TAMIL</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="hscstream"/>
<option>select</option>
<option>BIO-MATHS</option>
<option>CS</option>
<option>ARTS</option>
</select>
</td>
<td><input type="text" placeholder="%" style="size=20px; font-size:10pt; height:30px; padding:4px; width:150px" name="hscpercentage"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="hscyop"/>
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
</td>
</tr>
</table>
<label><center><b>DIPLOMA</b></center></label>
<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:100%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>COLLEGE NAME</th>
<th>BOARD</th>
<th>BRANCH</th>
<th>PERCENTAGE</th>
<th>CLASS OBTAINED</th>
<th>YOP*</th>
</thead>		
<tr cellspacing="5">
<!--input field-->
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="dipname"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="dipboard"/>
<option>select</option>
<option>STATEBOARD</option>
<option>MATRICULATION</option>
<option>CBSE</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="dipbranch"/>
<option>select</option>
<option>AUTOMOBILE</option>
<option>CIVIL</option>
<option>COMPUTER SCIENCE</option>
<option>COMPUTER TECHNOLOGY</option>
<option>ELECTRONICS AND COMMUNICATION</option>
<option>ELECTRICAL AND ELECTRONICS</option>
<option>MECHANICAL</option>
<option>INFORMATION TECHNOLOGY</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="dippercentage"/>
<option>select</option>
<option>DISTINCTION</option>
<option>1st CLASS</option>
<option>2nd CLASS</option>
</select>
</td>
<td><input type="text" placeholder="%" style="size=20px; font-size:10pt; height:30px; padding:4px; width:150px" name="dipclass"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="dipyop"/>
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
</td>
</tr>
</table>
<label><center><b>UG</b></center></label>
<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:100%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>COLLEGE NAME</th>
<th>BOARD</th>
<th>BRANCH</th>
<th>PERCENTAGE</th>
<th>CLASS OBTAINED</th>
<th>YOP*</th>
</thead>		
<tr cellspacing="5">
<!--input field-->
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="ugname"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="ugboard"/>
<option>select</option>
<option>STATEBOARD</option>
<option>MATRICULATION</option>
<option>CBSE</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="ugbranch"/>
<option>select</option>
<option>AUTOMOBILE</option>
<option>CIVIL</option>
<option>COMPUTER SCIENCE</option>
<option>COMPUTER TECHNOLOGY</option>
<option>ELECTRONICS AND COMMUNICATION</option>
<option>ELECTRICAL AND ELECTRONICS</option>
<option>MECHANICAL</option>
<option>INFORMATION TECHNOLOGY</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="ugpercentage"/>
<option>select</option>
<option>DISTINCTION</option>
<option>1st CLASS</option>
<option>2nd CLASS</option>
</select>
</td>
<td><input type="text" placeholder="%" style="size=20px; font-size:10pt; height:30px; padding:4px; width:150px" name="ugclass"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="ugyop"/>
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
</td>
</tr>
</table>
<label style="font-size:20px;color:red">* Year of Passing</label>
<center>
<tr><td style="font-align:center">
<button name="save" value="save" onclick="alert('Are you sure go save this page')" class="savebutton">SAVE</button></td>
<td><a href="activity.php">
<button type="button" onclick="alert('Are you sure go to next page')" class="nextbutton">NEXT</button></a></td>
<td><!--<button type="button" class="submitbutton">SUBMIT</button>--></td></tr>
</center>
</form>
</body>
</html>