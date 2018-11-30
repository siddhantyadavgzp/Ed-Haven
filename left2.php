<?php

session_start();

$_SESSION['mp']=$_SESSION['mp']-1;



if (isset($_POST['submit'])) {
    echo "<script type='text/javascript'>
                 window.location = 'myposts.php';
                   
    </script>";
}
?> 

