<!DOCTYPE html>
<html>
<head>
		<title> Ed Haven</title>
		
		<link rel="stylesheet" href="style.css">

</head>
<body>
<br><br>
<img src="flogo.png" style="position:absolute; top:50%; left:50%; margin-top:-100px; margin-left:-100px;" height="200px" width="200px">
<div id="a2">
            <form method="post" accept-charset="utf-8" method="POST" action="sign-in1.php" class="form" role="form"> 
            		
            		
            		  <legend style="color:rgba(20,20,20,0.8)">Sign In</legend><br><br>
                   			

			<table>
				<tr>                    
                            <input type="text" name="user" value="" class="form-control input-lg" placeholder="Email or Username"/>                          
               </tr>    
               <tr>     <input type="password" name="pass" value="" class="form-control input-lg" placeholder="Enter Password"  />
               </tr><br>
                
		
			<tr>
			<button type="submit" name="submit"	class="form-control">Sign In</button>
			</tr>
	</table>


	

</form>
</div>
<div id="a1">
            <form accept-charset="utf-8" method="POST" action="sign-up1.php"> 
            		  <legend style="color:rgba(20,20,20,0.8)">Sign Up</legend><br><br>
                   			

			<table>
				<tr>                    
                            <input type="text" name="user" value="" class="form-control input-lg" placeholder="Username"  />                     
                                           
               </tr> 
				<tr>                    
                            <input type="text" name="name" value="" class="form-control input-lg" placeholder="Full Name"  />                     
                                           
               </tr>    
               <tr>     <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
               </tr>
                
				<tr>
					<select name="iit" class = "form-control input-lg">
	<option value="R">IIT ROORKEE</option>
	<option value="M">IIT MADRAS</option>
	<option value="D">IIT DELHI</option>
	<option value="G">IIT GUWAHATI</option>
	<option value="B">IIT BOMBAY</option>
	<option value="K">IIT KANPUR</option>
	<option value="KG">IIT KHARAGPUR</option>
					</select> 
		    </tr>
			<tr>    
                    <input type="password" name="pass" value="" class="form-control input-lg" placeholder="Password"  />
		    </tr>
    		<tr> 
    		               <input type="password" name="cpass" value="" class="form-control input-lg" placeholder="Confirm Password"  />   
			</tr>
			<tr>
			<button type="submit" name="submit"	class="form-control">Sign up</button>
			</tr>
	</table>

</form>
</div>
<?php
session_start();
$_SESSION['trending']=0;
$_SESSION['mechanics']=0;
$_SESSION['up']=0;
$_SESSION['mp']=0;

define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
</body>
</html>