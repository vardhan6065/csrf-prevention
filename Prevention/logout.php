<?php
   session_unset();
   session_write_close();
   setcookie(session_name(),'',0,'/');
   setcookie('sessionCookie',"",time()- 3600 ,'/');
   setcookie("csrfnameCookie", "", time()- 3600,'/');
   setcookie("csrfTokenCookie", "", time()- 3600,'/');
   header("Location:index.php");
?>