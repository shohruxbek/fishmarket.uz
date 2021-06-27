       <?php
        include 'tepa.php';
        ?>
    <!-- END nav -->
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Baliqlar</span>
              <h1 class="mb-4">Masalan: Sazan...</h1>
              <p class="mb-4 mb-md-5">Baliqlarning ko'plab turlari mavjud.</p>
             
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_1.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Baliqlar...</span>
              <h1 class="mb-4">Masalan: </h1>
              <p class="mb-4 mb-md-5">O'zgacha dizayn, o'zgacha tam hamohangligida...</p>
             
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Fishmarket-</span>
              <h1 class="mb-4">Har bir mijozning ko'nglidan o'zgacha ta'assurotlar bilan...</h1>
              <p class="mb-4 mb-md-5">Ajablanarli darajada yoqimli his tuhfa etadi, yoqimli ishtaha...</p>
             
            </div>

          </div>
        </div>
      </div>
    </section>

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
            <h2 class="mb-4">Mijozlar e'tirofidagi taomlar</h2>
            <p>Ko'pchilik yurtdoshlarimiz ushbu taomlarni buyurtma qilishdi. </p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			
                
                         <?php
            $sol = "SELECT * FROM `food` WHERE `baho` >= 4 AND `status`=1";
            
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):?>
            <div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="contact.php?info=<?= $article['id'] ?>" class="img" style="background-image: url(<?= $article['img'] ?>);"></a>
    					<div class="text p-4">
    						<h3><?= $article['title'] ?></h3>
    						<p><?= $article['intro_text'] ?></p>
    						<p class="price"><span><?= $article['narx'] ?> so'm</span> <a href="contact.php?info=<?= $article['id'] ?>" class="ml-2 btn btn-white btn-outline-white">Buyurtma berish</a></p>
    					</div>
    				</div>
    			</div>
            <?php endforeach;?>
                
                
                
             
                
                
                
                
    			
    			

    			
    		</div>
    	</div>

    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Bizning xizmatlar</h2>
            <p>Barchasi sizning fikringizdan kelib chiqib taklif qilinadi.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Ko'plab taomlar</h3>
                <p>Didingizga va hohishingizga qarab taomlar xilma-xildir.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Tezkor yetkazib berish</h3>
                <p>Vaqtingizni tejash va xizmat sifatini oshirish maqsadimiz.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Mahsulotlar sifatliligi</h3>
                <p>Taomlarda foydalanilgan mahsulotlar sifatli va mikroelementlarga boy.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Barcha taomlar</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Ta'bingizga qarab kerakli taomni tanlashingiz mumkin.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		
                
                   <?php
            $sol = "SELECT * FROM `food` WHERE `status`=1";
            
            $red = mysqli_query($db, $sol);
            $articless = [];$articleq=0;
        while($rew = mysqli_fetch_assoc($red)){
             $articless[]=$rew;
             $articleq+=$rew['status'];
        }
         
            $ter=0;
            ?>
            <?php foreach($articless AS $article):
                $ter++;
                ?>
          <div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?= $article['img'] ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?= $article['title'] ?></span></h3>
	        				<span class="price"><?= $article['narx'] ?> so'm</span>
	        			</div>
	        			<div class="d-block">
	        				<p><?= $article['intro_text'] ?></p>
	        			</div>
        			</div>
        		</div>
                
                <?php 
                if($ter==ceil($articleq/2)){
                    echo '</div>
        	<div class="col-md-6">';
                }
                         
                ?>
                
                
            <?php endforeach;?>
               
        	
        		
        
        		
        	</div>
        </div>
    	</div>
    </section>
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<!--<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>-->
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<!--<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>-->
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
						<!--	<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>-->
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<!--<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>-->
						</a>
					</div>
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

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              
            <?php
            $sot = "SELECT * FROM `foodtype`";
            
            $ret = mysqli_query($db, $sot);
            $articl = [];
        while($rewt = mysqli_fetch_assoc($ret)){
             $articl[]=$rewt;
        }
            ?>
            <?php foreach($articl AS $article):?>
          <a class="nav-link <?= $article['act']?>" id="<?= $article['tur']?>-tab" data-toggle="pill" href="#<?= $article['tur']?>" role="tab" aria-controls="<?= $article['tur']?>" aria-selected="true"><?= $article['tur']?></a>
            <?php endforeach;?> 
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">         
            <?php foreach($articl AS $article):?> 
		              <div class="tab-pane fade show <?= $article['act']?>" id="<?= $article['tur']?>" role="tabpanel" aria-labelledby="<?= $article['tur']?>-tab">		              	
                          <div class="row">
                
        <?php              
    $a=$article['tur'];
            $sot1 = "SELECT * FROM `food` WHERE `tur` LIKE '$a' AND `status`=1";
            
            $ret1 = mysqli_query($db, $sot1);
            $articl1 = [];

        while($rewt1 = mysqli_fetch_assoc($ret1) and count($articl1)<4){
             $articl1[]=$rewt1;
        }?>
           
            <?php foreach($articl1 AS $article1):?>
                              
                            <div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?= $article1['img']?>);"></a>
		              				<div class="text">
		              					<h3><a href="contact.php?info=<?= $article1['id'] ?>"><?= $article1['title']?></a></h3>
		              					<p><?= $article1['intro_text']?></p>
		              					<p class="price"><span><?= $article1['narx']?> so'm</span></p>
		              					<p><a href="contact.php?info=<?= $article1['id'] ?>" class="btn btn-white btn-outline-white">Buyurtma berish</a></p>
		              				</div>
		              			</div>
		              		</div>
                              
            <?php endforeach;?>
		              	</div>
		              </div>
            <?php endforeach;?>               
                        
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>




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
                  <div><a href="#"><span class="icon-person"></span><?= $article['autorID'] ?></a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span><?= $article['view'] ?></a></div>
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

		
		<!--<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
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