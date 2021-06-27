<?php include_once 'includes/dbh.inc.php';
require_once("db.php");
session_start();
    

if(isset($_POST['submit'])){
    
    $tur = $_POST['tur'];
    $title = $_POST['title'];
    $intro_text = $_POST['intro_text'];
    $full_text = $_POST['full_text'];
    $narx = $_POST['narx'];
    $baho =  $_POST['baho'];
    $status =  $_POST['status'];
    if(empty($tur) || empty($title) || empty($intro_text) || empty($full_text) || empty($narx) || empty($baho) || empty($status)){
        header("Location: ../logcontrol.php?a=not");
        exit(); 
    }else{
           $target_dir = "images/";
       $terss = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
        
$target_file = $target_dir .time().".".$terss;// basename($_FILES["fileToUpload"]["name"]);
        
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //$target_file=str_replace(" ","%20",$target_file);
        $sql = "INSERT INTO `food` (`id`, `tur`, `title`, `intro_text`, `full_text`, `narx`, `img`, `baho`, `status`, `act`) VALUES (NULL, '$tur', '$title', '$intro_text', '$full_text', '$narx', '$target_file', '$baho', '$status', '')";
            mysqli_query($db,$sql);
        
        
      $solt = "SELECT * FROM `foodtype`";
            $reds = mysqli_query($db, $solt);
            $are = [];
        while($ree = mysqli_fetch_assoc($reds)){
             $are[]=$ree['tur'];
        }
if(!in_array($tur,$are)){
    if(count($are)==0){
        
    mysqli_query($db,"INSERT INTO `foodtype` (`id`, `tur`, `act`) VALUES (NULL, '$tur', 'active')");
    }else{
     
    mysqli_query($db,"INSERT INTO `foodtype` (`id`, `tur`, `act`) VALUES (NULL, '$tur', '')");   
    }
}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
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