<?php
include 'tepa.php';
?>
    <!-- END nav -->



<?php
if(@$_GET){
    if($_GET['info']){
        $res=$_GET['info'];
            $sol = "SELECT * FROM `articles` WHERE `id` = '$res'";
            $red = mysqli_fetch_assoc(mysqli_query($db, $sol));
            
      echo '
    <section class="ftco-section ftco-degree-bg text-center justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="ftco-animate" style="padding: 0% 10% 0% 10%;">
          
            <h2 class="mb-3 mt-5">'.$red['title'].'</h2>
            <p>'.$red['intro_text'].'.</p>
            <p>
              <img src="'.$red['img'].'" alt="" class="img-fluid">
            </p>
            <p>'.$red['full_text'].'</p>
            
          </div>

        </div>
      </div>
    </section>';
    }
    
    
    
}
else{
  echo ' <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Yangiliklar</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Bosh menyu</a></span> <span>Yangiliklar</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>';  
}



?>







   
    

     <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Yangiliklar</h2>
            <p>Oshxonamiz yangiliklari bilan tanishing...</p>
          </div>
        </div>
        <div class="row d-flex">
               <?php
            $sol = "SELECT * FROM articles ORDER BY date DESC";
            
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog.php?info=<?= $article['id'] ?>" class="block-20" style="background-image: url('<?= $article['img'] ?>');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#"><?= $article['date'] ?></a></div>
                  <div><a href="#"><?= $article['autorID'] ?></a></div>
                  <div><a href="blog.php?info=<?= $article['id'] ?>" class="meta-chat"><span class="icon-chat"></span><?= $article['view'] ?></a></div>
                </div>
                <h3 class="heading mt-2"><a href="blog.php?info=<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
                <p><?= $article['intro_text'] ?></p>
              </div>
            </div>
          </div>
            <?php endforeach;?>
        </div>
      </div>
    </section>

    <?php
        include 'past.php';
        ?>