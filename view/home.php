<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  </head>
  <body>
   <?php
include"Header.php"?>
<style>
  .container-slide{
    width: 100%;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
 .swiper{
   width: 90%;
   height: fit-content;
 } 
 .swiper-slide img{
   width: 100%;
   height:350px;
 }
 .swiper .swiper-button-prev, .swiper .swiper-button-next{
   color:#fff;
   outline: none;
 }
 .swiper .swiper-pagination-bullet-active{
   background:#fff;
   
 }
</style>
 <div class="input-container">
 <div class="container-slide">
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"> <img class="slidepic" src="../img/home_pages.jpg" alt="slidepic" /></div>
    <div class="swiper-slide"> <img class="slidepic" src="../img/home_pages.jpg" alt="slidepic" /></div>
    <div class="swiper-slide"> <img class="back_pages" src="../img/back_pages.png" alt="back_pages" /> </div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"> 	
 </script>
 <script >
   const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 3000,
    disableOnInteraction:false,
  },
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
 </script>
  </body>
</html>