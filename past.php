<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Bog'lanish uchun:</h2>
              <p>O'zingizni qiziqtirgan savollarga javobni va eng yangi yangiliklarni ijtimoiy tarmoqlarimizdan bilib oling.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-telegram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Yangiliklardan:</h2>
                
               
                
                <?php
            $sol = "SELECT * FROM articles ORDER BY date DESC";
            
            $red = mysqli_query($db, $sol);
            $articless = [];
        while($rew = mysqli_fetch_assoc($red) and count($articless)<2){
             $articless[]=$rew;
        }
            ?>
            <?php foreach($articless AS $article):?>
         <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?= $article['img'] ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="blog.php?info=<?= $article['id'] ?>"><?= $article['intro_text'] ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?= $article['date'] ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?= $article['autorID'] ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> <?= $article['view'] ?></a></div>
                  </div>
                </div>
              </div>
                
            <?php endforeach;?>
                
            </div>
          </div>
       
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Ma'lumotlar uchun:</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Toshkent</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+998995848233</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p style="font-size:10px"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  &copy;<script>document.write(new Date().getFullYear());</script> Fishmarket <!-- <i class="icon-heart" aria-hidden="true"></i>--> by <a href="https://shohruxbek.uz" target="_blank">&amp; CREATIVE DREAM INC</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5001"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>