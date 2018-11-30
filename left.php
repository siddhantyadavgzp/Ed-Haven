<?php

session_start();

$_SESSION['trending']=$_SESSION['trending']-1;



if (isset($_POST['submit'])) {
    echo "<script type='text/javascript'>
                 window.location = 'new.php';
                   
    </script>";
}
?> 

