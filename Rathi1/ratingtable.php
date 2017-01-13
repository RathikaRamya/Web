<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
td{
	background-color:;
}

tr:nth-child(even)
{
	background-color: #f2f2f2;
	}
</style>
</head>
<body>
<form method="POST" action="evalutiondb.php" name="stuform">
<table cellspacing="10px">
  <tr>
    
    <th>Course Content</th>
    <th>Strongly Agree</th>
    <th>Agree</th>
	<th>Netural</th>
	<th>Disagree</th>
  </tr>
  <tr>
    <td><label class="rateset">The objective of the training was good</label></td>
    <td><input  type="radio" name="check"></td>
	<td><input  type="radio" name="check"></td>
	<td><input  type="radio" name="check"></td>
	<td><input  type="radio" name="check"></td>
    
  </tr>
  <tr>
    <td><label class="rateset">Do you like this training session?</label></td>
    <td><input  type="radio" name="check1"></td>
	<td><input  type="radio" name="check1"></td>
	<td><input  type="radio" name="check1"></td>
	<td><input  type="radio" name="check1"></td>
  </tr>
  <tr>
    <td><label class="rateset">Participation and interaction were encouraged</label></td>
    <td><input  type="radio" name="check2"></td>
	<td><input  type="radio" name="check2"></td>
	<td><input  type="radio" name="check2"></td>
	<td><input  type="radio" name="check2"></td>
  </tr>
  <tr>
    <td><label class="rateset">The topics covered were relevant to you</label></td>
    <td><input  type="radio" name="check3"></td>
	<td><input  type="radio" name="check3"></td>
	<td><input  type="radio" name="check3"></td>
	<td><input  type="radio" name="check3"></td>
  </tr>
  <tr>
    <td><label class="rateset">The content was easy to follow</label></td>
    <td><input  type="radio" name="check4"></td>
	<td><input  type="radio" name="check4"></td>
	<td><input  type="radio" name="check4"></td>
	<td><input  type="radio" name="check4"></td>
  </tr>
  <tr>
    <td><label class="rateset">The distributed materials were helpful</label></td>
    <td><input  type="radio" name="check5"></td>
	<td><input  type="radio" name="check5"></td>
	<td><input  type="radio" name="check5"></td>
	<td><input  type="radio" name="check5"></td>
  </tr>
  <tr>
    <td><label class="rateset">The trainer's experience will be useful in your work</label></td>
    <td><input  type="radio" name="check6"></td>
	<td><input  type="radio" name="check6"></td>
	<td><input  type="radio" name="check6"></td>
	<td><input  type="radio" name="check6"></td>
  </tr>
  <tr>
    <td><label class="rateset">The trainer was knowledge about the topics</label></td>
    <td><input  type="radio" name="check7"></td>
	<td><input  type="radio" name="check7"></td>
	<td><input  type="radio" name="check7"></td>
	<td><input  type="radio" name="check7"></td>
  </tr>
  <tr>
    <td><label class="rateset">The trainer was well prepared</label></td>
    <td><input  type="radio" name="check8"></td>
	<td><input  type="radio" name="check8"></td>
	<td><input  type="radio" name="check8"></td>
	<td><input  type="radio" name="check8"></td>
  </tr>
  <tr>
    <td><label class="rateset">The time alloted for the training was sufficient</label></td>
    <td><input  type="radio" name="check9"></td>
	<td><input  type="radio" name="check9"></td>
	<td><input  type="radio" name="check9"></td>
	<td><input  type="radio" name="check9"></td>
  </tr>
  <tr>
    <td><label class="rateset">The class room and facilities were comfortable</label></td>
    <td><input  type="radio" name="check10"></td>
	<td><input  type="radio" name="check10"></td>
	<td><input  type="radio" name="check10"></td>
	<td><input  type="radio" name="check10"></td>
  </tr>
</table>
</form>
</body>
</html>

