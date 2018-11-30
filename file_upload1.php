<?php
   session_start();

if (!file_exists("uploads/".$_SESSION['theuser'])) {
    mkdir("uploads/".$_SESSION['theuser'], 0777, true);
}
$target_dir = "uploads/".$_SESSION['theuser']."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size

if ($_FILES["fileToUpload"]["size"] > 104857600) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx"
&& $imageFileType != "ppt" && $imageFileType != "pptx" ) {
    echo "Sorry, only PDF, DOC, PPT files are allowed<br>.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
    echo '<script type="text/javascript">
                setTimeout(function(){ window.location = "index1.php"; }, 3000);
                   
    </script>';

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
$date=date('Y-m-d');
    $sub = $_POST['subject'];
    $st = $_POST['subtopic'];
    $desc    = $_POST['desc'];
$query="INSERT INTO filet (userID,subject,subtopic,description, filename, vote, kab) VALUES ('".$_SESSION['theuser']."','".$sub."','".$st."','".$desc."','".basename($_FILES["fileToUpload"]["name"])."',0, '".$date."')";
mysql_query($query);
echo '<script type="text/javascript">
                setTimeout(function(){ window.location = "index1.php"; }, 3000);
                   
    </script>';
    } else {
        echo "Sorry, there was an error uploading your file.";
        echo '<script type="text/javascript">
                setTimeout(function(){ window.location = "index1.php"; }, 3000);
                   
    </script>';
    }
}

?>