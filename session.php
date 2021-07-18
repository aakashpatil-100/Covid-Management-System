<?php
   include('Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];

   $user_check = strtoupper($user_check);
   
   $login_session = "$user_check";
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>