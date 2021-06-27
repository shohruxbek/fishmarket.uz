<?php include_once 'includes/dbh.inc.php';?>
<?php
require_once("db.php");
session_start();
    

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $intro_text = $_POST['intro_text'];
    $full_text = $_POST['full_text'];
    $date = $_POST['date'];
    $autorid = $_POST['autorid'];
    $wiev =  $_POST['wiev'];
    if(empty($title) || empty($intro_text) || empty($full_text) || empty($autorid) || empty($wiev)){
        header("Location: ../logcontrol.php?a=not");
        exit(); 
    }else{
           
           $target_dir = "images/";
$terss = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
        
$target_file = $target_dir .time().".".$terss;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `articles` (`id`, `title`, `img`, `intro_text`, `full_text`, `date`, `autorID`, `view`) VALUES (NULL, '$title', '$target_file', '$intro_text', '$full_text', '$date', '$autorid', '$wiev')";
            mysqli_query($db,$sql);
             header("Location: ../logcontrol.php?a=yes");
        exit();
    } else {
         header("Location: ../logcontrol.php?a=not");
        exit();
    }
                 
            
            
            }
    }



else{
      header("Location: ../logcontrol.php?a=not");
        exit(); 
}

?>