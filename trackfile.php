<?php
   include('session.php');
?>
<html>
<body>
<title><?php echo $login_session;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="trackfilestyle.css">
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
<br><br>

    <div class="trackclass" style="text-align:center;">
  
       TRACK YOUR FILE
       <hr style="width: 15%; opacity: 0.5">
       <br>
        <fieldset>
		<br>
	
		 <form action="tfileno.php"><button style="padding: 10px 15px; width: 30%; background-color: #2196f3; border-color: #2196f3; color: white;">TRACK BY FILE NO</button></form>
	     <form action="tdepname.php"><button style="padding: 10px 15px; width: 30%; background-color: #2196f3; border-color: #2196f3; color: white;">TRACK BY DEPARTMENT</button></form>
         <form action="tfilename.php"><button style="padding: 10px 15px; width: 30%; background-color: #2196f3; border-color: #2196f3; color: white;">TRACK BY FILE NAME</button></form>
		 <br>
		</fieldset>
		
    </div>

	
	

</body>
</html>