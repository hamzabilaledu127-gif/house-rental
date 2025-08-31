



<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>


<html>
    <head><title>Admin page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>


       
    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>

</head>
<body>

<div id="container" >
    

  <div id="header">
 <!-- <div align="right" id="search"> <form name="fs" action="search.php" method="post" onSubmit="return formValidator();"><table align="right"> <tr><td ></td>
                                <td bgcolor="#6FFFFF"><td bgcolor="aqua"><input type="text" id="property" name="housenumber" placeholder="search" ><input type="submit" name="search" value="search" ><br> </td> </tr></table> </form>    </div>-->
  
      
      
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
                
           <li><a href="admin.php">Home</a></li>
                 <li class=""><a href="deletehouse.php">Manage House</a></li>
                 <li class=""><a href="news.php">Post News</a></li>
                   <li class=""><a href="sendresponse.php">Send Response</a></li>
                    <li class=""><a href="report.php">Generate Report</a></li>
                    <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                              <li><a href="viewrespons.php"> View Request</a></li>
                   
                   <li><a href="deletefeedback.php"> View Feedback</a></li>
                          </ul>
                                     </li>    
				   
           </ul>
	 
  </div> 	   

  <div id="main_body">
 <div id="s">
  
    <?php
$con = mysqli_connect('localhost','root', '','house');//Records per page?>
<?php
//include("ne.php");
?>  
<div style="float:right; margin-right:24px;" ;>


       <div id="content" class="float_l"> <br/>
      <br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
      <h5><font color='#ffff00' style="text-transform:uppercase;font-weight:" face='georgia'>What do you want to do for your account?</font></h5>

        &nbsp;<a href="changepass.php"><b>Change Password</b></a><br/>&nbsp;&nbsp;&nbsp;
        
        <a href="changeun.php"><b>Change User Name</b></a><br/><br/>
        </div></div>
      <?php
  include("configration.php");
  ?>


?>
 
  </div>
  
   
  </div>
 
  <div id="login">
                 <div id="" align="right" ><a href="logout.php"><img src="images/logout.png" width="90" hight="80"/></a>
           <a href="changepassform.php"><img src="images/change.png." width="115" hight="200"/></a></div>

  </div>
 
 <div id="footer">
     
     
    

  <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>


 </div>
  

 
 

  
 </div>


    </body>
</html>











