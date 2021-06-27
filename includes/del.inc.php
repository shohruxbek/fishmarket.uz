<?php
session_start();

    include_once 'dbh.inc.php';
    require_once("..//db.php");
 if(isset($_SESSION['u_id'])){
if (@$_GET["delt"])
{
    $ret=@$_GET["delt"];
    $ter="SELECT * FROM `food` WHERE `food`.`id` = '$ret'";
            $redsf = mysqli_fetch_assoc(mysqli_query($db, $ter));

    $sql = "DELETE FROM `food` WHERE `food`.`id` = $ret";
$result = mysqli_query($db, $sql);
    if($result){
       
        
        
        $solt = "SELECT * FROM `food`";
            $reds = mysqli_query($db, $solt);
            $are = [];
        while($ree = mysqli_fetch_assoc($reds)){
             $are[]=$ree['tur'];
        }
        
        $terw=$redsf['tur'];
if(!in_array($terw,$are)){
    
    mysqli_query($db,"DELETE FROM `foodtype` WHERE `foodtype`.`tur` = '$terw'");
}
        
        
        
      header("Location: ../logdel.php?del=success");
    exit();  
    }else{
      header("Location: ../logdel.php?xatolik=true");
    exit();  
    }
    //"DELETE FROM `articles` WHERE `articles`.`id` = 7"
    
}elseif (@$_GET["dely"])
{
    $ret=@$_GET["dely"];
    $sql = "DELETE FROM `articles` WHERE `articles`.`id` = $ret";
$result = mysqli_query($db, $sql);
    if($result){
      header("Location: ../logdel.php?del=success");
    exit();  
    }else{
      header("Location: ../logdel.php?xatolik=true");
    exit();  
    }
    
}if (@$_GET["delo"])
{
    
    $ret=@$_GET["delo"];
    $sql = "DELETE FROM `chef` WHERE `chef`.`id` = $ret";
$result = mysqli_query($db, $sql);
    if($result){
      header("Location: ../logdel.php?del=success");
    exit();  
    }else{
      header("Location: ../logdel.php?xatolik=true");
    exit();  
    }
    
}else{
    header("Location: ../logdel.php?xatolik=true");
    exit();
    
    
}}else{
    header("Location: ../logdel.php?xatolik=true");
    exit();
    
    
}