<?php
   include('session.php');
?>
<html>
<body>

<title>
<?php echo $login_session;?>
</title>

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

<form style="text-align: center; color: #4d4d4d;" action="recieved.php">
  
  RECIEVE A FILE
 <hr style="width: 15%; opacity: 0.5">
  
  <input type='text' name='file_no' id='file_no' maxlength="50" placeholder="File No"/>
  <br>
  <input type='submit' name='Submit' value='RECIEVE FILE' />
</form>

</body>
</html>