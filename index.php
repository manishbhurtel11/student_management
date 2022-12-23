<?php
session_start();
   if(isset($_SESSION)){
      header("Location: http://localhost/management/dashboard.php");
   }
   else{
      header("Location: http://localhost/management/login.php");
   }
?>