<?php
    session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());

        if(isset($_REQUEST['digs'])){
            $errorMessage = "";
            $digs=$_POST['digs'];

        if ($errorMessage != "" ) {
            echo "<p class='message'>" .$errorMessage. "</p>" ;
        }else{
            $insqDbtb="UPDATE `practice`.`coffee`
            SET digs = digs + '$digs' 
            WHERE name = 'Africa'";
            mysql_query($link,$insqDbtb) or die(mysql_error($link));
        }
    }

?>