<?php 
  session_start();
   // include 'db.php';
   unset($_SESSION['login']);
   header('location:login.php');


?>