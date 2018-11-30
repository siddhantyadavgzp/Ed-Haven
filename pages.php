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

  <a href="index1.php" style="text-align:center;margin-top:60px;" class="w3-bar-item w3-button"><h3>Upload Material</h3></a>
  <a href="#" style="text-align:center;" class="w3-bar-item w3-button"><h3>My Posts</h3></a>
  <a href="index.php" style="text-align:center;" class="w3-bar-item w3-button" class="log"><h3>Log out</h3></a>
</div>
<img src="flogo.png" style="position:absolute; top:90%; left:90%; margin-top:-100px; margin-left:-100px;" height="200px" width="200px">
<div id="main">
<div class="topnav">
<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <a href="">Contact</a>
  <a href="">Home</a>
  <a href="" class="active">Search</a>
  
  <select name="subtopic" class = "form-control">
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

</HTML>