<?php
   session_unset();
   session_write_close();
   setcookie(session_name(),'',0,'/');
   setcookie('sessionCookie',"",time()- 60*60*24*365 ,'/');
   setcookie("userCookie", "", time()+ 60*60*24*365,'/');
   header("Location:index.php");
?>