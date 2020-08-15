<?php

// if($_POST["submit"]) {
//     $recipient="karanjot10@yahoo.com";
//     $subject=$_POST["subject"];
//     $sender=$_POST["sender"];
//     $senderEmail=$_POST["senderEmail"];
//     $message=$_POST["message"];

//     $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

//     mail($recipient, $subject, $mailBody, "From: $sender ($senderEmail)");
//     // $thankYou="Thank you! Your message has been sent.";
// }

//?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DesignedByHarry - Custom Furniture</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/allert.css">
    <script src="js/allert.js"></script> 
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>     
    <link rel="stylesheet" href="allert.css" />
  </head>


  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<!-- <a target="_blank" class="hide-s" href="../template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a> -->
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-1">
            <a href="index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="img/logo-dark.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="img/logo-dark.png" alt="">
            </a>
          </div>
          <div class="s-12 l-11">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="index.html">Home</a></li>
                <li><a href="inventory.html">Inventory</a></li>
                <li><a href="about-us.html">About Us</a></li>             
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Contact Us</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Designed By Harry</p>
            </div>  
          </header>
          <section class="full-width background-dark">
            <div class="s-12 m-12 l-6">
              <!-- Change the background image -->  
              <div style="background-image: url(img/img-contact.jpg);" class="contact-image" ></div>
            </div>
            <div class="s-12 m-12 l-6 text-center">
              <div class="padding-2x">
                <i class="icon-sli-location-pin text-white text-size-30 center margin-top-80"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Company Location</h2>                
                <p>Etobicoke, Ontario</p>
                <i class="icon-sli-envelope text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">E-mail</h2>                
                <a class="text-primary-hover" href="mailto:DesignedbyHarryFurniture@gmail.com">DesignedbyHarryFurniture@gmail.com</a><br>
                <i class="icon-sli-phone text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Phone Number</h2>                
                <a class="text-primary-hover" href="tel:416-562-2080">416-562-2080</a><br>
              </div>
            </div>
          </section>
<!--           
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Contact Us</h4>
              <form name="contactForm" class="customform" method="post" action="contact.php">
                <div class="s-12">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="senderEmail" class="senderEmail" placeholder="Your e-mail" title="Your e-mail" type="text">
                      <p class="email-error form-error">Please enter your e-mail.</p>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="sender" class="sender" placeholder="Your name" title="Your name" type="text">
                      <p class="name-error form-error">Please enter your name.</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text">
                  <p class="subject-error form-error">Please enter the subject.</p>
                </div>
                <div class="s-12">
                  <textarea name="message" class="message" placeholder="Your message" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" name="submit" id="submit" type="submit">Submit Button</button>
                </div>
           -->
              </form>
            </div>           
          </section> 
        </article>
      </main>
      
      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="tel:416-562-2080"><i class="icon-sli-phone text-size-30"></i> <span class="text-strong text-white hide-s hide-m">PHONE</span></a>
          <a class="margin-right-10" target="_blank" href="mailto:DesignedbyHarryFurniture@gmail.com"><i class="icon-mail text-size-30"></i> <span class="text-strong text-white hide-s hide-m">E-MAIL</span></a>
        </div>

        
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">©️ 2020 Designed By Harry</p>
          </div>
        </section>
      </footer>
    </div>
    </script>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>