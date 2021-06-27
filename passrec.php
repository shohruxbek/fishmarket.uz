<!DOCTYPE html>
<html lang="uz">
  <head>
   <meta charset="utf=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin</title>
  
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/yondanch.css">
        <style>
        ul li{
            padding: 3px;
        }
    </style>
  </head>
  <body><section><container>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container"> <!--<div id="logo">
				        <a href="index.html"><img src="images/logo1.jpg" alt="" title="" /></a>
				      </div>-->
		     <a class="navbar-brand" href="index.php"><img height="37px" src="images/a.png" /><span style="color:#ff5001;font-family: sans-serif;">Fish Market</span></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menyu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Bosh menyu</a></li>
	          <li class="nav-item"><a href="logcontrol.php" class="nav-link  <?= $acti?>">Ma'lumotlar qo'shish</a></li>
	          <li class="nav-item  <?= $actk?>"><a href="logdel.php" class="nav-link">Ma'lumotlarni o'chirish</a></li>
	          <li class="nav-item  <?= $acto?>"><a href="logsignup.php" class="nav-link">Admin ro'yxatdan o'tkazish</a></li>
	          <li class="nav-item  <?= $actd?>"><a href="logchanpass.php" class="nav-link">Parolni o'zgartirish</a></li>
	          <li class="nav-item"><a href="includes/logout.inc.php" class="nav-link">Chiqish</a></li>
	        </ul>
	      </div>
		  </div>
      </nav></container></section>

    <section class="main-container">
    <div class="main-wrapper">
                <?php
    
                    echo '
                <div class="text-center d-flex justify-content-center align-items-center" style="margin-top: 10%">
    <form class="form-signin" action="includes/passrec.inc.php" method="POST">
      <img class="mb-4" src="images/logo.jpg"  alt="" width="72" height="72">
      
      <input type="text" name="uid" class="form-control" placeholder="Log-in/e-mail" required autofocus>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Tiklash</button>
    </form>
    </div>';
                ?>
             </div>
    </section>
<?php
include_once 'pastadmin.php';
?>
