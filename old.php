<!DOCTYPE HTML>
<HTML>
<HEAD>
<link rel="stylesheet" href="style2.css">
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
</HEAD>	
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
  <a href="#" style="text-align:center;" class="w3-bar-item w3-button"><h3>My Posts</h3></a>
  <a href="index.php" style="text-align:center;" class="w3-bar-item w3-button" class="log"><h3>Log out</h3></a>
</div>

<div id="main">
<div class="topnav">
<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <a href="">Contact</a>
  <a href="">Home</a>
  <a href="mechanics.php" class="active">Search</a>
  
  <select name="subtopic" id="list" class = "form-control">
  <option value="01">Mechanics</option>
  <option value="02">Quantum</option>
  <option value="03">Modern</option>
  <option value="04">Electrodynamics</option>
          </select> 
  <select name="subject" class = "form-control">
  <option value="01">Physics</option>
<!--  <option value="03">Chemistry</option>
          </select> 
-->
</select>
</div>
</div>

<div class="head">Trending Section</div>


<?php

  echo "<form method='post' accept-charset='utf-8' method='POST' action='left.php' class='form' role='form'><button style='height:40px;width:40px;position:fixed;top:50%;left:40px;margin-top:-20px;padding:0; background-color:white;' type='submit' name='submit' class='form-control1 c'><img style='height:30px;width:30px'  src='left.svg'></button></form>";



  echo "<form method='post' accept-charset='utf-8' method='POST' action='right.php' class='form' role='form'><button style='height:40px;width:40px;position:fixed;top:50%;right:40px;margin-top:-20px;padding:0; background-color:white;' type='submit' name='submit' class='form-control1 c'><img style='height:30px;width:30px'  src='right.svg'></button></form>";

$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
    $query = mysql_query("SELECT * FROM filet ORDER BY vote DESC;"  );
    for($i=0;$i<$_SESSION['trending']*3;$i++){
      $row = mysql_fetch_array($query);
    }
    $row1 = mysql_fetch_array($query);
    $query1 = mysql_query("SELECT * FROM websiteusers WHERE userID='".$row[0]."';"  );
    $row1_ = mysql_fetch_array($query1);
    $row2 = mysql_fetch_array($query);
    $query2 = mysql_query("SELECT * FROM websiteusers WHERE userID='".$row[0]."';"  );
    $row2_ = mysql_fetch_array($query1);
    $row3 = mysql_fetch_array($query);
    $query3 = mysql_query("SELECT * FROM websiteusers WHERE userID='".$row[0]."';"  );
    $row3_ = mysql_fetch_array($query1);
if($row1 AND $row2 AND $row3){
  echo"
    <table>
  <tr style='text-align:center'>
 
<div class='containi'><td>
<div class='content'>

	<div class='card l'> 
		<div class='topic'>".$row1[1]."   ->   ".$row1[2]."</div><br>
		<div class='link'><a href='".$row1[4]."' download><img src='pdf.png'></a>   ".$row1[4]."</div><br>
		<div class='desc'>".$row1[3]."</div><br>
		<div class='by'>Contributed by- ".$row1_[1]."(IIT ".$row1_[5].")</div>
		<div class='vote'><p><form method='post' accept-charset='utf-8' method='POST'style='display:inline;' action='up.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'><img src='upvote.png'></button></form>   <form method='post' style='display:inline;' accept-charset='utf-8' method='POST' action='down.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'></form  <img src='downvote.png'></button></form>        <span style='margin-left:30px;'>".$row1[5]." points</span></p></div>
	</div></div></td>
<td>
<div class='content '>
  <div class='card c'> 
    <div class='topic'>".$row2[1]."   ->   ".$row2[2]."</div><br>
    <div class='link'><a href='".$row2[4]."' download><img src='pdf.png'></a>   ".$row2[4]."</div><br>
    <div class='desc'>".$row2[3]."</div><br>
    <div class='by'>Contributed by- ".$row2_[1]."(IIT ".$row2_[5].")</div>
    <div class='vote'><p><form method='post' accept-charset='utf-8' style='display:inline;' method='POST' action='up.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'><img src='upvote.png'></button></form>   <form method='post' style='display:inline;' accept-charset='utf-8' method='POST' action='down.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'></form  <img src='downvote.png'></button></form>        <span style='margin-left:30px;'>".$row2[5]." points</span></p></div>
  </div></td>
<td>

<div class='content '>
  <div class='card r'> 
    <div class='topic'>".$row3[1]."   ->   ".$row3[2]."</div><br>
    <div class='link'><a href='".$row3[4]."' download><img src='pdf.png'></a>   ".$row3[4]."</div><br>
    <div class='desc'>".$row3[3]."</div><br>
    <div class='by'>Contributed by- ".$row3_[1]."(IIT ".$row3_[5].")</div>
    <div class='vote'><p><form method='post' accept-charset='utf-8' method='POST' style='display:inline;' action='up.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'><img src='upvote.png'></button></form>   <form method='post' style='display:inline;' accept-charset='utf-8' method='POST' action='down.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'></form  <img src='downvote.png'></button></form>         <span style='margin-left:30px;'>".$row3[5]." points</span></p></div>
  </div>
</div>
</td>
</tr>
</table>
  ";
}
elseif ($row1 AND $row2) {
  echo"
  <table>
  <tr style='text-align:center'>
  <td>
<div class='containi'>
<div class='content'>
  <div class='card l'> 
    <div class='topic'>".$row1[1]."   ->   ".$row1[2]."</div><br>
    <div class='link'><a href='".$row1[4]."' download><img src='pdf.png'></a>   ".$row1[4]."</div><br>
    <div class='desc'>".$row1[3]."</div><br>
    <div class='by'>Contributed by- ".$row1_[1]."(IIT ".$row1_[5].")</div>
    <div class='vote'><p><form method='post' accept-charset='utf-8' method='POST' action='up.php' style='display:inline;' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'><img src='upvote.png'></button></form>   <form method='post' style='display:inline;' accept-charset='utf-8' method='POST' action='down.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'></form  <img src='downvote.png'></button></form>        <span style='margin-left:30px;'>".$row1[5]." points</span></p></div>
  </div></td></div>
<td>
<div class='content'>
  <div class='card c' > 
    <div class='topic'>".$row2[1]."   ->   ".$row2[2]."</div><br>
    <div class='link'><a href='".$row2[4]."' download><img src='pdf.png'></a>   ".$row2[4]."</div><br>
    <div class='desc'>".$row2[3]."</div><br>
    <div class='by'>Contributed by- ".$row2_[1]."(IIT ".$row2_[5].")</div>
    <div class='vote'><p><form method='post' accept-charset='utf-8' method='POST' style='display:inline;' action='up.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'><img src='upvote.png'></button></form>   <form method='post' style='display:inline;' accept-charset='utf-8' method='POST' action='down.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'></form  <img src='downvote.png'></button></form>         <span style='margin-left:30px;'>".$row2[5]." points</span></p></div>
  </div>
</td>
</tr>
</table>
  </div>
  ";
}
elseif ($row1) {
  echo"
<div class='content'>
  <div class='card l' > 
    <div class='topic'>".$row1[1]."   ->   ".$row1[2]."</div><br>
    <div class='link'><a href='".$row1[4]."' download><img src='pdf.png'></a>   ".$row1[4]."</div><br>
    <div class='desc'>".$row1[3]."</div><br>
    <div class='by'>Contributed by- ".$row1_[1]."(IIT ".$row1_[5].")</div>
    <div class='vote'><p><form method='post' accept-charset='utf-8' method='POST' style='display:inline;' action='up.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'><img src='upvote.png'></button></form>   <form method='post' style='display:inline;' accept-charset='utf-8' method='POST' action='down.php' class='form' role='form'><button onclick='neela(this)' style='height:22px;width:22px;padding:1px; background-color:white;' type='submit' name='submit' class='form-control1 c'></form  <img src='downvote.png'></button></form>         <span style='margin-left:30px;'>".$row1[5]." points</span></p></div>
  </div>";
}

?>

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

function neela(x) {
  x.style.background-color="blue";
}
</script>


</body>	

</HTML>