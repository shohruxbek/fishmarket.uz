<?php
require_once("db.php");
include_once 'logheader.php';
 if(@$_GET["pass"]=="bum"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Maydonlarni to\'ldiring! ❌ </p></div>';
    }
if(@$_GET["pass"]=="error"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Avvalgi parol xato! ❌ </p></div>';
}

if(@$_GET["[pass]"]=="true"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>  Parol o\'zgartirildi!  </p></div>';
}

if(@$_GET["xatolik"]=="true"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Xatolik! ❌ </p></div>';}
if(@$_GET["pass"]=="false"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Yangi parolda xatolik! ❌ </p></div>';}
?>

    <section class="main-container">
    <div class="main-wrapper">
        
        <?php 
         if(isset($_SESSION['u_id'])){
            echo '<section><container><div class="text-center d-flex justify-content-center align-items-center">
            <form class="signup-form" action="includes/chanpass.inc.php" method="POST">
             <h1 class="h3 mb-3 font-weight-normal">Parolni almashtirish...</h1>
             
        <input class="form-control" type="password" name="bir" placeholder="Avvalgi parol">
        
        <input class="form-control" type="password" name="ikki" placeholder="Yangi parol">
        
        <input class="form-control" type="password" name="ikkitrue" placeholder="Qayta yangi parol">
        
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Yuborish</button>

        </form>
            
        
         </div>
        </container>
        </section>';
        }else{
            
        }?>
        
        
        </div>
    </section>
<?php
include_once 'pastadmin.php';
?>
