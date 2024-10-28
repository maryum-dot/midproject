<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="robot.png" style="width: 500px; height: 500px; margin-left: -9px;">
      </div>

      <div class="content">
      
         <h3>why choose us?</h3>
         
        <p><b><i>We understand that each student learns differently,so our courses are designed to be flexible,covering a range of topics with materials that cater to diverse learning styles from in-depth course descriptions and expert instructor guidance</b></p>
         <a href="courses.php" class="inline-btn">our courses</i></a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+20</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+6</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>I appreciate how BinaryBrains offers a variety of resources, from lectures to hands-on projects. The quizzes after each module really test my understanding and help reinforce my learning</p>
         <div class="user">
            <img src="eli.jpeg" alt="">
            <div>
               <h3>Elizabeth</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The course materials on BinaryBrains are incredibly well-structured! The interactive coding challenges helped me grasp complex concepts much faster. I love how I can learn at my own pace!</p>
         <div class="user">
            <img src="man.jpeg" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>BinaryBrains is fantastic! The instructors are knowledgeable and always available for support. I've completed several courses here, and I feel much more confident in my coding abilities.</p>
         <div class="user">
            <img src="man1.jpeg" alt="">
            <div>
               <h3>James</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>BinaryBrains has transformed my approach to learning. The coding bootcamps are intense but rewarding, pushing me to expand my skill set rapidly. I can't wait to take more advanced courses!</p>
         <div class="user">
            <img src="girl1.jpeg" alt="">
            <div>
               <h3>Chris W</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>BinaryBrains focus on real-world applications makes learning fun! The capstone projects allow me to apply what I've learned in practical scenarios.I highly recomended.</p>
         <div class="user">
            <img src="man2.jpeg" alt="">
            <div>
               <h3>David L</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>BinaryBrains is fantastic! The instructors are knowledgeable and always available for support. I've completed several courses here, and I feel much more confident in my coding abilities.</p>
         <div class="user">
            <img src="girl2.jpeg" alt="">
            <div>
               <h3>Emily R</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>