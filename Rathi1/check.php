<html>
<body>
<script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>
<label for="chkPassport">
    <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />
    SSLC
</label>
<div id="dvPassport" style="display: none">
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
<th>YOP</th>
</thead>		
<tr cellspacing="5">
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
<option>select</option>
<option>STATEBOARD</option>
<option>MATRICULATION</option>
<option>CBSE</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
<option>select</option>
<option>ENGLISH</option>
<option>TAMIL</option>
</select>
</td>
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/></td>
<td><input type="text" placeholder="%" style="size=20px; font-size:10pt; height:30px; padding:4px; width:150px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
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
</div>
<script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>
<label for="chkPassport1">
    <input type="checkbox1" id="chkPassport1" onclick="ShowHideDiv(this1)" />
    HSC
</label>
<div id="dvPassport1" style="display: none">
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
<th>YOP</th>
</thead>		
<tr cellspacing="5">
<td><input type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
<option>select</option>
<option>STATEBOARD</option>
<option>MATRICULATION</option>
<option>CBSE</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
<option>select</option>
<option>ENGLISH</option>
<option>TAMIL</option>
</select>
</td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
<option>select</option>
<option>BIO-MATHS</option>
<option>CS</option>
<option>ARTS</option>
</select>
</td>
<td><input type="text" placeholder="%" style="size=20px; font-size:10pt; height:30px; padding:4px; width:150px" name="txt"/></td>
<td><select type="text" placeholder="" style="size=20px; padding:4px; font-size:10pt; height:30px; width:150px" name="txt"/>
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
</body>
</html>