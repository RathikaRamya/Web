<html>
<head><link rel="stylesheet" type="text/css" href="feedcss.css"/>
<title> Evalution form </title></head>
<body>
<?php include("headmenu.php") ?>
<br><br><br>
<label class="set1"><center>TRAINING EVALUTION FORM</center></label>
<form method="POST" action="evalutiondb.php" name="stuform">
<table  cellspacing="20px">
<tr><td class="changefont">TITLE OF TRAINING RESOURCE</td>
<td><input type="text" style="margin-right:200px;" name="title" class="spacetype"/></td>
<td class="changefont">DATE OF TRAINING</td>
<td class="changecolor"><input type="date" name="trainingdate" style="height:30px;width:50%; border-radius:5px;"/></td></tr>
<tr>
<td class="changefont">NAME OF THE TOPIC</td>
<td class="changecolor"><input type="text" name="topic" style="margin-right:200px;" class="spacetype"/></td>
<td class="changefont" >SESSION</td>
<td class="changecolor"><select name="session" style="height:30px;width:50%; border-radius:5px;"/>
<option>choose</option>
<option>ForeNoon</option>
<option>AfterNoon</option>

</td></tr><tr><td class="changefont">TRAINER NAME</td>
<td><input type="text" style="margin-right:200px;" name="trainername" class="spacetype"/></td>
<td class="changefont">VENUE</td>
<td><input type="text" name="venue" style="margin-right:200px; " class="spacetype"/>
</tr>

</table>
<label class="setlabel">RATING OF TRAINING RESOURCE </label><br><BR>
<?php include("ratingtable.php")  ?>
<label class="setlabel"> YOUR OPIONION FOR THIS TRAINING RESOURCE </label><br><BR>
<textarea name="comment"  class="comment"></textarea><br><br><br>
<center>
<tr><td style="font-align:center">
<button name="save" value="save" class="savebutton">SAVE</button></td>
<td><button type="button" onclick="alert('Are you sure save go to next page')" class="submitbutton">SUBMIT</button>
</td></tr>
</center>
</form>
</body>
</html>