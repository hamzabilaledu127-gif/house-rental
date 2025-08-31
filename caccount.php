


<html>
    <head><title>create account  page</title>
       
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>
              <script type='text/javascript'>


function Validator(){  
	var id = document.getElementById('id');

	// Make quick references to our fields
	//var landlordId = document.getElementById('lid');
	var username = document.getElementById('un');
	//var MiddleName=document.getElementById('mname');
	//var LastName=document.getElementById('lname');
	//var Sex = document.getElementById('sex');
	//var Country = document.getElementById('country');
	//var Region = document.getElementById('region');
	//var City = document.getElementById('city');
	var email = document.getElementById('email');
   var user = document.getElementById('type');
	var pas = document.getElementById('password');
	//var pas = document.getElementById('status');
	
	//var email = document.getElementById('email');
        	//var ssn = document.getElementById('ssn');
                	//var price = document.getElementById('price');
                        	//var floor = document.getElementById('floor');
                        	//var image = document.getElementById('images');
                        	       if(notEmpty(id, "Please enter your id ")){
    if(isNumeric(pas, "Please enter only Number For Your password ")){
	if(lengthRestriction(pas, 6, 14)){
                              //if(notEmpty(user, "Please select your user type")){
                
	
	// Check each input in the order that it appears in the form!
	//if(notEmpty(CustomerId, "Please Create and Enter Your Own Customer Id")){
	//if(isAlphanumeric(CustomerId, " Please Enter Numbers and Letters Only for Customer Id")){
	//if(lengthRestriction(CustomerId, 1, 10)){
        //if(notEmpty(landlordId, "Please Enter Your id number")){
	     if(notEmpty(username, "Please Enter Your user Name")){
	if(isAlphabet(username, "Please enter only letters for your user Name")){
	if(lengthRestriction(username, 3, 30)){
	    //if(notEmpty(MiddleName, "Please enter your Midle name")){
	//if(isAlphanumeric(MiddleName, "Please enter only letters for your Middle Name")){
	//if(lengthRestriction(MiddleName, 1, 30)){
	    //if(notEmpty(LastName, "Please enter your Last Name")){
	//if(isAlphanumeric(LastName, "Please enter only letters for your Last Name")){
	//if(lengthRestriction(LastName, 3, 30)){
                //if(notEmpty(email, "Please enter your user Name")){
	//if(isAlphanumeric(email, "Please enter only letters for your user Name")){
	//if(lengthRestriction(username, 3, 30)){
     
	//if(isAlphanumeric(username, "Please enter only letters for your user Name")){
	//if(lengthRestriction(username, 3, 30)){
                    if(emailValidator(email, "Please enter a valid email address")){
                                     //if(notEmpty(ssn, "Please enter security number")){
    //if(isNumeric(ssn, "you must enter a number ")){
	//if(lengthRestriction(ssn, 3, 10)){
             if(notEmpty(pas, "Please enter your Password ")){
    if(isNumeric(pas, "Please enter only Number For Your password ")){
	if(lengthRestriction(pas, 6, 14)){
                              if(notEmpty(user, "Please select your user type")){
                
            // if(notEmpty(Kebele, "Please enter your Kebele")){
    //if(isNumeric(Kebele, "Please enter a Number For Your Kebele")){
	//if(lengthRestriction(Kebele, 0, 20)){
	
	   // if(notEmpty(room, "Please enter your room number")){
	//if(isNumeric(room, "Please enter a Number For Your room Number")){
	//if(lengthRestriction(room, 1, 20)){
                 //if(notEmpty(HouseNumber, "Please enter your House Number")){
    //if(isNumeric/(HouseNumber, "Please enter a Number For Your House Number")){
	//if(lengthRestriction(HouseNumber, 1, 20)){
	    //if(notEmpty(price, "Please enter your price")){
	//if(isAlphanumeric(Region, "Please enter only letters for your Region")){
	//if(lengthRestriction(Region, 1, 20)){
	    //if(notEmpty(floor, "Please enter your floor")){
	//if(isAlphanumeric(City, "Please enter only letters for your City")){
	//if(lengthRestriction(City, 1, 20)){
	       //if(notEmpty(image, "Please browse your image")){
	
	
		
							return true;
						}}}}   
                              }}}  }}}}
	            
	
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
	if(elem.value == "Select user type"){
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

              <style type="text/css">
                  .input {
width:150px;
display:block;
border: 1px solid blue;
height: 16px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

              </style>

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
                    <li><a href="reserved.php" target="_parent">Reserve House</a></li>
                
                   
                     
				   
           </ul>
				   
           
	 
  </div> 	   

  <div id="main_body">
   <div class="create_account" align="center">
     <form  name="f1" id="f1" action="signup2.php" method="POST" onSubmit="return Validator()">


<table   class="inputform" align="reight" cellpadding="" cellspacing="">
    <h1><font face="arebic" color="black"> Register to use our site</font></h1>
  <tr>

      <td  rowspan="10" valign="top"><img src="images/lab contact.gif" width="200" height="155" alt=""></td></tr>

<tr><td>Id: </td><td class="inputform">  <input type="number" name="id" id="id" ></td></tr>
<tr><td>username: </td><td class="inputform">  <input type="text" name="un" id="un" ></td></tr>

<tr><td>email: </td><td class="inputform">  <input type="text" name="email" id="email" ></td></tr>
<tr><td>Password:</td><td class="inputform">  <input type="password" name="p" id="password" ></td></tr>

<tr><td>Account type: </td><td class="inputform"><select name="type" id="type" >
                <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				<option value="customer">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Customer </option>
				<option value="Private Owner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Private Owner </option>
					<option value="Employee">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Employee </option>
				
				</select></td></tr>
			
 <tr><td bgcolor="cyan"> &nbsp;&nbsp;<input type="submit"	name="register" value="register"></td><td bgcolor=""> <input type="reset" value="cancel"></tr>
</table></form>	

  </div>
   
  </div>
 
  <div id="login">
    <table align="right"><tr><td><a href="Login.php"><img src ="images/log.jpg" width="90px"  hight="80" alt="Login"/></a></td></tr>

          <tr><td><a href="caccount.php" target="_parent"><img src="images/create.png" width="100px"  hight="90"/></a></td></tr>
          <tr><td><a href="forgot1.php" target="_parent"><img src="images/FO.png" width="100px"  hight="90"/></a></td></tr>
          </table>
  </div>
 
 <div id="footer">
     
     <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>
>

 </div>
  
  </div>


    </body>
</html>


















































