    

<?php session_start(); ?>
<?php

require("configration.php");
if (isset($_POST['login'])) {
$con = mysqli_connect('localhost', 'root', '','house');
    $un = $_POST['uname'];
    $password = $_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM account
        WHERE username = '$un' AND password = '$password'");

    if (!$result) {

         include('Login.php');
    echo "<script type='text/javascript'>alert('Invalid email and password! ')</script>";
    }
    else{
       
        $query = mysqli_query($con,"SELECT * FROM account WHERE username = '$un'") or die(mysql_error());
        $display = mysqli_fetch_array($query);
 //session_register('is');
        $_SESSION['login'] = TRUE;
     $_SESSION['log']['email'] = $display['email'];
        $session = "1";
        $type = $display['usertype'];
        if ($type == "customer") {
            header("location:customer.php");
        } elseif ($type == "landlord") {
            header("location:landlord.php");
        } elseif ($type == "admin") {
        header("location:admin.php");
    } elseif ($type == "Employee") {
        header("location:Employee.php");}
        else{ include('Login.php');
            echo "<script type='text/javascript'>alert('Invalid email and password! ')</script>";}
        
    }
}
?>