<?php

session_start();

$_SESSION['mechanics']=$_SESSION['mechanics']-1;



if (isset($_POST['submit'])) {
    echo "<script type='text/javascript'>
                 window.location = 'mechanics.php';
                   
    </script>";
}
?> 

