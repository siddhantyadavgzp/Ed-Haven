
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser()
{
    $fullname = $_POST['name'];
    $userName = $_POST['user'];
    $email    = $_POST['email'];
    $password = $_POST['pass'];
    $iit      = $_POST['iit'];
    $query    = "INSERT INTO websiteusers (fullname,userName,email,pass,iit) VALUES ('$fullname','$userName','$email','$password','$iit')";
    $data = mysql_query($query) or die(mysql_error());
    if ($data) {
        echo '<script type="text/javascript">
                    alert = "You have been resgistered";
                    window.location = "index.php";
      </script>';
    }
}
function SignUp()
{
    if (!empty($_POST['user'])) {
		$query = mysql_query("SELECT * FROM websiteusers WHERE email = '$_POST[email]'") or die(mysql_error());
    	if(!$row = mysql_fetch_array($query)){
	        $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]'") or die(mysql_error());
    	    if (!$row = mysql_fetch_array($query)) {
        	    newuser();
	        } 
    	    else {
        	    echo "SORRY...USERNAME ALREADY TAKEN...";
	        }
	    }
	    else {
	    	echo "EMAIL ALREADY REGISTERED";
	    }
    }
}
if (isset($_POST['submit'])) {
    SignUp();
}
?> 
