<?php
include_once 'logheader.php';
if(@$_GET["xatolik"]=="true"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Xatolik! ❌ </p></div>';
    }
if(@$_GET["signup"]=="empty"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Ma\'lumotlar kiritilmadi! ❌ </p></div>';
}

if(@$_GET["signup"]=="ismda_xatolik"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Ism yoki Familiyada xatolik! ❌ </p></div>';
}

if(@$_GET["signup"]=="email"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Emailda xatolik! ❌ </p></div>';}

    if(@$_GET["signup"]=="usertaken"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ LOG IN avval mavjud! ❌ </p></div>';
    }
?>

    <section class="main-container">
    <div class="main-wrapper">
        <?php 
         if(isset($_SESSION['u_id'])){
            echo '<section><container><div class="text-center justify-content-center align-items-center" style="padding:10px"><form class="signup-form" 
            
            action="includes/signup.inc.php" method="POST">
            
             <h1 class="h3 mb-3 font-weight-normal">Ro\'yxatga olish...</h1>
             
        <input class="form-control" type="text" name="first" placeholder="Ism">
        
        <input class="form-control" type="text" name="last" placeholder="Familiya">
        <input class="form-control" type="text" name="email" placeholder="E-mail">
        <input class="form-control" type="text" name="uid" placeholder="Log in">
        <input class="form-control" type="text" name="pwd" placeholder="Parol">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Yuborish</button>

        </form></div></container></section>
        
        ';
        }else{
            
        }?>
        
        
        </div>
    </section>
<?php
include_once 'pastadmin.php';
?>
