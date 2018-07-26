<?php
   include('session.php');
?>
<html>
<body>
<title><?php echo $login_session;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">


<style>

td {
    border: 1px solid #ddd;
    padding: 8px;
}
  th {
    border: 1px solid #ddd;
	 padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2196f3;
    color: white;
	text-align: center;
}
table{width: 100%; text-align: center;  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;}
	
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}


</style>



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


	
<div class="stat" style="text-align: center; font-family: verdana; font-size: 20px; color: #333333;">
<h4>YOUR ENTERED RESULT</h4>
</div>
	
<br>	
	
 <?php
$servername="localhost";
$username="root";
$password="";
$dbname="fts";
$db= mysqli_connect($servername,$username,$password,$dbname);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$file_name = mysqli_real_escape_string($db,$_POST['file_name']);


$sql = "SELECT file_no, file_name, department_name FROM files WHERE file_name='$file_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo" <table><tr><th>FILE NO</th><th>FILE NAME</th><th>CURRENT LOCATION</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["file_no"]."</td><td>" . $row["file_name"]. "</td><td> ". $row["department_name"]."</td></tr>";
		}
		echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>