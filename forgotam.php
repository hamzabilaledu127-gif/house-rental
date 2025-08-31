
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<meta charset="utf-8">
<title>የቤት ኪራይ</title>
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

</td>


<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	      <li><a href="homeam.php">ቅድመ ገጽ</a></li>

          <li><a href="loginam.php">ግባ</a></li>  
    
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 
	 
      <p align="center"> <a href="aboutusam.php">ስለ እኛ</a><br></p>
     <p align="center"> <a href="contactusam.php">ያግኙን</a><br></p>
       <p align="center" > <a href="servicesam.php">አገልግሎቶች</a></p>
         <p align="center"> <a href="changepassformam.php">የይለፍ ቃል መቀየሪያ</a><br></p>
          <p align="center"> <a href="forgotam.php">የተረሳ አካዉንት ማስተካከያ</a><br></p>
     </td>

<td  bgcolor="	#ffccff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> የጎንደር ከተማ ቤቶች ኪራይ</b><!-- InstanceEndEditable --></div>
     	</br>

<form id="form1" name="login" method="POST" action="forgot.php" onsubmit="return validateForm()">
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
		
	       <td class='para1_text' width="px"><font color="red">*</font> የተጠቃሚ ስም፡</td><td><input type="text" name="ssn" required x-moz-errormessage="Enter your user name" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br><br><br>
    <td><input type="submit" name="forget" value="አስገባ" />&nbsp;&nbsp;<input type="reset" value=" አጥፋ" /></td>
  </tr>
</table> 
  </form>	

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

<font color="#fef943" face="arial">ኮፒራይት&copy  | መብቱ በህግ የተጠበቀ ነው።  2010 የጎንደር ከተማ ቤቶች ኪራይ. 
			በ ጎንደር  ዩኒቨርሲቲ ኮምቲውተር ሳይንስ 4ኛ ዓመት  <a font='yellow' href=g.html> <p>ቡድን 7  ተማሪዎች</a>የተሰራ</font>
</td></tr></table>
</td></tr></table>
</center>
</body>
</html>
