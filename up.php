<?php

session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

if (isset($_POST['submit'])) {
	$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
    if($_SESSION['up']==0)
    {
    	$query1 = mysql_query("UPDATE filet SET vote = 1 WHERE filename='Presentation3.pptx';"  );
    	$_SESSION['up']=$_SESSION['up']+1;
    }
     else {
     	$query1 = mysql_query("UPDATE filet SET vote = 1 WHERE filename='imagetopdf.pdf';"  );
     }         
    echo "<script type='text/javascript'>
                 window.location = 'new.php';
                   
    </script>";    
}
?> 

