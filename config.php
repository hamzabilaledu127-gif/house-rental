<?php
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



