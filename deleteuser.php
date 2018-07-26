<?php
   include('sessionadmin.php');
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
      <a href="logoutadmin.php">Logout</a>
      <a href="#contact">Contact</a>
      <a href="home.php">Login</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

 </div>


</div>
<hr>



<form style="text-align: center; color: #4d4d4d;" action="deleted.php">
  
  REMOVE A USER
 <hr style="width: 15%; opacity: 0.5">
  
  <input type='text' name='staff_no' id='staff_no' maxlength="50" placeholder="Enter Person's Staff No"/>
  <br>
  <input type='submit' name='Submit' value='REMOVE THIS USER' />
</form>




</body>
</html>