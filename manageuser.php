


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
  
      
      
                  <font color ="white" size="5px" class="" style=""><h3 align="center">GONDAR CITY HOUSE RENTAL SYSTEM</h3></font></td></tr></table>
      
      
      
      
    
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
                 <li class=""><a href="ne.php">Post News</a></li>
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
?>
<?php
include("configration.php");

?>

<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 
  
     </td>

<td  bgcolor="  #ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


  
    <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b><br> </b><!-- InstanceEndEditable --></div>
      </br><div id="contentarea1">

  
<table border='1' style='width:500px;border:1px solid black;border-radius:10px;' align='left'>
<tr>
<th>Account Type</th>
<th>User ID</th>
<th>View<br>Detail</th>
<th>Edit</th>
<th>Activate <br>(Deactivate)</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM account");
while(//$row = mysql_fetch_array
  ($result))
  {
$ctrl = $row['username'];
$account=$row['type'];
$emp_id=$row['password'];
$status=$row['status'];
?>
<tr>
<td><?php echo $account;?></td>
<td><?php echo $ctrl;?></td>    
<td align = 'center' width = '1'><a href = 'viewuserdetail.php?key=<?php echo $ctrl;?>'><img width='25px' height='25px' src = 'image/aaa.png' title='View Detail'></img></a></td>
    <td><a href = 'edituser.php?key=<?php echo $ctrl;?>'><img src = 'image/edit.jpg' width='25px' height='25px' title='Edit' ></img></a></td>
    <td><?php
            if(($status)=='0')
            {
            ?>
                             <a href="status.php?status=<?php echo $row['username'];?>" onclick="return confirm('Really you activate (<?php echo $username?>)');">
                            <img src="image/deactivate.png" id="view" width="16" height="16" alt="" />Deactivated </a>
                        <?php
            }
            if(($status)=='1')
            {
            ?>
                             <a href="status.php?status=<?php echo $row['username'];?>" onclick="return confirm('Really you De-activate (<?php echo $username?>)');"> 
                             <img src="image/activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
            }
                        ?>
            </td>

    
    
    
    </tr>
<?php
  }
 
print( "</table>");
//mysql_close($con);
?>

</div>
    


</td><!--center end-->

   
   
   
  








<td class="right_container" valign="top" height="100" width="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt="DBU Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table>




 
    <?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","house");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("house", $conn);

$sql="INSERT INTO news (id,tittle ,date, description ,status)
VALUES
('$_POST[id]','$_POST[tittle]','$_POST[date]','$_POST[comment]','1')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo '<img src="images/492.png" > &nbsp;! News has been Post Successfully!';

      echo' <meta content="2;news.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>

   <?php
  //include("footerIndex.php");
  ?>
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

