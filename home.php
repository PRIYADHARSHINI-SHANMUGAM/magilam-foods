<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body  style = "background-image : url('images/image.png'); background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">

<?php include 'components/user_header.php'; ?>



<section class="hero" style= "background-image : url('images/image.png'); background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span><b>Order online</b></span>
               <h3 style="color:black;"><b>Delicious Foods</b></h3>
            </div>
            <div class="image">
               <img src="images/home-img-3.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Order online</span>
               <h3>Nenjukari Chops</h3>
            </div>
            <div class="image">
               <img src="images/nen.jpg" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Order online</span>
               <h3>Chicken Briyani</h3>
            </div>
            <div class="image">
               <img src="images/download.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category"  style = "background-color : white;">

   <h1 class="title">food category</h1>

   <div class="box-container">

      <a href="category.php?category=fast food" class="box">
         <img src="images/ch65.jpg" alt="">
         <h3>Starters</h3>
      </a>

      <a href="category.php?category=main dish" class="box">
         <img src="images/lolipop.jpg" alt="">
         <h3>Meat</h3>
      </a>

      <a href="category.php?category=drinks" class="box">
         <img src="images/chkop.jpg" alt="">
         <h3>Main Dish
         </h3>
      </a>

      <a href="category.php?category=desserts" class="box">
         <img src="images/brownie.jpg" alt="">
         <h3>Desserts</h3>
      </a>

   </div>

</section>










<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>