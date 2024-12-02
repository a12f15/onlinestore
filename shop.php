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
   <title>Shop</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
include 'components/connect.php';



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
   <title>Shop</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">

   <h1 class="heading">Latest Products.</h1>

   <div class="box-container">
      <!-- Product 1 -->
      <div class="box">
         <img src="images/home-img-1.png" alt="Redmi Note 12 Mobile">
         <div class="product-info">
            <h3>Redmi Note 12 Mobile</h3>
            <h3 class="price">$200</h3>
            <input type="number" class="qty" value="1" min="1" class="quantity">
            <button class="btn">Add To Cart</button>
         </div>
         <i class="fas fa-heart"></i>
         <i class="fas fa-eye"></i>
      </div>

      <!-- Product 2 -->
      <div class="box">
         <img src="images/home-img-2.png" alt="Smart Watch">
         <div class="product-info">
            <h3>Smart Watch</h3>
            <h3 class="price">$150</h3>
            <input type="number" class="qty" value="1" min="1" class="quantity">
            <button class="btn">Add To Cart</button>
         </div>
         <i class="fas fa-heart"></i>
         <i class="fas fa-eye"></i>
      </div>

      <!-- Product 3 -->
      <div class="box">
         <img src="images/home-img-3.png" alt="Headset">
         <div class="product-info">
            <h3>Headset</h3>
            <h3 class="price">$100</h3>
            <input type="number" class="qty" value="1" min="1" class="quantity">
            <button class="btn">Add To Cart</button>
         </div>
         <i class="fas fa-heart"></i>
         <i class="fas fa-eye"></i>
      </div>

   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
