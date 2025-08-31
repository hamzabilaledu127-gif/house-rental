<?php
if(isset($_POST['create']))
{
include('configration.php');
$type = $_POST['type'];
$uname = $_POST['uname'];

$password=$_POST['password']);
//connection  $username = cleann($_POST['username']);
  //$P=md5($password);
  //$email = cleann($_POST['email']);
  $v1=rand(111,999);
$v2=rand(111,999);
$pass=$v1.$v2;

$password=base64_encode($pass);

$sql="INSERT INTO account(usertype,username,password)VALUES('$type','$uname','$password')";
if(mysqli_query($con,$sql))
{
?>
          <script type="text/javascript">
	alert("Created Succesfully");
	</script>
          <?php
	}
else
{
echo "Error on table  ".mysql_error();
}
//or die('Error,query failed');
mysqli_close($con);
}
?>