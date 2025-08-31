
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

</td>


<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	<li><a href="home.php">Home</a></li>

    <li><a href="housedatabase.php">viewhouse</a></li>
<li><a href="accountrequestcus.php">ActivationRequest</a></li>
        <li><a href="viewactivationresponse.php">Activation</a></li>
          <li><a href="login.php">Login</a></li>
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">


<td  bgcolor="	#ffccff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> Gondar city house rental System</b><!-- InstanceEndEditable --></div>
     	</br>
     	

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

    if($row['status']=='reserved'){  
//echo"<div id='s'>";

echo "<table align=''><tr><td>  ";

  $s=$row['image'];
echo"<table><tr><td>";
  echo '<a href="" ><img  alt="" src="'.$s.'" style="height:170px; width:200px" onclick="this.width=820;this.height=486;" onmouseout="this.width=200;this.height=170" ></a></td><td><font size=3px>First Name:- ';
	echo $row['fname'];
           
	echo "<br/> Last Name:-      "; 
  
        echo $row['lname'];
        echo "<br/> email:-  ";
        echo $row['email'];
        echo "<br/>Phone Number:-   ";
		echo $row['phone'];
		echo "<br/> kebele:-  ";
		echo $row['kebele'];
		//echo "<br/> Number of room:-   ";
		//echo $row['room'];
		echo "<br/>house number:-    ";
		echo $row['housenumber'];
		echo "<br/>Price:-   ";
		echo $row['price'];
		echo "<br/>Floor:-    ";
	        echo $row['floor'];
          echo "<br/>type:-    ";

          echo $row['type'];
          echo "<br/>date:-    ";

          echo $row['date'];
             
		echo "</font>   </td></tr> </table>";
                 echo" <td bgcolor='' size='0px'><img src='images/reserv.jpg' style=height:30px; width:10px ></td></div></td></tr></table>";
}
else{
   echo"<div id='s'>";

echo "<table align=''><tr><td>  ";

  $s=$row['image'];
echo"<tr><td><table><tr><td>";
  echo '<a href="login.php" ><img  alt="Send Request" src="'.$s.'" style="height:170px; width:200px" onclick="this.width=820;this.height=486;" onmouseout="this.width=200;this.height=170" ></a></td><td><font size=3px>First Name: ';
             
          
	echo $row['fname'];
           
	echo "<br/> Last Name:-"; 
  
        echo $row['lname'];
        echo "<br/> email:-  ";
        echo $row['email'];
        echo "<br/>Phone Number:-   ";
		echo $row['phone'];
		echo "<br/> kebele:-  ";
		echo $row['kebele'];
		//echo "<br/> Number of room:-   ";
		//echo $row['room'];
		echo "<br/>house number:-    ";
		echo $row['housenumber'];
		echo "<br/>Price:-   ";
		echo $row['price'];
		echo "<br/>Floor:-   ";
	        echo $row['floor'];
		echo "</font>   </td></tr></table> ";
              echo" <td bgcolor='' size='4px'>
                 <a href='Login.php'><img src='images/se.png' style=height:30px; width:10px ></a></td></td></tr>
                </table></div>";
}       
}
$query = "select * from register";
$result = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='housedatabase.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='housedatabase.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='housedatabase.php?page=$total_pages'>".'Next Page'."</a></h3></center> ";

//Now select all from table

?>
      
  </div>
   

     
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
