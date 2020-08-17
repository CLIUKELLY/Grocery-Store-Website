<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION["timeout"]);
   unset($_SESSION["valid"]);
   unset($_SESSION['loginlogin']);
   echo 'You have cleaned session';
   header('Refresh: 1; URL = P9.html');
?>