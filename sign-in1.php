
<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
/*function NewUser()
{
    $fullname = $_POST['name'];
    $userName = $_POST['user'];
    $email    = $_POST['email'];
    $password = $_POST['pass'];
    $query    = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
    $data = mysql_query($query) or die(mysql_error());
    if ($data) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }
}*/
function SignIn()
{
    if (!empty($_POST['user'])) {
        $query = mysql_query("SELECT * FROM websiteusers WHERE (userName = '$_POST[user]' AND pass = '$_POST[pass]') OR (email = '$_POST[user]' AND pass = '$_POST[pass]')"  );
        if($row = mysql_fetch_array($query)){ 
            $_SESSION['theuser'] = $row[0];
            //$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]'");
            echo "fuck off ".$row[1];
            echo '<script type="text/javascript">
                   window.location = "new.php"
    </script>';
        }
        else {
            echo "Incorrect username password combination";
        }
    }

}
if (isset($_POST['submit'])) {
    SignIn();
}
?> 
