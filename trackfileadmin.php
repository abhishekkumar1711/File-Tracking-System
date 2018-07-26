<?php
   include('sessionadmin.php');
?>
<html>
<body>

<title>
<?php echo $login_session;?> 
</title>

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



</style



<script>

<script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}




var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}






function fileno() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
 for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[0];
	td2 = tr[i].getElementsByTagName("td")[1];
	td3 = tr[i].getElementsByTagName("td")[2];
	td4 = tr[i].getElementsByTagName("td")[3];
	td5 = tr[i].getElementsByTagName("td")[4];
	td6 = tr[i].getElementsByTagName("td")[5];
	td7 = tr[i].getElementsByTagName("td")[6];
    if (td1 && td2 && td3 && td4 && td5 && td6 && td7)
		{
      if (td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 || td3.innerHTML.toUpperCase().indexOf(filter) > -1 || 
	      td4.innerHTML.toUpperCase().indexOf(filter) > -1 || td5.innerHTML.toUpperCase().indexOf(filter) > -1|| td6.innerHTML.toUpperCase().indexOf(filter) > -1
	     || td7.innerHTML.toUpperCase().indexOf(filter) > -1)
		 {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }


}


</script>
</script>






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
      <a href="logoutadmin.php">Admin Login</a>
      <a href="#contact">Contact</a>
      <a href="home.php">Login</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

 </div>


</div>
<hr>






 


<div class="status" style="text-align: center; font-family: verdana; font-size: 20px; color: #333333;">
  <h4>MONITOR FILE TRANSACTIONS</h4>
  
      <input type="text" id="myInput" onkeyup="fileno()" placeholder="File No,  File Name,  Sender Name,  Reciever Name,  Current Department, Transaction Date, Transaction Status" style="width: 60%; border-color: #2196f3; text-align: center;">
    
</div>


<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT file_no , file_name, sender_name, reciever_name, department_name,sent_date, status FROM files ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo" <table id=myTable><tr><th>FILE NO</th><th>FILE NAME</th><th>SENDER DETAILS<br><div style='font-size: 10px;'>Name(Staff No)</div></th><th>RECIEVER DETAILS<br><div style='font-size: 10px;'>Name(Staff No)</div></th><th>CURRENT LOCATION</th><th>TRANSACTION DATE</th><th>TRANSACTION STATUS</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
   echo "<tr><td>". $row["file_no"]."</td><td>". $row["file_name"]. "</td><td> ". $row["sender_name"]."</td><td>". $row["reciever_name"]."</td><td>". $row["department_name"]."</td><td>".$row["sent_date"]."</td><td>".$row["status"]."</td></tr>";
    }
	echo" </table>";
} else {
    echo "0 results";
}


$conn->close();
?>

<br>
<br>
<hr style="color: #4d4d4d;">
<br>
<br>


</body>
</html>

