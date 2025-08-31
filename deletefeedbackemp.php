
<?php
include("config/config.php");
if($log != "log"){
	header ("Location: viewitem.php");
	
}
$ctrl = $_REQUEST['key'];

$SQL = "DELETE FROM item WHERE item_code = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'viewitem.php'</script>";
?>