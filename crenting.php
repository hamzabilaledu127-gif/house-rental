

<?php
//session_start();
if(!isset($_SESSION['log']['email']))
{
?>
 <script>
       window.location='Login.php';
  alert('YOU ARE NOT ALLOWED TO ACCESS!!Please Login to access the page');

 </script>
<?php
}
 include_once("configration.php");

?>
<html>
    <head><title>customer  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>


       
    


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
                                  <li><a href="customer.php">Home</a></li>
    <li><a href="crenting.php">Renting House</a></li>
                  <li><a href="viewresponse.php">View Response</a></li>
                
                   <li><a href="feedback.php"> Send Feedback</a></li>
                   
                     <li><a href="location.php"> View Location</a></li>
                   
            <li><a href="viewnewscus.php"> View News</a></li>

                     <li><a href="viewreportcus.php"> View Report</a></li>
                   
                     
				   
           </ul>			   
           
	 
  </div> 	   

  <div id="main_body">
<div id="s">
  
  
<?php
$con = mysqli_connect('localhost','root', '','house');//Records per page
$per_page=2;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

//Selecting the data from table but with limit
$query = "SELECT * FROM register order by fname LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
while ($row = mysqli_fetch_assoc($result)) {

    if($row['status']==''){  
echo"<div id='s'>";


echo "<table align='center'><tr><td>  ";

  $s=$row['image'];
echo"<tr><td><table><tr><td>";
  echo '<a href="" ><img  alt="Send Request" src="'.$s.'" style="height:200px; width:250px"  ></a></td><td><font size=3px>First Name: ';
             
          
	echo $row['fname'];
           
	echo "<br/> Last Name:    "; 
  
        echo $row['lname'];
        echo "<br/> email:  ";
        echo $row['email'];
        echo "<br/>Phone Number:   ";
		echo $row['phone'];
		echo "<br/> kebele:  ";
		echo $row['kebele'];
		//echo "<br/> Number of room:   ";
		//echo $row['room'];
		echo "<br/>house number:    ";
		echo $row['housenumber'];
		echo "<br/>Price:   ";
		echo $row['price'];
		echo "<br/>Floor:    ";

	        echo $row['floor'];
             
              
		echo "</font>   </td></tr></table>"; 
               echo" <td  size='0px'><a href='sendrequest.php? housenumber= $row[housenumber]'><img src='images/se.png' style=height:30px; width:10px /></a></td></table></div> </td></tr>";
            

}
else{
 //  echo "<h1 style='color:red'> there is no recored data for rent</h1>";

}
}
$query = "select * from register";
$result = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<h3><center><a href='crenting.php?page=1'>".'Privious Page'."</a> ";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='crenting.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<td bgcolor='red'><a href='crenting.php?page=$total_pages'>".'Next Page'."</a></td></center></h3> ";


//Now select all from table


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



