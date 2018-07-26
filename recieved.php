<?php
   include('session.php');
?>
<html>
<title><?php echo $login_session;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="javascript.js"></script>

<body>


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

<div class="print" style="text-align: center; padding: 15px 15px; font-family: verdana; font-size: 20px; color: #4d4d4d;">
     <br><br><br>
  
  
      
  
   
     <?php
     $mysqli = new mysqli("localhost", "root", "", "fts");
 
     // Check connection
     if($mysqli === false){
     die("ERROR: Could not connect. " . $mysqli->connect_error);
      }

     $file_no = $mysqli->real_escape_string($_REQUEST['file_no']);

    
	 
	 
     $sql = "UPDATE files SET status='RECIEVED'  WHERE file_no=$file_no";    //update status logic
	 

     if($mysqli->query($sql) === true){
          echo "";
      } else{
          echo "No such File Found in Transaction Process $sql. " . $mysqli->error;  
      }
     $mysqli->close();
     ?>    

      



    

	  
	  
	  
	 <?php
     $mysqli = new mysqli("localhost", "root", "", "fts");
 
     // Check connection
     if($mysqli === false){
     die("ERROR: Could not connect. " . $mysqli->connect_error);
      }

     $date=date('y-m-d h:i:s');
	 
     $sql = "UPDATE files SET sent_date='$date' WHERE file_no=$file_no";    //update status logic
	 

     if($mysqli->query($sql) === true){
          echo " File Recieved";
      } else{
          echo "No such File Found in Transaction Process $sql. " . $mysqli->error;  
      }
     $mysqli->close();
     ?>    
	 
	 
	 
 
	 
	  
	  
	  
	  
      <br><br><br>
      <form action="recievefile.php"><button style="background-color: #2196f3; border-color: #2196f3; color: white; padding: 15px 15px">RECIEVE ANOTHER FILE</button></form>

</div>	  
	  
	  
</body>
</html>