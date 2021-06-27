 <?php
require_once("db.php");
        include 'tepa.php';
        ?>
    <!-- END nav -->



<?php
if(@$_GET){
    if($_GET['info']){
        $res=$_GET['info'];
            $sol = "SELECT * FROM `food` WHERE `id` = '$res'";
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
    
    
    
}else{
    echo '
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Bog\'lanish</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Bosh menyu</a></span> <span>Bog\'lanish</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>';
}




?>




    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Ma'lumotlar uchun:</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Manzil:</span> Toshkent</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Telefon:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>E-mail:</span> <a href="mailto:info@yoursite.com">@gmail.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Ismingiz...">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="E-mail pochtangiz...">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Telefon raqamingiz...">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Xabaringiz..."></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Jo'natish" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    

    <?php
        include 'past.php';
        ?>