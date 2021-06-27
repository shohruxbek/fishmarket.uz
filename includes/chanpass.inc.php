<?php

if (isset($_POST['submit']))
{
    require_once("..//db.php");
    
    $bir = mysqli_real_escape_string($db, $_POST['bir']);
    $ikki = mysqli_real_escape_string($db, $_POST['ikki']);
    $ikkitrue = mysqli_real_escape_string($db, $_POST['ikkitrue']);
    
    
    //xatolik
    if(empty($bir) || empty($ikki) || empty($ikkitrue)){
        header("Location: ../logchanpass.php?pass=bum");
        exit();
        
    }
    else{
        
        $sql = "SELECT * FROM users";
$result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);
        
            if($row = mysqli_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($bir, $row['user_pwd']);
                
                
                
                if($hashedPwdCheck == false){
                  header("Location: ../logchanpass.php?pass=error");
    exit();  
                }elseif($hashedPwdCheck == true){
                    
                  if($ikki==$ikkitrue){
                      $newpass= password_hash($ikkitrue, PASSWORD_DEFAULT);
                    $ret=$row['user_id'];
                     $srt = "UPDATE `users` SET `user_pwd` = '$newpass' WHERE `users`.`user_id` = '$ret'";
                      mysqli_query($db,$srt);
                     header("Location: ../logcontrol.php?pass=true");
    exit(); 
                  }
                    else{
                         header("Location: ../logchanpass.php?pass=false");
    exit();  
                    }
                }
            }
            }
        }
    
else{
    header("Location: ../logchanpass.php?xatolik=true");
    exit();
    
    
}