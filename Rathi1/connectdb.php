<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.
$connection=mysqli_connect("$host","$username","$password")or die("cannot connect"); 
mysqli_select_db($connection,"ksr")or die("cannot select DB");
?>