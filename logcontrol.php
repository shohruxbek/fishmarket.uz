<?php
require_once("db.php");
include_once 'logheader.php';
if(@$_GET["a"]=="not"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Ma\'lumotlarda Xatolik! ❌ </p></div>';
    }
if(@$_GET["a"]=="yes"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>  Muvaffaqiyatli kiritildi </p></div>';
}if(@$_GET["pass"]=="true"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>   Parol o\'zgartirildi!  </p></div>';
    }
if(@$_GET["signup"]=="true"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>   Yangi admin tayinlandi!  </p></div>';
    }
if(@$_GET["pass"]=="rect"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>Parolingiz e-mail pochtangizga jo\'natildi!  </p></div>';
    }
if(@$_GET["pass"]=="note"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>Serverda xatolik tufayli jo\'natilmadi!  </p></div>';
    }
if(@$_GET["login"]=="error"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ login yoki parol xato! ❌ </p></div>';
    }
?>

    <section class="main-container">
    <div class="main-wrapper">
        
        <?php 
         if(isset($_SESSION['u_id'])){
            echo '<section><container><div class="text-center d-flex justify-content-center align-items-center">
            
            <form class="signup-form" action="loga.php" method="POST"  enctype="multipart/form-data">
             <h1 class="h3 mb-3 font-weight-normal">Taom qo\'shish</h1>
             
               <div class="custom-file">
  <input name="fileToUpload" type="file" class="custom-file-input">
  <label class="custom-file-label" for="fileToUpload">Rasm tanlash</label>
</div>
        <input class="form-control" type="text" name="tur" placeholder="tur (text)">
        <input class="form-control" type="text" name="title" placeholder="title (text)">
      <textarea class="form-control"  name="intro_text" rows="2"  placeholder="intro text (text)"></textarea>
     <textarea class="form-control"  name="full_text" rows="3"  placeholder="full text (text)"></textarea>
        <input class="form-control" type="text" name="narx" placeholder="narx (raqam 0-~)">
        <input class="form-control" type="text" name="baho" placeholder="baho (raqam 1-5)">
        <input class="form-control" type="text" name="status" placeholder="status (raqam 0-1)">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Yuborish</button>

        </form></div>
        </container>
        </section>      
        
        
        
        
        <section><container><hr /><div class="text-center d-flex justify-content-center align-items-center" >
            
            <form class="signup-form" action="logb.php" method="POST"  enctype="multipart/form-data">
             <h1 class="h3 mb-3 font-weight-normal">Yangilik qo\'shish</h1>
             
               <div class="custom-file">
  <input name="fileToUpload" type="file" class="custom-file-input">
  <label class="custom-file-label" for="fileToUpload">Rasm tanlash</label>
</div>
        <input class="form-control" type="text" name="title" placeholder="title (text)">
        
      <textarea class="form-control"  name="intro_text" rows="2"  placeholder="intro text (text)"></textarea>
     <textarea class="form-control"  name="full_text" rows="3" placeholder="full text (text)"></textarea>
        <input class="form-control date" type="date" name="date" placeholder="date (date)">
        <input class="form-control" type="text" name="autorid" placeholder="autorid (text)">
        <input class="form-control" type="text" name="wiev" placeholder="wiev (raqam 0-~)">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Yuborish</button>

        </form></div></container></section>
        
        
        <section><container><hr /><div class="text-center d-flex justify-content-center align-items-center">
            
            <form class="signup-form" action="logc.php" method="POST"  enctype="multipart/form-data">
             <h1 class="h3 mb-3 font-weight-normal">Oshpaz qo\'shish</h1>
             
               <div class="custom-file">
  <input name="fileToUpload" type="file" class="custom-file-input">
  <label class="custom-file-label" for="fileToUpload">Rasm tanlash</label>
</div>
        <input class="form-control" type="text" name="name" placeholder="name (text)">
       <input class="form-control" type="text" name="job" placeholder="job (text)"> 
      <textarea class="form-control" name="info" rows="2"  placeholder="info (text)"></textarea>
        <input class="form-control date" type="text" name="star" placeholder="star (raqam 1-5)">
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