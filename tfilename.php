<?php
   include('session.php');
?>
<html>
<body>
<title><?php echo $login_session;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="javascript.js"></script>








<div class="row1">

 <div class="column1">   
      <br><br>  
      <img src="sail.gif" style="width: 95px; height: 95px">
 </div>

 <div class="column2">
    <h5>
      <br><br>
      Steel Authority Of India Limited
      </h5>
      Bokaro Steel City
 </div>
 
 <div class="column3">
    <br>
    <br>
    <div class="topnav" id="myTopnav">
      <a href="register.php">Register</a>
      <a href="adminlogin.php">Admin Login</a>
      <a href="#contact">Contact</a>
      <a href="logout.php">Logout</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

 </div>


</div>
<hr>

<div class="search" style="text-align: center; font-family: verdana;">
<h4>TRACK FILE BY FILE NAME</h4>
<form action="tfilenameresult.php" method="post">

  <input type="text" id="file_name" name="file_name"  placeholder="FILE NAME">
  <br>
  <button style="padding: 10px 15px; width: 30%; background-color: #2196f3; border-color: #2196f3; color: white;">submit</button>

</form>

</div>




</body>
</html>