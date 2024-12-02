<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Online Store</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>Upto 50% Off</span>
            <h3>Latest Smartphones</h3>
            <a href="category.php?category=smartphone" class="btn">Shop Now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>Latest headsets</h3>
            <a href="shop.php" class="btn">Shop Now.</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Shop by Category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Laptop</h3>
   </a>

   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>Television</h3>
   </a>

   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>Camera</h3>
   </a>

   <a href="category.php?category=mouse" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>Mouse</h3>
   </a>

   <a href="category.php?category=fridge" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>Fridge</h3>
   </a>

   <a href="category.php?category=washing" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>Washing machine</h3>
   </a>

   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>Smartphone</h3>
   </a>

   <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>Watch</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">
   <h1 class="heading">Latest products</h1>

   <div class="swiper products-slider">
      <div class="swiper-wrapper">
         
         <div class="swiper-slide slide">
            <div class="product">
                <img src="images/home-img-1.png" alt="Redmi Note 12 Mobile">
                <div class="product-info">
                    <h3 class="name">Redmi Note 12 Mobile</h3>
                    <h3 class="price">$200</h3>
                    <input type="number" class="qty" value="1" min="1" class="quantity">
                    <button class="btn">Add To Cart</button>
                </div>
                <i class="fas fa-heart"></i>
                <i class="fas fa-eye"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="product">
                <img src="images/home-img-2.png" alt="Redmi Note 12 Mobile">
                <div class="product-info">
                    <h3 class="name"> Watch</h3>
                    <h3 class="price">$150</h3>
                    <input type="number" class="qty" value="1" min="1" class="quantity">
                    <button class="btn">Add To Cart</button>
                </div>
                <i class="fas fa-heart"></i>
                <i class="fas fa-eye"></i>
            </div>
         </div>
           
            <div class="swiper-slide slide">
            <div class="product">
                <img src="images/home-img-3.png" alt="Redmi Note 12 Mobile">
                <div class="product-info">
                    <h3 class="name">headset</h3>
                    <h3 class="price">$100</h3>
                    <input type="number" class="qty" value="1" min="1" class="quantity">
                    <button class="btn">Add To Cart</button>
                </div>
                <i class="fas fa-heart"></i>
                <i class="fas fa-eye"></i>
            </div>
     
         

      </div>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
   </div>
</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>