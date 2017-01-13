<?php session_start(); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="logindec.css"/>

<style>
#errMsg
{
	font-size:18px;
	color:#cc0000;
}
.text-line {
    background-color: transparent;
    color: black;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px  solid black;
    padding: 3px 10px;
}
</style>
<title>login page</title>
</head>
<body style=" background: white;">
<?php include("header.php"); ?>
<br><br><br><br><br>
<center>
<form name="fname"  method="POST" action="staffcreatedb.php"> 
           
<table  cellspacing="10">
<tr><td  colspan="2" style="text-align:center">
<label class="fontlogin ">CREATE ACCOUNT</label></td></tr>
<tr><td>
<label class="nameclor">STAFF ID</label></td>
<td> <input type="text" name="staffid"  class="fontinput"></td></tr>
<tr><td>
<label class="nameclor">FULLNAME</label></td>
<td> <input type="text" name="fname"  class="fontinput"></td></tr>
<tr><td>
<label> D.O.B</label></td>
<td><input type="date" name="dob" class="fontinput" style="width:63%;"></td></tr><tr><td>
<label class="nameclor">USERNAME</label></td>
<td> <input type="text" name="usernamee"  class="fontinput"></td></tr>
<tr><td>
<label class="nameclor" >PASSWORD<label></td><td> <input type="password" name="pass" class="fontinput"></td></tr>
<tr><td colspan="2"  style="text-align:center"> <button name="create" value="create" class="button">CREATE</button></td></tr>
</table>


		
</form>
</center>

</body>
</html>