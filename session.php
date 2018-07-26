<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select name , department_name  from user where staff_no = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   $login_department = $row['department_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:home.php");
   }
?>