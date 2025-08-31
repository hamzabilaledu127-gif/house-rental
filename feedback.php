
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
              
 <script type='text/javascript'>
function formValidation(){
  // Make quick references to our fields
  var fname = document.getElementById('fname');
  var email = document.getElementById('email');
        var subject = document.getElementById('sub');
         var text = document.getElementById('text');
        
  // Check each input in the order that it appears in the form!
         if(notEmpty(fname, "Please enter your first Name")){
  if(isAlphabet(fname, "Please enter only letters for your First Name")){
  if(lengthRestriction(fname, 1, 30)){
          if(emailValidator(email, "Please enter a valid email address")){
      //if(notEmpty(MiddleName, "Please enter your Midle name")){
  //if(isAlphanumeric(MiddleName, "Please enter only letters for your Middle Name")){
  //if(lengthRestriction(MiddleName, 1, 30)){
      if(notEmpty(subject, "Please enter your subject ")){
  if(isAlphanumeric(subject, "Please enter only letters for your subject")){
  if(lengthRestriction(subject, 2, 30)){
                if(notEmpty(text, "Please enter your message")){
  //if(isAlphanumeric(text, "Please enter only letters for your message")){
  if(lengthRestriction(text, 4, 200)){
     
      return true;
            }}}}   }}}}
  
        }}
  
  return false;
  
}

function notEmpty(elem, helperMsg){
  if(elem.value.length == 0){
    alert(helperMsg);
    elem.focus(); // set the focus to this input
    return false;
  }
  return true;
}

function isNumeric(elem, helperMsg){
  var numericExpression = /^[0-9]+$/;
  if(elem.value.match(numericExpression)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

function isAlphabet(elem, helperMsg){
  var alphaExp = /^[a-zA-Z]+$/;
  if(elem.value.match(alphaExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

function isAlphanumeric(elem, helperMsg){
  var alphaExp = /^[0-9a-zA-Z]+$/;
  if(elem.value.match(alphaExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

function lengthRestriction(elem, min, max){
  var uInput = elem.value;
  if(uInput.length >= min && uInput.length <= max){
    return true;
  }else{
    alert("Please enter between " +min+ " and " +max+ " characters ");
    elem.focus();
    return false;
  }
}

function madeSelection(elem, helperMsg){
  if(elem.value == "Select Sex"){
    alert(helperMsg);
    elem.focus();
    return false;
  }else{
    return true;
  }
}

function emailValidator(elem, helperMsg){
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
  if(elem.value.match(emailExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}</script>


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
           <li><a href="viewhousedetailcus.php">RentingHouse </a></li>
      
        <li><a href="feedback.php">SendFeedback</a></li>
             <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                   <li><a href="viewresponsecus.php"> ViewResponse</a></li>
                    <li><a href="viewnewscus.php"> ViewNews</a></li></ul></li>
         <li><a href="#".php">View Report </a>
      <ul>
      <li><a href="userreport.php">User Report</a></li><br/>
            <li><a href="#".php">House Report</a>
      <ul>
        <li><a href="totalhouse.php">Total House</a></li><br/>
          <li><a href="freehouse.php">Free House</a></li><br/>
        <li><a href="reservedhouse.php">Reserved House</a></li><br/>

      </ul></li></li></ul>
             <li><a href="leavehouserequest.php">LeaveHouse</a></li>

<li><a href="Logout.php" onclick="islogout()">Logout</a></li> 
    
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">


<td  bgcolor="	#ffccff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> Customer Page To Give Feedback</b><!-- InstanceEndEditable --></div>
     	</br>
<form align='center' name="f" action="feedback.php" method="post" onsubmit='return formValidation();'>
<table><tr><td>
<p>Enter your name:</td>
<td><input type="text" name="hbg" id='fname'/><br></td></tr>
<td>Email address:</td><td>
<input type="text" name="bg" id='email'/><br></td></tr>
<td>
message subject:</td>
<td><input type="text" name="g" id='sub'/><br></td></tr>
<td>enter your messages:</td>
<td><textarea cols="22" rows="5" name="msg" id='text'/></textarea><br></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp<input type="submit" name ="contact" value="submit"/></td></tr></table>
</font>
</p>
</form>
<?php

if(isset($_POST['contact']))
{
//include('config.php');
$con = mysqli_connect('localhost', 'root', '','house');
$fname=$_POST['hbg'];
$email=$_POST['bg'];
$ms=$_POST['g'];
$msg=$_POST['msg'];
$sql="INSERT INTO feedback(firstname,email,subject,message)
VALUES('$fname','$email','$ms','$msg')";
//'$country','$region','$city','$kebele','$house_number','$phone_number','$email')";

if(mysqli_query($con,$sql))
{
    include 'feedback.php';
//echo '<center><strong>Password is changed succesfully</strong></center>';
echo "<script type='text/javascript'>alert('thank you for your feedback')</script>";
     }
else {
  echo "Error on table feedback ".mysqli_error($con);
}

//or die('Error,query failed');
mysqli_close($con);
}
?>
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
