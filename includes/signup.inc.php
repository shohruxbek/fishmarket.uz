<?php

if (isset($_POST['submit']))
{
  
    
    include_once 'dbh.inc.php';
    require_once("..//db.php");
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    
    //xatolik
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header("Location: ../logsignup.php?signup=empty");
        exit();
        
    }
    else{
        if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
           header("Location: ../logsignup.php?signup=ismda_xatolik");
        exit();  
        }
        else{
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../logsignup.php?signup=email");
        exit();   
           } 
            else{
              $sql = "SELECT * FROM users WHERE user_uid='$uid'";  
               $result = mysqli_query($db, $sql); 
               $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0 ){
                header("Location: ../logsignup.php?signup=usertaken");
        exit(); 
            }else{
              $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);  
            $sql = "INSERT users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
            mysqli_query($db,$sql);
             header("Location: ../logcontrol.php?signup=true");
        exit();    
            }
            }
        }
    }
}else{
    header("Location: ../logsignup.php?xatolik=true");
    exit();
    
    
}