<?php
require_once("db.php");
include_once 'logheader.php';
if(@$_GET["xatolik"]=="true"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="error"><p>  ⚠️ Xatolik yuz berdi! ❌ </p></div>';
    }
if(@$_GET["del"]=="success"){
      echo '<link rel="stylesheet" href="css/yondanch.css"><div class="notify top-left do-show" data-notification-status="success"><p>  Muvaffaqiyatli o\'chirildi </p></div>';
}
?>

    <section class="main-container">
    <div class="main-wrapper">
        
        <?php 
         if(isset($_SESSION['u_id'])){
            echo '<section><container><div class="text-center d-flex justify-content-center align-items-center">
            
            
        
          <div class="row mb-5"><h1 class="h3 mb-3 font-weight-normal">Taomlar:</h1></div>
        <div class="row mb-5">
        ';
             ?>
        <?php
            $sol = "SELECT * FROM `food`";
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):
                ?>
               <div class="block-21 mb-4 d-flex">
            <div class="card" style="width:14rem">
                <img class="card-img-top" src="<?= $article['img'] ?>" >
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title'] ?></h5>
                    <p class="card=text"><?= $article['intro_text'] ?></p>
                    <a href="includes/del.inc.php?delt=<?= $article['id'] ?>" class="btn btn-primary">o'chirish</a>
                </div>
            </div>
        </div>
            <?php endforeach;?><?php echo '</div>
        </container>
        </section>      
        
        
        
        
        <section><container><div class="text-center d-flex justify-content-center align-items-center">
          <h1 class="h3 mb-3 font-weight-normal center">Yangiliklar:</h1>
        <div class="row mb-5">
        ';
             ?>
        <?php
            $sol = "SELECT * FROM `articles`";
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):
                ?>
               <div class="block-21 mb-4 d-flex">
            <div class="card" style="width:14rem">
                <img class="card-img-top" src="<?= $article['img'] ?>" >
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title'] ?></h5>
                    <p class="card=text"><?= $article['intro_text'] ?></p>
                    <a href="includes/del.inc.php?dely=<?= $article['id'] ?>" class="btn btn-primary">o'chirish</a>
                </div>
            </div>
        </div>
            <?php endforeach;?><?php echo '</div>
        </container>
        </section>
        
        <section><container><div class="text-center d-flex justify-content-center align-items-center">
         <h1 class="h3 mb-3 font-weight-normal">Oshpazlar:</h1>
        <div class="row mb-5">
        ';
             ?>
        <?php
            $sol = "SELECT * FROM `chef`";
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):
                ?>
               <div class="block-21 mb-4 d-flex">
            <div class="card" style="width:14rem">
                <img class="card-img-top" src="<?= $article['img'] ?>" >
                <div class="card-body">
                    <h5 class="card-title"><?= $article['job'] ?></h5>
                    <p class="card=text"><?= $article['info'] ?></p>
                    <a href="includes/del.inc.php?delo=<?= $article['id'] ?>" class="btn btn-primary">o'chirish</a>
                </div>
            </div>
        </div>
            <?php endforeach;?><?php echo '</div>
        </container>
        </section>
        ';
        }else{
            
        }?>
        
        
        </div>
    </section>
<?php
include_once 'pastadmin.php';
?>