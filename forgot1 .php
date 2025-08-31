
<?php session_start(); ?>
<?php

// php code to Update data from mysql database Table

require("configration.php");

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "house";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $name = $_POST['username'];
   $pw = $_POST['password'];
   $c = $_POST['confirm'];
   
  
   if($pw==$c){
           
   // mysql query to Update data
   $query = "UPDATE `account` SET `username`='".$name."',`password`=$c WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Account change';
   }
   }else{
       echo 'Account not change';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> forgetpassword </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

  <center>  <body bgcolor="brown">
  <h1>Change Your Forgotten Password<h1>
  <br><br><br>

        <form action="forgot1.php" method="post">

            Enter id: <input type="text" name="id" required><br><br>

            user Name:<input type="text" name="username" required><br><br>

            password:<input type="text" name="password" required><br><br>

            confirm pw:<input type="text" name="confirm" required><br><br>

            <input type="submit" name="update" value="save change">
	      <p><a href="log.php"><img src="j.jpg" align="left" /></p></a>

        </form>

    </body></center


</html>
