<?php


$password=($_POST["password"]);
$newpassword=($_POST["passwrd"]);
$un=$_POST['un'];
include('config.php');
$con = mysqli_connect('localhost', 'root', '','house');
$result = mysqli_query($con,"SELECT * FROM account  where username='$un' AND password='$password'");
$res=mysqli_num_rows($result);
if($res) //check that is there any row which have username and password that we enter.
   {
  $f=mysqli_query($con,"UPDATE account SET password = '$newpassword' 
WHERE password = '$password'");
    if($f)
	{
	 //include("Login.php");
//echo '<center><strong>Password is changed succesfully</strong></center>';
echo "<script type='text/javascript'>alert('password is changed succesfully')</script>";
     }
}	 
else{
//include("Login..php");
echo "<script type='text/javascript'>alert('There is error either old password or username')</script>";
}

?>