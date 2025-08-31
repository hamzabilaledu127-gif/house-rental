
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="house"; // Database name 
$tbl_name="request"; // Table name 
$con = mysqli_connect('localhost', 'root', '','house');
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
//$id=$_GET['email'];
$cfname=$_POST['cemail'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE email='$cfname'";
$result=mysqli_query($con,$sql);

// if successfully deleted
if($result){
   
echo "";


}

else {
echo "ERROR";
}

// close connection 
mysqli_close($con);

?>


