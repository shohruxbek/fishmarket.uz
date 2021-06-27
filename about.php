 <?php
        include 'tepa.php';
        ?>
    <!-- END nav -->



<?php
if(@$_GET){
    if($_GET['info']){
        $res=$_GET['info'];
            $sol = "SELECT * FROM `chef` WHERE `id` = '$res'";
            $red = mysqli_fetch_assoc(mysqli_query($db, $sol));
            
      echo '
    <section class="ftco-section ftco-degree-bg text-center justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="ftco-animate" style="padding: 0% 10% 0% 10%;">
          
            <h2 class="mb-3 mt-5">'.$red['name'].'</h2>
            <p>'.$red['job'].'.</p>
           
                            '; for($i=0;$i<$red['star'];$i++){
                               echo  '<i class="icon-star"></i>';
                            }
        echo '
            <p>
              <img src="'.$red['img'].'" alt="" class="img-fluid">
            </p>
            <p>'.$red['info'].'</p>
            
          </div>

        </div>
      </div>
    </section>';
    }
    
    
    
}else{
    
  echo '<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Biz haqimizda...</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Bosh menyu</a></span> <span>Biz haqimizda...</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>';  
}




?>

    
    

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+998995948233</h3>
	    						<p>Qo'shimcha ma'lumot uchun</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Toshkent</h3>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Ish kunlari; Dushanba-Shanba</h3>
	    						<p>10:00 - 22:00</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-telegram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

   <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Xush kelibsiz! <span class="flaticon-fish">"Fish market"</span>ga</h2>
        </div>
        <div>
  				<p>Mijozlar ko'nglidan xushtamligi va o'zgacha did bilan tayyorlanishi tufayli fish market xursandchiligingiz hamrohidir. Kelgusidagi yutuqlarimizning asosiy sababchisi sizlar hisoblanasiz. Biz sizga sifatli taomlarimizdan yoqimli nonushta vaqtini yaratib beramiz va ishonchingizni oqaymiz. Shuncha yillik tajribamizdan kelib chiqib sizga va yaqinlaringizga quyidagi taomlarni taklif qilamiz. Sizga yoqadi degan umiddamiz. Yoqimli ishtaha...</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Oshpazlar</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Ko'p yillik tajribasi bor oshpazlarimiz...</p>
          </div>
        </div>
        <div class="row">
            
            <?php
            $sol = "SELECT * FROM chef";
            
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):?>
          <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?= $article['img']?>);"></div>
      				<div class="info text-center">
      					<h3><a href="about.php?info=<?= $article['id'] ?>"><?= $article['name']?></a></h3>
      					<span class="position"><?= $article['job']?></span>
      					<div class="text">
	        				<p><?= $article['info']?></p>
	        			</div>
                        <span class="position"><?= $article['star']?></span>
                        <div class="product-rating">
										<?php  
                            for($i=0;$i<$article['star'];$i++){
                               echo  '<i class="icon-star"></i>';
                            }
                            ?></div>
      				</div>
        		</div>
        	</div>
            <?php endforeach;?>
            
            
            
        	
        	
        	
        	
        </div>
      </div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="1000">0</strong>
		              	<span>ta taom</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="1000">0</strong>
		              	<span>ta yutuq</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="1000">0</strong>
		              	<span>ta mijoz</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="1000">0</strong>
		              	<span>ta malakali oshpaz</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

		<!--
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>-->

   <?php
        include 'past.php';
        ?>