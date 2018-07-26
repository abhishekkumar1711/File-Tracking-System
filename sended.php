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

<div class="print" style="text-align: center; padding: 15px 15px; font-family: verdana; font-size: 20px; color: #4d4d4d;">
     <br><br><br>
	 
     <?php
     /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $mysqli = new mysqli("localhost", "root", "", "fts");
 
      // Check connection
     if($mysqli === false){
     die("ERROR: Could not connect. " . $mysqli->connect_error);
      }
 
      // Escape user inputs for security
      $file_name = $mysqli->real_escape_string($_REQUEST['file_name']);
      $file_no = $mysqli->real_escape_string($_REQUEST['file_no']);
      $reciever_name = $mysqli->real_escape_string($_REQUEST['reciever_name']);
      $department_name = $mysqli->real_escape_string($_REQUEST['department_name']);

	  
      
      // attempt insert query execution
      $sql = "INSERT INTO files (file_name ,file_no, sender_name, reciever_name, department_name, status) VALUES ('$file_name' ,'$file_no' ,'$login_session($user_check)' ,'$reciever_name($department_name)','$login_department','SENT')";

      if($mysqli->query($sql) === true){
          echo "$login_session , Your file has been sent successfully.";
      } else{
          echo "ERROR: Could not able to execute $sql. " . $mysqli->error;  
      }
 
      // Close connection
      $mysqli->close();
      ?>
	  
	  
      <br><br><br>
      <form action="sendfile.php"><button style="background-color: #2196f3; border-color: #2196f3; color: white; padding: 15px 15px">SEND ANOTHER FILE</button></form>

</div>	  
	  
	  
</body>
</html>