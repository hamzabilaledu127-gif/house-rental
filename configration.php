<?php
$dbcon=mysqli_connect("localhost","root","","house");

if(mysqli_connect_errno ()){

    echo " <h1 style='color:red'>unable to connect  ".  mysqli_error()."</h1>";



    }
?>