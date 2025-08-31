
   
<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>
<html>
    <head><title>landlord  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/lsearch.js'></script>



    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>

</head>
<body>

<div id="container" >
    

  <div id="header">
  
      
      
                   <font color ="white" size="5px" class="" style=""><h3 align="center"> GONDAR CITY HOUSE RENTAL SYSTEM</h3></font></td></tr></table>
      
      
      
      
     
      
  
    
      <div id="newline">
      </div>
	</div><!--header-->
   
 <div id="news">
     <div id="news_image" align="center">
        
  </div>
<div id="footer_icon">

  
  </div>
 </div><!--news-->


 
 <div id="navbar">
      <ul id="navmenu">
                
                      <li><a href="landlord.php">Home</a></li>
		
                   <li><a href="posthouse.php">Upload House</a></li>
                   <li><a href="updatehouse.php">Update House</a></li>
                          <li><a href="#"> View</a>
                          <ul class="sub">
                   <li><a href="viewrequest.php"> View Request</a></li>
                   <li><a href="viewfeedback.php"> View Feedback</a></li>
                   
                          </ul>
                                     </li>
                
                    
		
                   
                     
				   
           </ul>			   
           
	 
  </div> 	   

  <div id="main_body">

   
 
<?php
include('configration.php');
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

        <form action="Forgot.php" method="post">

            Enter id: <input type="text" name="id" required><br><br>

            user Name:<input type="text" name="username" required><br><br>

            password:<input type="text" name="password" required><br><br>

            confirm pw:<input type="text" name="confirm" required><br><br>

            <input type="submit" name="update" value="save change">
        <p><a href="log.php"><img src="j.jpg" align="left" /></p></a>

        </form>

    </body></center


</html>


 
  
 </div>


    </body>
</html>


    