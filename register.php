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


<div align = "center">
	  
	              <div class="heading">
                    <h2>FILE TRACKING SYSTEM</h2>
                  </div>

	  
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#4d4d4d; color:#FFFFFF; padding:10px; text-align: center;"><b>Register Yourself Here</b></div>
				
            <div style = "margin:30px; text-align: center;" >
               
               <form action = "registration.php" id="register" method = "post" >
                  <input type = "text" name = "name" placeholder="Enter Your Name" class = "box" style="width: 90%; text-align: center;" required/><br />
                  <input type = "text" name = "staff_no" placeholder="Enter your Staff No" class = "box" style="width: 90%; text-align: center;" required/><br/>
				  
				  
				  <select type = "text" name="department_name" placeholder="select Your Department Name" class = "box" style="width: 90%; text-align: center;" required><br />
				           <option value="" >Select Your Department</option>
				           <option value="SAP" >SAP</option>
                           <option value="PAYROLL" >PAYROLL</option>
                           <option value="BGH" >BGH</option>
                           <option value="ERP">ERP</option>
                           <option value="LEGACY APPLICATION" >LEGACY APPLICATION</option>
                 </select>
				  
                  <input type = "password" name = "password" placeholder="Enter your password" class = "box" style="width: 90%; text-align: center;" required/><br/>
                  <input type = "submit" value = " Register " style="width: 90%;" required/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>






</body>
</html>



