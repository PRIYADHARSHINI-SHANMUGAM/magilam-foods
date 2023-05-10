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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body style = "background-image : url('images/bg.png'); background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <!-- <p><a href="home.php">home</a> <span> / about</span></p> -->
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/ambiens1.jpg" alt="">
      </div>

      <div class="content">
         <h1 style="font-size:20px; color:grey;">TRADITIONS</h1>
         <br>
         <h3 style="font-size:40px;">OUR RESTAURANT</h3>
         <p style="color:black;"> Our restaurant is located in Erode, Tamil Nadu. We have our happy customers every day coming from various places and enjoying our meals. We belief in the quote that sincerity to our work brings success, so we provide our customer's their food with utmost sincerity. Also, we have a peaceful ambiance around us to cool our customers!!!</p>
         <a href="images/menu.jpg" class="btn">View Menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Our Services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/baspa.jpg" alt="">
         <h3>Desserts to Order</h3>
         <p style="color:black;">We serve coolest desserts for our cool customers!!We serve desserts based on the climate outside.</p>
      </div>

      <div class="box">
         <img src="images/delivery.jpg" alt="">
         <h3>Fast Serving Food</h3>
         <p style="color:black;">Our chef cooks the meals fastly and serve them with a happy smile to our customers!!</p>
         <br>
         <br>
         <br>
      </div>

      <div class="box">
         <img src="images/kothukari.jpg" alt="">
         <h3>Special dishes</h3>
         <p style="color:black;">We provide magilam special menu which are our chef's favourite special recipes on a regular basis.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/owner.jpg" alt="">
            <p style="color:black;"> This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.</p>
            <br>
            <br>
            <br>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Ajay</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ownerw.jpg" alt="">
            <p style="color:black;">Do yourself a favor and visit this lovely restaurant in Erode. The staff truly cares about your experience. The food is absolutely amazing – everything we tasted melted in other mouths. Absolutely the best meal we had while in Erode. Highly recommend!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Swetha</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p style="color:black;">Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.</p>
            <br>
            <br>
            <br>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shalini</h3>
         </div>



      </div>

      <!-- <div class="swiper-pagination"></div> -->

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
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