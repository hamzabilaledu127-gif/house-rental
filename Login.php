
<?php
session_start();
define("db_server","localhost");
define("db_user","root");
define("db_name","house");
define("db_password","");
$con=mysql_connect(db_server,db_user,db_password);
if(!$con)
{
die("Error in connection".mysql_error());
}
$db_select=mysql_select_db(db_name,$con);
if(!$db_select)
{
die("Error in db select".mysql_error());
}
?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>House Rental </title>
<link rel="shortcut icon" href="favicon.ico" type="imagese/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>



<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new images();
demo1.src="imag/1.jpg"
demo2 = new images();
demo2.src="imag/2.jpg"
demo3 = new images();
demo3.src="imag/3.jpg"


demo4 = new images();
demo4.src="imag/4.jpg"
demo5 = new images();
demo5.src="imag/5.jpg" 
demo6= new images();
demo6. src="imag/6.jpg"
demo7=new images();
demo7.src="imag/7.jpg"
}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 3000);
}

function imgturn(numb) {   // Reusable imagese turner
if (document.images) {

if (numb == "7") {         // This will loop the imagese
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>

</head>
<body onLoad="timeimgs('1');">


</style>
<center>
<table  width="950" height="100" border=0px id="table1"bgcolor=""#000000"">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-4px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/h2.jpg" width="215" height="120" alt= HOUSE RENTAL" title="Gondar City House Rental System" />
&nbsp;
<font color="#33ddaa"size="+2"><p align="left"valign="bottom"><img src="IMG/h4.png"  height="50%" width="70%"/></p></font>
0</td>


<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
  <li><a href="home.php">Home</a></li>
    
    <li><a href="housedatabase.php">viewhouse</a></li>
  <li><a href="login.php">Login</a></li>
      <li><a href="viewhousedetailhome.php">HouseData</a></li>
        <li><a href="accountrequestcus.php">ActivationRequest</a></li>
        <li><a href="viewactivationresponse.php">Activation</a></li>
    
	  </div>


</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 
	   <p align="center"> <a href="aboutus.php">About Us</a><br></p>
	   <p align="center"> <a href="contactus.php">Contact Address</a><br></p>
       <p align="center" > <a href="services.php">Services</a></p>
        <p align="center" > <a href="for.php">ForgotPassword</a></p>
         <p align="center" > <a href="changepassform.php">changePassword</a></p>
     </td>

<td  bgcolor="	#FFCCFF "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> Gondar city house rental System</b><!-- InstanceEndEditable --></div>
     	</br>

     <div id="mainContent1">
  <br>
    <div id="middletxtheadermain" align="left"><br/><center><img  src="img/login.gif" width="140px" height="110px" valign="top"  /></center>
   
    
      
      </div>
      <div id="middletxt">
        <form action="login.php" method="post" name="frm_login" id="frm_login" >
          <table  border='1' style='width:325px;border:1px solid black;border-radius:10px;' align='center'>
      
         

              <td height="22" width="325px"><table width="325px"  border=0>
                  
                  
          
         <tr>
                 <td width="20" height="37" ><div align="left" margin-left="2px"><strong><font color="#FF0000">*</font>usertype : </strong></div></td>
            <td  align="left">
          <select id='usertype' name="usertype" required style="width:175px;" "height:20px;" margin-left="2px"  >
                      
            <option></option>
            <option>admin</option>
                      <option>Employee</option>
                      <option>customer</option>
                      <option>landlord</option>
                      
                     </select>
                    </td>
            </tr>
              <tr>
                 <td width="80" height="37" ><div align="left"><strong><font color="#FF0000">*</font>User Name : </strong></div></td>
            
                 <td width="80"><input type="tex" name="username" id="username" maxlength="22" style="border:1px #480000 solid;width:176px;height:25px;background:#FFFFFF;border-radius:5px;"placeholder="Enter User name" required />
                                   
                                   <!--<div class="example">(Only Lower case Allowed.)</div>--></td>
              </tr>
              <tr>
                 <td width="80" height="37"><div align="left"><strong><font color="#FF0000">*</font>Password : </strong></div></td>
                 <td width="80"><input type="password" name="password" id="password" maxlength="22" style="border:1px #480000 solid;width:176px;height:25px;background:#FFFFFF;border-radius:5px;" placeholder="Enter password" required /></td>
              </tr>
              <tr> <center>
                 <td colspan="3" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" id="submitMain" name="submitMain" value="Login" title="Click here to login" Onclick="return check(this.form);" />
            
         <input type="reset"  value=" CLEAR " onClick='focusReset()'
        title="Click here to clear the text box"/>

            </tr></center>
                 </td>
              </tr>
              </table></td>
            </tr>
      

          </table>
        </form>
    

 
 <?php
 if(isset($_POST['submitMain']))
 {
 
   $account_type=$_POST['usertype'];
   $userid =$_POST['username'];
   $_SESSION['username']=$userid;
   $password=$_POST['password'];
   $query = "SELECT * FROM account WHERE usertype = '{$account_type}' AND username = '{$userid}' AND password = '{$password}' ;";
   $result_set=mysql_query($query);
if(!$result_set){
die("query is failed".mysql_error());
}
$row=mysql_fetch_array($result_set);
$stat=$row['status'];
if(mysql_num_rows($result_set)>0)
{
if($stat==1)
{
if($account_type=="admin")
{
$_SESSION['username']=$row['username'];
echo "<script>window.location='admin.php';</script>";
}
else if($account_type=="Employee")
{
$_SESSION['username']=$row['username'];
echo "<script>window.location='employee.php';</script>";
}
else if($account_type=="landlord")
{
$_SESSION['username']=$row['username'];
echo "<script>window.location='landlord.php';</script>";
}
else if($account_type=="customer")
{
$_SESSION['username']=$row['username'];
echo "<script>window.location='customer.php';</script>";
}
//else 
//{
//$_SESSION['validuser']=$user;
//echo "<script>window.location='#.php';</script>";
//}
}
else
{
    print "<img src='IMG/error.png' align='center' width='35px' height='25px'><I><font face='arial' color='black' size='3'> Your Account is Deactivated Please Contact the Administrator !!</font></I>";

}
}
else
   {
     echo '<div align="center"><strong><font color="#FF0000"> Account Type, User Name & Password not match !!</font></Strong></div>';
   }

   
}
mysql_close($con);
?>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      </div>
    </div>
    <!-- end #mainContent -->
  </div>
  
</div>
</td><!--center end-->
<td class="right_container" valign="top" width="100px" height="100px"">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br>

<fieldset style=" border-color:#45565C; height:160px;">


<img src="IMG/dell.jpg" height="150px" width="67px" name="demo" align="center">
</fieldset>


<br/><br/><br/><br/><br/><br/><br/><br><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->

<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2018 @ Gondar City House Rental System.</font>
</td></tr></table>
</td></tr></table>
</center>
</body>
</html>