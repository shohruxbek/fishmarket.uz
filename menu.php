 <?php
        include 'tepa.php';
        ?>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Taomlar</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Bosh menyu</a></span> <span>Taomlar</span></p>
            </div>

          </div>
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
            $sol = "SELECT * FROM `food` WHERE `baho` >= 4";
            
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
    						<p><?= $article['intro_text'] ?> </p>
    						<p class="price"><span><?= $article['narx'] ?> so'm</span> <a href="contact.php?info=<?= $article['id'] ?>" class="ml-2 btn btn-white btn-outline-white">Buyurtma berish</a></p>
    					</div>
    				</div>
    			</div>
            <?php endforeach;?>
        
    		</div>
    	</div>

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
            $sot1 = "SELECT * FROM `food` WHERE `tur` LIKE '$a'";
            
            $ret1 = mysqli_query($db, $sot1);
            $articl1 = [];

        while($rewt1 = mysqli_fetch_assoc($ret1)){
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

   <?php
        include 'past.php';
        ?>