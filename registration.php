<html>
<body>
<title>File Tracking System</title>
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
      <a href="home.php">Login</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

 </div>


</div>
<hr>

<div class="showsuccess" style="text-align:center; font-family: verdana; font-size: 20px;">

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "fts");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$staff_no = $mysqli->real_escape_string($_REQUEST['staff_no']);
$department_name = $mysqli->real_escape_string($_REQUEST['department_name']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
 
// attempt insert query execution
$sql = "INSERT INTO user (name ,staff_no, department_name, password) VALUES ('$name' ,'$staff_no' , '$department_name' , '$password')";
if($mysqli->query($sql) === true){
    echo "$name, You are registered successfully.";
} else{
    echo "STAFF NO $staff_no ALREADY REGISTERED " ;
}
 
// Close connection
$mysqli->close();
?>

<br><br>

<form action="register.php"><button style="color: white; background-color: #2196f3; padding: 10px 15px; border-color: #2196f3;">Go Back</button></form>

</div>



</body>
</html>