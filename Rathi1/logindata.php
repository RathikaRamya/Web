 <?php

/*session_start();
$usernamee=$_POST["usernamee"];
$passwordd=$_POST["pass"];
$dob=$_POST["dob"];

 //connection
 $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 


$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");
//$query=mysqli_query("SELECT * FROM createpage WHERE usernamee='$usernamee' and password='$passwordd'  and dob='$dob'" );


// To protect MySQL injection (more detail about MySQL injection)
$usernamee = stripslashes($usernamee);
$passwordd = stripslashes($passwordd);
//$usernamee = mysql_real_escape_string($usernamee);
//$passwordd = mysql_real_escape_string($passwordd);

$sql="SELECT * FROM createpage WHERE usernamee='$usernamee' and pass='$passwordd'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}



/*if(!empty($username)  &&  !empty($password) &&  !empty($dob) )
{
$con=mysqli_connect("localhost" ,"root", "") or die("could not connect");
mysqli_select_db($con, "ksr") or die("could not find db");
$query=mysqli_query("SELECT * FROM createpage WHERE usernamee='$usernamee' and password='$passwordd'  and dob='$dob'" );
$numrows=mysqli_num_rows($query);
if($numrows==1)
{
	$_SESSION["username"]=$usernamee;
	header("location: evalutionform.php");

}
else
{
	$_SESSION['errMsg']="invalid username or password";
	header('Location:loginpage.php');
}
}
else
	
	{
	
	$_SESSION['coderr']="please enter username,  password and DOB";
		header("Location:loginpage.php");
	}*/
	
session_start();
if(isset($_POST['login']))
{
	$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
// Connect to server and select databse.

$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
mysqli_select_db($con,"ksr")or die("cannot select DB");

 $usernamee=$_POST['usernamee'];
 $passwordd=$_POST['pass'];
 //$dob=$_POST["dob"];
 if($usernamee!=''&&$passwordd!='')
 {
   $query = mysqli_query($con,"select * from createpage where name='".$usernamee."' and password='".$passwordd."'");
   $res = mysqli_fetch_row($con,$query);
   if($res)
   {
    $_SESSION['usernamee']=$usernamee;
   // header('location:welcome.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>


