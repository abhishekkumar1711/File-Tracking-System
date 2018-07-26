<?php
   include('sessionadmin.php');
?>
<html>
<body>
<title><?php echo $login_session;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="welcomestyle.css">
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
      <a href="logoutadmin.php">Logout</a>
      <a href="#contact">Contact</a>
      <a href="home.php">Login</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

 </div>


</div>
<hr>

<div class="row">
 <div class="columna"></div>
 <div class="columnb">
   <div class="system">
     WELCOME <?php echo $login_session;?><br><br>
    <fieldset>
     <legend>PRIVILEGES</legend><br>
     
    <form action="trackfileadmin.php"><button style="width: 40%; padding: 8px 8px;">Track all transactions</button></form>
	<form action="trackuseradmin.php"><button style="width: 40%; padding: 8px 8px;">Monitor Users</button></form>
     <form action="deleteuser.php"><button style="width: 40%; padding: 8px 8px;">Delete a User</button></form>
    </fieldset>
 
   </div>
 
 </div>
 <div class="columnc"></div>
</div>










</body>
</html>


