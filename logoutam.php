<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>




<?php
 session_start();
 //echo "user".$_SESSION['user'];
 //if(session_is_registered('txt_username')){

 session_unset();
 session_destroy();
 echo "<script>window.location='loginam.php';</script>";
 //}
 //else
 {
   echo "session not set";
 }
?>
