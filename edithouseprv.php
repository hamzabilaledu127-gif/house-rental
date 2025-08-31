<?php   
 session_start();
 //include("config/config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['username']))
 {
  $username=$_SESSION['username'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php   
 
 include("config/config.php");
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

</td>


<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
                        <li><a href="uploadhouseprv.php">UploadHouse </a></li>
       
        <li><a href="viewhouseprv.php">ManageHouse</a></li>
       
  
        <li><a href="sendresponseprv.php">SendResponse</a></li>
      <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                    <li><a href="viewrequestprv.php"> ViewRequest</a></li>
                   <li><a href="viewfeedbackprv.php"> ViewFeedback</a></li>
                   </ul></li>
<li><a href="home.php" onclick="islogout()">Logout</a></li> 
    
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
$con = mysqli_connect('localhost','root', '','house');?>
<?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM register where housenumber='{$ctrl}'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count==1){
while($row=mysqli_fetch_array($result)){
$row0=$row[0];
$row1=$row[1];
$row2=$row[2];
$row3=$row[3];
$row4=$row[4];
$row5=$row[5];
$row6=$row[6];
$row7=$row[7];
$row8=$row[8];
$row9=$row[9];
$row10=$row[10];
$row11=$row[11];
$row12=$row[12];

}
?>
  <form method="POST" action="edithouse.php">
  <br><br>
 <table valign='top' align="center" style="width:250px; height:150px;border-radius:10px;border:1px solid #686868">
<tr>
<td></td>
<td align="right"><a href="viewhouseprv.php"><img src="IMG/close.jpg" title="Close"></a></td></tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>image:</b></font></td><td><input type="blob" name="image" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row0?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>fname:</b></td><td><input type="text" name="fname" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row1?>"/></td>
</tr>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>lname:</b></td><td><input  type="text" name="lname" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;"  value="<?php echo $row2?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>email:</b></td><td><input type="text" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" name="email" value="<?php echo $row3?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>phone:</b></td><td><input type="number" name="phone" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row4?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>kebele:</b></td><td><input type="text" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" name="kebele" value="<?php echo $row5?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>room:</b></td><td><input type="number" name="room" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row6?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>housenumber:</b></td><td><input type="number" name="housenumber" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row7?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>price:</b></td><td><input type="number" name="price" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row8?>"/></td></tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>floor:</b></td><td><input type="text" name="floor" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row9?>"/></td></tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>status:</b></td><td><input type="text" name="status" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row10?>"/></td></tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>type:</b></td><td><input type="text" name="type" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row11?>"/></td></tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>date:</b></td><td><input type="date" name="date" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row12?>"/></td>
</tr>

<tr><td colspan=2 align='center'><input type='submit' name='update' value='Update'></tr></td>
</table>
 </form>
 <?php
}
  
?>
<?php
  if(isset($_POST['update']))
  {
      $img=$_POST['image'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $Kebele=$_POST['kebele'];
        $room=$_POST['room'];
        $housenumber=$_POST['housenumber'];
         $price=$_POST['price'];
        $floor=$_POST['floor'];
        $status=$_POST['status'];
        $type=$_POST['type'];
        $Date=$_POST['date'];
  $update = mysqli_query($con,("update register set image='$img',fname=' $fname',lname='$lname',email='$email',
  phone=' $phone', kebele='$Kebele',room=' $room',housenumber='$housenumber',price='$price',
  floor='  $floor', status='$status',type=' $type',date='$Date'
  WHERE housenumber='$housenumber'")) or die(mysql_error());
    

 echo "<script>window.location='viewhouse.php';</script>";
  }
  
  ?>
<?php
  
 
//print( "</table>");
mysqli_close($con);
?>
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
