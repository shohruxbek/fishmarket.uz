<?php
require_once("db.php");

$page = str_replace("/","",$_SERVER['SCRIPT_NAME']);
$page = str_replace(".php","",$page);
$sql = "SELECT * FROM pages WHERE page='$page'";
$res = mysqli_query($db,$sql) or die ("sahifani tanlashda xatolik");
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="uz">
  <head>
   <meta charset="<?= $row['charset']?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?= $row['title']?></title>
     <meta name="description" CONTENT="<?= $row['meta_d']?>">
    <meta name="keywords" content="<?= $row['meta_k']?>">
    
    
  <meta name="robots" content="index,follow,noodp">
<meta name="googlebot" content="index,follow">
    <meta name="google" content="nositelinkssearchbox">
      <meta name="google" content="notranslate">
    <meta name="generator" content="kredit">
    <meta name="subject" content="<?= $row['meta_d']?>">
    
    
    <!-- open graph Facebook-->
  <meta content="Bank-siz kredit">
  <meta content="http://milliykredit.uz">
 
  <!-- если сайт многоязычный -->
  <!-- <meta property="og:locale" content="ru_RU"> -->
  <meta content="http://fishmarket.uz/index.html">
 
  <!-- не меньше 600х315, не более 8Мб -->
  <meta content="images/logo.jpg">
  <meta content="<?= $row['meta_d']?>">
  <meta content="356210948427784">
 
    
    
      <meta name="twitter:card" content="images/logo.jpg">
  <meta name="twitter:site" content="@fishmarket">
  <meta name="twitter:title" content="Mazzali taomlar">
  <meta name="twitter:description" content="<?= $row['meta_d']?>">
  <meta name="twitter:creator" content="@fishmarket">
   <meta name="twitter:image" content="images/logo.jpg">
    
    
    <link rel="apple-touch-icon" sizes="57x57" href="images/flat/a57.png" data-mce-href="images/flat/a57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/flat/a60.png" data-mce-href="images/flat/a60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/flat/a72.png" data-mce-href="images/flat/a72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/flat/a76.png" data-mce-href="images/flat/a76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/flat/a114.png" data-mce-href="images/flat/a114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/flat/a120.png" data-mce-href="images/flat/a120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/flat/a144.png" data-mce-href="images/flat/a144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/flat/a152.png" data-mce-href="images/flat/a152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/flat/a180.png" data-mce-href="images/flat/a180.png">
    
    
  <link rel="icon" type="image/png" href="images/flat/a32.png" sizes="32x32" data-mce-href="images/flat/a32.png">
    
  <link rel="icon" type="image/png" href="images/flat/a192.png" sizes="192x192" data-mce-href="images/flat/a192.png">
    
  <link rel="icon" type="image/png" href="images/flat/a96.png" sizes="96x96" data-mce-href="images/flat/a96.png">
    
  <link rel="icon" type="image/png" href="images/flat/a16.png" sizes="16x16" data-mce-href="images/flat/a16.png">
    
  <meta name="msapplication-TileColor" content="#ffeb06">
    
  <meta name="msapplication-TileImage" content="images/flat/a144.png">
    
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
	          <li class="nav-item <?= $acti ?>"><a href="index.php" class="nav-link">Bosh menyu</a></li>
	          <li class="nav-item <?= $acto ?>"><a href="menu.php" class="nav-link">Taomlar</a></li>
	          <li class="nav-item <?= $acty ?>"><a href="blog.php" class="nav-link">Yangiliklar</a></li>
	          <li class="nav-item <?= $actbo ?>"><a href="about.php" class="nav-link">Biz haqimizda</a></li>
	          <li class="nav-item <?= $actb ?>"><a href="contact.php" class="nav-link">Bog'lanish</a></li>
	          <li class="nav-item <?= $actv ?>"><a href="logcontrol.php" class="nav-link">Kirish</a></li>
	        </ul>
	      </div>
		  </div>
      </nav></container></section>