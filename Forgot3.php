


<html>
    <head><title>home  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>
       
 <script type='text/javascript'>
function formValidatore(){
	// Make quick references to our fields
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	// Check each input in the order that it appears in the form!
	if(notEmpty(username, "You Don't Fill User Name")){
	if(notEmpty(password, "You Don't Fill Password")){

	      return true;
		     }
		  return false;
	  }}
	  function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;



          
</script>
       
    


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

              
            </select></th><input type="submit" name="search" value="search" ><br> </td> </tr></table> </form>    </div>
  
      
      
                  <font color ="pink" size="5px" class="" style=""><h3 align="center">GONDAR CITY HOUSE RENTAL SYSTEM</h3></font>
      
      
      
     
      
  
    
     <div id="banner_image">
       <div id="slider-wrapper">
	   
   <script language="JavaScript">              
var i = 0; var path = new Array(); 

// LIST OF IMAGES 
path[0] = "images/a2.jpg"; 
path[1] = "images/a3.jpg"; 
path[2] = "images/a7.jpg"; 
path[3] = "images/a4.jpg"; 
path[3] = "images/a5.jpg"; 
path[4] = "images/a6.jpg"; 
path[5] = "images/a7.jpg"; 
path[6] = "images/a8.jpg"; 

function swapImage() 
{ 
document.slide.src = path[i]; 
if(i < path.length - 1) i++; 
else i = 0; 
setTimeout("swapImage()",2300); 
} 
window.onload=swapImage; 
   </script> 
          <img class="img_slider" name="slide" src="images/a3.jpg"/>
		</div>
	  </div>
      <div id="newline">
      </div>
	</div><!--header-->
   
 <div id="news">
     <div id="news_image" align="center">
        
  </div>
<div id="footer_icon">
  
   <table cellspacing="20" >
  <tr>
 
  <td> <a href="http://www.facebook.com"><img src="images/facebook.png" width="25" height="25"></td>
  <td><a href="http://www.gmail.com"><img src="images/gmail.jpg" width="25" height="25"></td>
  
   <td> <a href="http://www.youtube.com"><img src="images/youtube.ico" width="25" height="25"></td>
   <br>
  </tr>
  </table>
  
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
  

      <?php
	
      
?>




<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<form id="form1" name="login" method="POST" action="forgot3.php" onsubmit="return validateForm()">
<?php
 if(isset($_POST['forget']))
  {
     $con = mysqli_connect('localhost', 'root', '','house');
  // $firstname=$_POST['fname'];
   //$usertype=$_POST['usertype'];
    $ssn=$_POST['ssn'];
   $sql="SELECT * FROM account where username='$ssn' ;"; 
   $result_set=mysqli_query($con,$sql);
   if(!$result_set)
   {
   die("Query faill".mysql_error($con));
   }
if(mysqli_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysqli_fetch_array($result_set))
{
$ssn=$row[0];
$password=$row[3];
$uname=$row[0];
echo"<p class='success'>"."Hi"."&nbsp; &nbsp;".$uname."&nbsp; &nbsp;"."your password is:".$password."</p>";
echo'<meta content="10;Login.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="10;forgot3.php" http-equiv="refresh" />';
}
}
//mysql_close($con);
?>
  <table width="280px" align="center" style="border:1px solid #000;border-radius:15px">  
          <br><br>
		
	       <td class='para1_text' width="px"><font color="red">*</font> user name:</td><td><input type="text" name="ssn" required x-moz-errormessage="Enter your user name" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br><br><br>
    <td><input type="submit" name="forget" value="Submit" />&nbsp;&nbsp;<input type="reset" value="Clear" /></td>
  </tr>
</table> 
  </form>	


  </div>
 
  <div id="login">
    <table align="right"><tr><td><a href="Login.php"><img src ="images/log.jpg" width="90px"  hight="80" alt="Login"/></a></td></tr>

          <tr><td><a href="caccount.php" target="_parent"><img src="images/create.png" width="100px"  hight="90"/></a></td></tr></table>
  </div>
 
 <div id="footer">
     
     
		

 <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>


 </div>
  

 
 

  
 </div>


    </body>
</html>
















































