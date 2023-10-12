<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SIGNET ARCHITECT</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="C:\Users\BAPS\OneDrive\Desktop\signet design logo.jpg" class="logo"><span>SIGNET ARCHITECT</span></a>

   <nav class="navbar">

     <a href="#home">HOME</a>
      <a href="#about">ABOUT US</a>
      <a href="SERVICES.HTML">SERVICES</a>
      <a href="project.html">PROJECTS</a>
      <a href="#contact">CONTACT</a>
      <a href="#blogs">BLOGS</a>
   </nav>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="info-btn" class="fas fa-info-circle"></div>
      <div id="search-btn" class="fas fa-search"></div>
      <div id="login-btn" class="fas fa-user"></div>
   </div>

   <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
   </form>

   <form action="file:///C:/Users/BAPS/Downloads/project/construction/index.html#home" class="login-form">
      <h3>login form</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="forget password.html">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
      <p>don't have an account <a href="create account.html">create one!</a></p>
   </form>

</header>

<div class="contact-info">

   <div id="close-contact-info" class="fas fa-times"></div>

   <div class="info">
      <i class="fas fa-phone"></i>
      <h3>phone number</h3>
      <p>+(91) 9825865653</p>
      <p>+(91) 8320347378</p>
   </div>

   <div class="info">
      <i class="fas fa-envelope"></i>
      <h3>email address</h3>
      <p>rajusignet@gmail.com</p>
      <p>devbhuva1206@gmail.com</p>
   </div>

   <div class="info">
      <i class="fas fa-map-marker-alt"></i>
      <h3>office address</h3>
      <p>4 Shreeji chamber, kanakaiya plot, jetpur:360-370</p>
   </div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

</div>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
            <div class="content">
               <h3>we provide best service</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <h3>making dream come to life</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <h3>from concept to creation</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div>
         </section>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading"> about us </h1>

   <div class="row">

      <div class="video">
         <video src="images/about-vid.mp4" loop muted autoplay></video>
      </div>

      <div class="content">
         <h3>We will provide you the best work which you dreamt for!</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas et vero mollitia nemo corporis consequatur aspernatur distinctio dignissimos velit nam.</p>
         <a href="aboutus.html" class="btn">read more</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <h3>10+</h3>
         <p>years of experience</p>
      </div>

      <div class="box">
         <h3>1500+</h3>
         <p>project completed</p>
      </div>

      <div class="box">
         <h3>790+</h3>
         <p>satiesfied clients</p>
      </div>

      <div class="box">
         <h3>450+</h3>
         <p>active workers</p>
      </div>

   </div>

</section>

<!-- about section ends -->



<!-- projects section starts  -->

<section class="projects" id="projects">

   <h1 class="heading"> our projects </h1>

   <div class="box-container">

      <a href="images/project-1.jpg" class="box">
         <div class="image">
            <img src="images/project-1.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream home</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-2.jpg" class="box">
         <div class="image">
            <img src="images/project-2.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream home</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-3.jpg" class="box">
         <div class="image">
            <img src="images/project-3.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>building</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-4.jpg" class="box">
         <div class="image">
            <img src="images/project-4.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3></h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-5.jpg" class="box">
         <div class="image">
            <img src="images/project-5.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>Multistore appartments</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-6.jpg" class="box">
         <div class="image">
            <img src="images/project-6.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>Steal and cement</h3>
               <p>partnership with best company</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>
      
   </div>

</section>

<!-- projects section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-1.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-2.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-3.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-4.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-5.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-6.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->



<!-- contact section starts  -->


<section class="contact" id="contact">

   <h1 class="heading"> contact us </h1>

  
   <div class="row">
      <iframe class="map" src="https://www.google.com/maps/place/SIGNET+ARCHITECT/@21.7556941,70.6212502,19z/data=!3m1!4b1!4m17!1m10!4m9!1m3!2m2!1d74.4803555!2d22.2843561!1m3!2m2!1d70.936563!2d21.9687523!3e0!3m5!1s0x395817600304b7b9:0xbd09c33e52f75e4c!8m2!3d21.7556929!4d70.6218939!16s%2Fg%2F11g6pg3hz5?entry=ttu" allowfullscreen="" loading="lazy"></iframe>
  <form id="contact-form" action="send_email.php" method="POST">
    <h3>Get in touch</h3>
    <input type="text" name="name" placeholder="Name" class="box">
    <input type="email" name="email" placeholder="Email" class="box">
    <input type="tel" name="phone" placeholder="Phone" class="box">
    <textarea name="message" placeholder="Message" class="box" cols="30" rows="10"></textarea>
    <input type="submit" value="Send Message" class="btn">
  </form>
</div>



</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

   <h1 class="heading"> our blogs </h1>

   <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>The Importance of Site Evaluation and Soil Testing </h3>
               <p>Soil testing is a critical aspect of construction projects.</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-4.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-5.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>
         
         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-6.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>
      
      </div>
      
   </div>
</section>

<!-- blogs section ends -->

<!-- client logo section starts -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide"><img src="images/client-logo-1.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-2.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-3.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-4.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-5.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-6.png" alt=""></div>
      </div>
   </div>
</section>

<!-- client logo section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="links">
      <a class="btn"  href="file:///C:/Users/BAPS/Downloads/project/construction/index.html#home">HOME</a>
      <a class="btn"  href="file:///C:/Users/BAPS/Downloads/project/construction/index.html#about">ABOUT</a>
      <a class="btn"  href="SERVICES.HTML">SERVICES</a>
      <a class="btn"  href="project.html">PROJECTS</a>
      <a class="btn"  href="file:///C:/Users/BAPS/Downloads/project/construction/index.html#contact">CONTACT</a>
      <a class="btn"  href="file:///C:/Users/BAPS/Downloads/project/construction/index.html#contact">BLOGS</a>
   </div>

   <div class="credit"> created by <span>DEV BHUVA</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

<script>

lightGallery(document.querySelector('.projects .box-container'));

</script>

</body>
</html>