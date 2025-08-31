



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
                     <li class=""><a href="viewuser.php">Managuser</a></li>
                      <li class=""><a href="deletehouse.php">Deletehouse</a></li>
                
                 <li class=""><a href="ne.php">PostNews</a></li>
                
                    <li class=""><a href="report.php">PostReport</a></li>
                              <li><a href="v.php">ViewRequest</a></li>
                   
                   <li><a href="deletefeedbackgov.php"> View Feedback</a></li>
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
<script type="text/javascript">
  <!--
  function AllowAlphabet(){
      
          if (!myform.tittle.value.match(/^[a-zA-Z]+$/)  && myform.tittle.value !="")
               {
                    myform.tittle.value="";
                    myform.tittle.focus(); 
                    alert("Please Enter only Alphabet value for Tittle");
               }
    }
  </script> 
      <p>&nbsp;</p>
    <div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>ADMINISTRATOR PAGE TO POST NEWS</b></font></h4>
          <form method="post" action="ne.php" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
         <tr><td><font size="2px" face = 'oblique'>News_id: </font></td><td> 
         <input name="id" size="32" id="id" type="number" placeholder="id" required onkeyup="AllowNumeric()"></td>
     </tr>
       <tr>
     <td><font size="2px" face = 'oblique'>News_Tittle: </font></td><td>
  <input name="tittle" size="32" id="name" type="text" placeholder="Tittle" required onkeyup="AllowAlphabet()"></td>
     </tr> <tr>
     <td><font size="2px" face = 'oblique'>News_Date:</font></td><td>
  <input name="date" size="32" id="name" type="text"   value="<?php echo date('y-m-d');?>" readonly="true"></td>
     </tr>
     <tr>
     <td ><b><font size="2px" face = 'oblique'>Write Descrption here</font></b></td>
    
     <td><textarea name="comment" id="comment" placeholder="Write Descrption here" cols="34" rows="7" width="200px"required></textarea></center></td>
     </tr>
<tr>
<td>&nbsp;</td>
              <td></td>
<tr>
<td><center><input value="post" name="sent" type="Submit" Onclick="return check(this.form);"/>
<input name="clear" type="reset" Value="Clear"></center></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

</tr>
        </tr> </table></form>  
        
      
         
    </div>
         
     
     
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






















