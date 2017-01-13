<html>
<head><link rel="stylesheet" type="text/css" href="CSS1/tablehead.css">
	<TITLE> Add/Remove dynamic rows in HTML table </TITLE>
	<meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <title>Snippet - Bootsnipp.com</title>
                                <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
                                <style>.table-sortable tbody tr {background-color:pink;
    cursor: move;
}.form-control{
	size:3px;
	color:black;
	box-sizing: border-box;
	margin-left:30%;
	width:10%;
	padding:20px;

}
.text-center{
	text-align:center;
	float:center;
}

</style>
                                <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                                <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
								</script><SCRIPT language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[0].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					if(rowCount <= 1) {
						alert("Cannot delete all the rows.");
						break;
					}
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	</SCRIPT>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</HEAD>
<BODY>
	<html>
<head><link rel="stylesheet" type="text/css" href="rescss.css"></head>
<title> 
Stu Details
</title>
</head>
<body style="background-color:white; margin:0px;">
<div id="header"><div id="image">
<img src="image.jpg" alt="logo" style="float:left; width:9%;height:100%; margin-left=10px;"></div>

<center>K.S.R COLLEGE OF ENGINEERING
</center>
<center>KSR Kalvi Nagar, Tiruchengode-637215, Namakkal DT, Tamilnadu.</center>
<a href="welcomeksr.php">
<button type="button" class="buttonn"><a href="welcomeksr.php"> LOGOUT</a></button>
</a>
</div>
<br><br><br><br><br><br>
<!--<nav>
  <ul class="nav">
    <li><a href="home.php">HOME</a></li> 
    <li><a href="studentpersonal.php">PERSONAL DETAILS</a></li>
	<li><a href="studentadmission.php">ADMISSION DETAILS</a></li>
	<li><a href="schoolings.php">QUALIFICATION DETAILS</a></li>
	<li><a href="activity.php">EXTRA CURRICULAR</a></li>
	<li><a href="semester.php">SEMESTER GRADES</a></li>
	<li><a href="evalutionform.php">FEEDBACK FORM</a></li>
</ul>
</nav>-->
</body>
</html>					
						
											<center>
<table cellpadding="15px" cellspacing="15px" style="margin-bottom:60px;margin-top:80px" width="1100px">
				<thead>
					<tr>
						
						<th style="padding-left:60px">
							SEMESTER
						</th>
						<th style="padding-left:50px">
						 SUBJECT NAME
						 </th>
						<th style="padding-left:50px">
							NO OF ATTEMPTS
						</th>
						<th  >
						 ATTEMPTS CLEARED 
						</th>
						<th >
						 REMARKS
						</th>
        				</tr>
				</thead>
				</table>
				</center>
	
<center>
	<TABLE id="dataTable" style="margin-bottom:80px; width:1200px" border="1" cellspacing="3px" cellpadding="10px">
							
					
		<TR>
			<TD><INPUT type="checkbox" class="button" style="button-size:5px; size:10%" name="chk"/></TD>
			
			<td data-name="board">
						    <select name="board" style="size=30px; font-size:13pt; height:30px; padding:5px">
        				        <option value"0"="">Select Option</option>
    					        <option value"1"="">1</option>
        				        <option value"2"="">2</option>
        				        <option value"3"="">3</option>
								<option value"4"="">4</option>
								<option value"5"="">5</option>
								<option value"6"="">6</option>
								<option value"7"="">7</option>
								<option value"8"="">8</option>
						    </select>
						</td>
						
			<TD><INPUT type="text" style="padding:7px; font-size:13pt; height:30px" name="txt"/></TD>
			
			<td data-name="board">
						    <select name="board" style="size=30px; font-size:13pt; height:30px; padding:5px">
        				        <option value"0"="">Select Option</option>
    					        <option value"1"="">1</option>
        				        <option value"2"="">2</option>
        				        <option value"3"="">3</option>
								<option value"4"="">4</option>
								<option value"5"="">5</option>
								<option value"6"="">6</option>
								<option value"7"="">7</option>
								<option value"8"="">8</option>
						    </select>
						</td>
						
			<!--<TD><INPUT type="text" style="padding:4px; font-size:13pt; height:30px" name="txt"/></TD>-->
			<td data-name="board">
						    <select name="board" style="size=30px; font-size:13pt; height:30px; padding:5px">
        				        <option value"0"="">Select Option</option>
								<option>PENDING</option>
    					        <option value"1"="">1</option>
        				        <option value"2"="">2</option>
        				        <option value"3"="">3</option>
								<option value"4"="">4</option>
								<option value"5"="">5</option>
								<option value"6"="">6</option>
								<option value"7"="">7</option>
								<option value"8"="">8</option>
						    </select>
						</td>
			
			<td data-name="board">
						    <select name="board" style="size=30px; font-size:13pt; height:30px; padding:5px">
        				        <option>select</option>
								 <option>PENDING</option> 
								 <option>CLEARED</option>
        			
						    </select>
						</td>
		</TR>
		
	</TABLE>
	</center><br>
<center><INPUT type="button" style="color:red" class="button" value="Add Row" onclick="addRow('dataTable')" />

	<INPUT type="button" style="color:green" class="button" value="Delete Row" onclick="deleteRow('dataTable')" />
<a href="semester.php"><button type="button"  style="color:red" onclick="alert('Are you sure save this page')" class="button">SAVE</button></a></center>
</BODY>
</html>