<!DOCTYPE html>
<html>
<head>
		<title> Education Haven</title>
	
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style2.css">
<style>
* {box-sizing: border-box;}

html {
  overflow:hidden;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  background-color: #e9e9e9;
  height:50px;
}

.topnav a {
  float:right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float:right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>




</head>
<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()" style="text-align:center;"><h5>Collapse &times</h5></button>
  <img src="user.jpg" height="200" width="200" style="border-radius:50%;"><br><br><br><br>
<?php
    session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
    $query = mysql_query("SELECT * FROM websiteusers WHERE userID = '".$_SESSION['theuser']."'"  );
    $row = mysql_fetch_array($query);
    if(!$row){
      echo '<script type="text/javascript">
                   window.location = "index.php";
    </script>';
    }
    $query = mysql_query("SELECT * FROM filet WHERE userID = '".$_SESSION['theuser']."'"  );
    $i=0;
    while($vote = mysql_fetch_array($query)){
        $i++;
    }
    echo "<div style='text-align:center;'>$row[1] <br><i>(@$row[2])</i></div><br><br><div style='text-align:center'>$i Posts</div>";
  ?>
  <a href="index1.php" style="text-align:center;margin-top:60px;" class="w3-bar-item w3-button"><h3>Upload Material</h3></a>
  <a href="myposts.php" style="text-align:center;" class="w3-bar-item w3-button"><h3>My Posts</h3></a>
  <a href="index.php" style="text-align:center;" class="w3-bar-item w3-button" class="log"><h3>Log out</h3></a>
</div>
<div id="main">
<div class="topnav">
<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <a href="#about">About</a>
  <a href="new.php">Home</a>
  <a class="active" style="cursor: pointer;" onclick="k()">Search</a>
  
  <select name="subtopic" class = "form-control" id="k3">
  <option value="01">Mechanics</option>
  <option value="02">Quantum</option>
  <option value="03">Modern</option>
  <option value="04">Electrodynamics</option>
          </select> 
  <select name="subject" class = "form-control">
  <option value="01">Physics</option>
  <option value="02">Maths</option>
  <option value="03">Chemistry</option>
          </select>
          <script>
function k(){a=document.getElementById("k3");var strUser = a.options[a.selectedIndex].value;
if(strUser==01)
   {window.location.href="mechanics.php";}
 else if(strUser==02)
   {window.location.href="index1.php";}
 else if(strUser==03)
   {window.location.href="index1.php";}
 else if(strUser==04)
  {window.location.href="mechanics.php";}
}
</script>
</div>
</div>

<div id="k1"><br><br>
            <form action="file_upload1.php" method="post" enctype="multipart/form-data" class="form"> 
  <br><br>
  <div id="f9">
     <table>
      <tr>
     <select name="subject" class = "form-control1 input-lg c">
     <option value="Physics">PHYSICS</option>
 
          </select> </tr>
        <tr>
          <select name="subtopic" class = "form-control1 input-lg c">
  <option value="Mechanics">Mechanics</option>
  <option value="Quantum">Quantum</option>
  <option value="Modern">Modern</option>
  <option value="Electrodynamics">Electrodynamics</option>
          </select> 
        </tr>
   
      <div id="f7"> <input type="text" name="desc" value="" class="form-control1 input-lg" placeholder="Notes Description"  /></div>
     </tr>
      <tr>
      <input type="file" name="fileToUpload" id="fileToUpload"><br>
      <button type="submit" name="submit" class="form-control1 c">Upload file(max 100MB)</button>
      </tr>

</table>

  </div>

</form>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</body>

</body>
</html>