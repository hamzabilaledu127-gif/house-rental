
<?php
session_start();?>
<?php

	if (!isset($_FILES['images']['tmp_name'])) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['images']['tmp_name']));
	$image_name= addslashes($_FILES['images']['name']);
	$image_size= getimagesize($_FILES['images']['tmp_name']);
	if ($_FILES["file"]["error"]=0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
			else{
				if ($_FILES["file"]["error"]>0) //conditions for the file
				{
				echo"Format is not allowed or file size is too big!";
				}
		else{
                 
                    include('configration.php');
                       $con = mysqli_connect('localhost', 'root', '','house');
			move_uploaded_file($_FILES["images"]["tmp_name"],"upload/" . $_FILES["images"]["name"]);			
			$location="upload/" . $_FILES["images"]["name"];
			$fname=$_POST['fname'];
                        $lname=$_POST['lname'];
                        //$email=$_POST['email'];
                        $phone=$_POST['contact'];
                        $keb=$_POST['kebele'];
                        $room=$_POST['room'];
                        $houseno=$_POST['housenumber'];
                   $em = $_SESSION['log']['email'];
                        $price=$_POST['price'];
                        $flor=$_POST['floor'];
                          // $lid=$_POST['lid'];
                         
			$sql="INSERT INTO dormitory(image,fname, lname,email,phone,kebele,room,housenumber,price,floor)
VALUES
('$location','$fname','$lname','$em','$phone','$keb','$room','$houseno','$price','$flor')";

if(mysql_query($sql))
  {
 
    //include_once 'landlord.php';
  //  session_destroy();

echo "<script type='text/javascript'>alert(' succesfully upload')</script>";
  }
  else{
      echo"your house number is already register";
 {
	
     }
  }		}
	}
}


?>