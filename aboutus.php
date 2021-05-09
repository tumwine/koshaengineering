<?php include("path.php");?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UT-F">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--font awesome-->
    <link rel="stylesheet" href="assets/css/fonts.css"> 
    <link rel="stylesheet" href="assets/css/all.css">

    <!--custom style-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>About us | KOSHA Enginering Consultants</title>
</head>   

<body>

<?php  include(ROOT_PATH . "/app/include/header.php");?>

<?php include(ROOT_PATH . "/app/include/message.php");?>

<div class="page-wrapper">
   <div class="intro"> 
  <div class="intro-content center-div">
    <div class="intro-tittle">
      <h1>ABOUT US</h1>
      <hr>
    </div>
  </div>
  <div class="page-location center-div">
    HOME&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US
  </div>
 </div>

  <div class="about-section">
   
   <div class="history flex-row">
     <div class="brief">
       <h2 style="">Our History</h2>
       <div class="info">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat.</p>

         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

       </div>

       <div class="core-values">
         <button class="btn-big">
           CORE VALUES
         </button>
       </div>
     </div>
     <div class="company-image">
        <img src="assets/images/p.png">
     </div>   
   </div>

   <div class="strategic-management flex-row">
    <div class="contact-us-details"> 
      <h3 style="">Contact Us</h3>
     <div class="contact-us">
      <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="contactname" value="" class="text-input comment-input" placeholder="Your name....">
            <input type="email" name="contactemail" value="" class="text-input comment-input" placeholder="Your email....">
            <textarea rows="4" name="contactmessage"  class="text-input comment-input" placeholder="Your message...."></textarea>
             <span class="commentError"></span>        
            <button type="submit" name="contactform">
            SEND
           </button>
     </form>
    </div>

    <div class="our-address">
       <h3>Our Address</h3>
        <address>
          <div class="address">
          <ul>
            <li>
            <i class="fa fa-map-marker-alt"></i>&nbsp;
            <a href="">Innovations House Plot 7B Acacia/Babiha Avenue, Kampala</a>
            </li>
            <li>
            <i class="fas fa-phone-alt"></i>&nbsp;
            +256 (0) 754 182852
            </li>
            <li>
            <i class="fas fa-phone-alt"></i>&nbsp;
            +256 (0) 754 182852
            </li>
            <li>
            <i class="fa fa-fax"></i>&nbsp;
            +256 (0) 754 182852
            </li>
          </ul>
        </div>
        </address>

     <div class="social-media">
      <div class="center-div">
       <ul class="flex-row">
         <li>
          <a href=""><i class="fab fa-facebook"></i></a>
         </li>
         <li>
          <a href=""><i class="fab fa-youtube"></i></a>
         </li>
         <li>
          <a href=""><i class="fab fa-twitter"></i></a>
         </li>
         <li>
          <a href=""><i class="fab fa-instagram"></i></a>
         </li>
       </ul>
      </div> 
     </div>
    </div>
   </div>

    <div class="what-we-stand-for"> 
       <div class="who">
         <h3>Who are we??</h3>
         <hr>
         <ol>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
         </ol>
       </div>

       <div class="vision-mission">
         <h3>Vision & mission</h3>
         <hr>
         <ol>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
         </ol>
       </div>

       <div class="core values">
         <h3>Core values</h3>
         <hr>
         <ol>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
         </ol>
       </div>

       <div class="objectives">
         <h3>Objectives</h3>
         <hr>
         <ol>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
           <li>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris.
           </li>
         </ol>
       </div>
    </div>
  </div>

   <div class="about-testimonials">
     <h2 class="aboutus-header">Client Testimonials</h2>
    <div class="testimonials flex-row">
     <div class="testimonial">
       <div class="brief">
        " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris. "
       </div>
        <div class="person">
          <div class="person-img">
            <img src="assets/images/p.png">
          </div>
          <div class="person-name">
            <h5 >TUMWINE IVAN</h5>
          </div>
       </div>
     </div>

     <div class="testimonial">
       <div class="brief">
        " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris. "
       </div>
        <div class="person">
          <div class="person-img">
            <img src="assets/images/p.png">
          </div>
          <div class="person-name">
            <h5 >TUMWINE IVAN</h5>
          </div>
       </div>
     </div>

     <div class="testimonial">
       <div class="brief">
        " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris. "
       </div>
        <div class="person">
          <div class="person-img">
            <img src="assets/images/p.png">
          </div>
          <div class="person-name">
            <h5 >TUMWINE IVAN</h5>
          </div>
       </div>
     </div>

    </div>
   </div>

  <div class="staff">
<h2 class="aboutus-header">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/p.png" alt="Jane">
      <div class="staff-member">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/p.png" alt="Jane">
      <div class="staff-member">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/p.png" alt="Jane">
      <div class="staff-member">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/p.png" alt="Jane">
      <div class="staff-member">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/p.png" alt="Jane">
      <div class="staff-member">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>

  <div class="our-values">
    <!--Core values-->    
<div class="who-we-are">
  <div class="content flex-row">
    <div class="value">
      <div class="value-icon">
        <div class="value-icon-box">
        <i class="fas fa-users"></i>
        </div>
      </div>
      <div class="value-details">
         <div class="value-details-tittle">
           <h4>Core services</h4>
         </div>
        <div class="value-details-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>  
   </div> 

    <div class="value">
      <div class="value-icon">
        <div class="value-icon-box">
        <i class="fas fa-users"></i>
        </div>
      </div>
      <div class="value-details">
         <div class="value-details-tittle">
           <h4>Our projects</h4>
         </div>
        <div class="value-details-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>  
   </div>

    <div class="value">
      <div class="value-icon">
        <div class="value-icon-box">
        <i class="fas fa-users"></i>
        </div>
      </div>
      <div class="value-details">
         <div class="value-details-tittle">
           <h4>Our dimensions</h4>
         </div>
        <div class="value-details-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>  
   </div>
  </div>    
</div>
   </div>
   <!--End Core values--> 
</div>
</div>


 <!--Footer-->
   
   <?php  include(ROOT_PATH . "/app/include/footer.php");?>

 <!-- End footer-->



   <!--jquery library-->
   <script src="assets/js/jquery.js"></script>

    <!--slick javascript-->
   <script src="assets/js/slick.min.js"></script>

   <!--custom javascript-->
   <script src="assets/js/main.js"></script>

</body>
</html> 
