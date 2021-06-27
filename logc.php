<?php include_once 'includes/dbh.inc.php';?>
<?php
require_once("db.php");
session_start();
    

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $job = $_POST['job'];
    $info = $_POST['info'];
    $star = $_POST['star'];
    if(empty($name) || empty($job) || empty($info) || empty($star) ){
        header("Location: ../logcontrol.php?a=not");
        exit(); 
    }else{
           
           $target_dir = "images/";
$terss = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
        
$target_file = $target_dir .time().".".$terss;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `chef` (`id`, `name`, `job`, `info`, `img`, `star`) VALUES (NULL, '$name', '$job', '$info', '$target_file', '$star')";
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