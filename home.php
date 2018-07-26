<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mystaff_no = mysqli_real_escape_string($db,$_POST['staff_no']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT name FROM user WHERE staff_no = '$mystaff_no' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $mystaff_no;
         
         header("location: welcomeuser.php");
      }else {
		  
        echo  "Your Login Name or Password is invalid";
		
      }
   }
?>



<html>
<head>
<title>Login Page</title>
</head>
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
      <a href="home.php">Login</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

 </div>


</div>
<hr>

	
	
	
	
      <div align = "center">
	  
	              <div class="heading">
                    <h2>FILE TRACKING SYSTEM</h2>
                  </div>
	  
	  
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#4d4d4d; color:#FFFFFF; padding:10px; text-align: center;"><b>User Login</b></div>
				
            <div style = "margin:30px; text-align: center;" >
               
               <form action = "" method = "post" >
                  <input type = "text" name = "staff_no" placeholder="Enter Your Staff No" class = "box" style="width: 90%; text-align: center;" required/><br /><br />
                  <input type = "password" name = "password" placeholder="Enter your password" class = "box" style="width: 90%; text-align: center;" required /><br/><br />
                  <input type = "submit" value = " Login " style="width: 90%;"/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>