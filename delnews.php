
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="house"; // Database name 
$tbl_name="news"; // Table name 
$con = mysqli_connect('localhost', 'root', '','house');
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$hn=$_GET['id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE id='$hn'";
$result=mysqli_query($con,$sql);

// if successfully deleted
if($result){
    include('viewnewscus.php');
echo "<script type='text/javascript'>alert(' succesfully deleted')</script>";

}

else {
echo "ERROR";
}

// close connection 
//mysql_close();

?>


