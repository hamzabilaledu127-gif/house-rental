<?php
session_start();
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
    <head><title>home  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>

       
    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>

</head>
<body>

<div id="container" >
    

  <div id="header"><div align="right" id="search"> <form name="fs" action="search.php" method="post" onSubmit="return formValidator();"><table align="right"> <tr><td ></td>
                                <td bgcolor="#6FFFFF">
     <select name="kebele">                                                  
              <option disabled="disabled">kebele</option>
              <option>1</option>
              <option>2</option>

              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>

              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
               <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
               <option>19</option>
              <option>20</option>

              
            </select></th><input type="submit" name="search" value="search" ><br> </td> </tr></table> </form>    </div>
  
      
      
                  <font color ="white" size="5px" class="" style=""><h3 align="center"> GONDAR CITY HOUSE RENTAL SYSTEM</h3></font>
      
     
      
  
    
    
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
                
              
                      <li><a href="homepage.php">Home</a></li>
                    <li id="current"><a href="housedatabase.php">Renting House</a></li>
                    <li><a href="Login.php" target="_parent">Upload House</a></li>
                    <li><a href="aboutus.php" target="_parent">About Us</a></li>
                        <li><a href="reserved.php" target="_parent">Reserved House</a></li>
                   
                     
				   
           </ul>
				   
           
	 
  </div> 	   

  <div id="main_body">
  <font color="black" face="lucida" size="4" >  
   

<br>
<br>

      <a target="_blank"></a>
<a href=".html"></a> <strong>Thank you for visiting our system!</strong>
   
  </div>
 
  <div id="login">
 <table align="right"><tr><td><a href="Login.php"><img src ="images/log.jpg" width="90px"  hight="80" alt="Login"/></a></td></tr>

     <tr><td><a href="caccount.php" target="_parent"><img src="images/create.png" width="100px"  hight="90"/></a></td></tr></table>
  </div>
 
 <div id="footer">
     
     
		

 
     <<center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>
>
 </div>
  
	 
 
 

  
 </div>


    </body>
</html>






