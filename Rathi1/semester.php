<html>
<head> <link rel="stylesheet" type="text/css" href="rescss.css">
<title> 
Semester
</title>
</head>
<body>
<?php include("headmenu.php")?>
<br><br><br>
<label class="set1"><center><b>SEMESTER WISE GRADE</b></center></label><br><br>
<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:100%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>SEMESTER</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
</thead>		
<tr cellspacing="5">
<td><b>SGPA</b></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; font-size:10pt; height:30px; padding:4px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
</tr>
<tr cellspacing="5">
<td><b>ARREAR STATUS</b> </td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/>
<option>select</option>
<option>NHA*</option>
<option>NSA*</option>
<option>SA*</option>
</select>
</td>
</tr>

<tr cellspacing="5">
<td><b>ARREAR COUNT</b></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; font-size:10pt; height:30px; padding:4px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:100px" name="txt"/></td>
</tr>
</table>
<label style="font-size:20px;color:red">NHA* No History of Arrear</label><br>
<label style="font-size:20px;color:red">NSA* No Standing Arrear</label><br>
<label style="font-size:20px;color:red">SA* Standing Arrear</label><br><br>
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:50s%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="10px">
<label><b>OVERALL GRADE</b></label><br><br>
<tr><td><label class="profile_control">CGPA</label></td>
<td><input type="text"  class="radiuscontrol" name="cgpa" size="20" style="font-size:10pt; height:30px; width:50px; margin-right:300%;" ></td>
<td style="width:50px"><label >10</label></td></tr>
</table>
<script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>
<label for="chkPassport">
    <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />
    ARREAR DETAILS
</label>
<div id="dvPassport" style="display: none"><br><br>
	<a href="arrearadd.php">
<center><button type="button" class="nextbutton"><center><b>ARREAR STATUS DETAILS</b></center></button></center>
	<!-- 1 st
	<table style="width="100%"; cellspacing="50" >

<tr><td><label class="profile_control">SEMESTER</label></td>
<td><select name="sem" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td></tr>

<tr><td><label class="profile_control">NAME OF THE SUBJECT</label></td>
<td><input type="text"  class="radiuscontrol" name="subname" size="20" style="font-size:10pt; height:30px; width:250px; margin-right:300%;" ></td></tr>

<tr><td><label class="profile_control">NO OF ATTEMPTS</label></td>
<td><select name="moa" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td></tr>
<tr><td><label class="profile_control">ATTEMPT CLEARED AT</label></td>
<td><select name="moacc" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td></tr>
<tr><td><label class="profile_control">REMARKS</label></td>
<td><select name="yoj" style="font-size:10pt; height:30px; width:250px; margin-right:300%;">
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td></tr>
</table>-->

<!--<table cellpacing="1">
<table id="dataTable"  ng-model="myVar" style="margin-bottom:80px;  margin-left:0%;  width:100%; background-color:#e1eaea" border="1" cellspacing="10px" cellpadding="15px">
<thead>
<tr>
<th>SEMESTER</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
</thead>		
<tr cellspacing="5">
<td><b>NAME OF THE SUBJECT</b></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; font-size:10pt; height:50px; padding:4px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:50px; width:110px" name="txt"/></td>
</tr>
<tr cellspacing="5">
<td><b>NO OF ATTEMPTS</b> </td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</td>
</tr>
<tr cellspacing="5">
<td><b>ATTEMPT CLEARED AT</b></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
</tr>
<tr cellspacing="5">
<td><b>REMARKS</b></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:110px" name="txt"/>
<option>select</option>
<option>PENDING</option>
<option>CLEARED</option>
</select>
</td>
</table>-->

</div>
<center>
<tr><td style="font-align:center">
<!--<button type="button" onclick="alert('Are you sure save this page')" class="savebutton">SAVE</button></td>-->
<!--<td><a href="evalutionform.php">
<button type="button" class="nextbutton">NEXT</button>-->
<td><button type="button" class="submitbutton">SUBMIT</button>
</td></tr>
</center>
</body>
</html>