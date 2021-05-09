<?php include("path.php");?>
<?php include(ROOT_PATH . "/admin/app/database/db.php");  ?>

<?php 

 $project = selectOne( "projects", ["id" => $_GET["id"]]);

 ?>

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

    <title><?php echo $project["tittle"];?> | KOSHA Enginering Consultants</title>
</head>   

<body>

  <?php  include(ROOT_PATH . "/app/include/header.php");?>

<div class="page-wrapper">

 <div class="intro"> 
  <div class="page-location center-div">
    HOME&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;PROJECTS<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;DESCRIPTION
  </div>
 </div> 

  <div class="project-info flex-row">
    <div class="main-bar">
      <div class="project-single">
        <div class="project-image">
          <img src="<?php echo BASE_URL . "/admin/assets/images/" . $project["image"];?>"  style="width:100%; height:500px;">
        </div>
        <div class="project-description" style="font-size:20px;">
          <table>
        <tr>
          <td class="icon">
          <i class="fab fa-youtube"></i>
          </td>
          <td>Client:&nbsp;&nbsp;&nbsp;<?php echo $project["client"]?></td>
        </tr>
        <tr>
          <td class="icon">
          <i class="fab fa-youtube"></i>
          </td>
          <td>Year:&nbsp;&nbsp;&nbsp;<?php echo $project["duration"]?></td>
        </tr>
        <tr>
          <td class="icon">
          <i class="fab fa-youtube"></i>
          </td>
          <td>Location:&nbsp;&nbsp;&nbsp;<?php echo $project["location"]?></td>
        </tr>
        <tr>
          <td class="icon">
          <i class="fab fa-youtube"></i>
          </td>
          <td>Value:&nbsp;&nbsp;&nbsp;<?php echo number_format($project["value"])?>&nbsp;/=</td>
        </tr>
        </table>
        </div>

        <div class="project-head">
          <h3 style="text-align:center; text-transform:uppercase;"><?php echo $project["tittle"];?></h3>
          <hr style="height:5px; border:none; background-color:#45B8FF;">
        </div>
        <div class="project-details" style="font-size:20px; text-align:justify;">
           <?php echo html_entity_decode($project["body"]); ?>
        </div>
      </div>
    
     <div id="comments" class="comments"  style="font-size:20px;">

  <h3 style="margin-top:50px;"> 2 Comments</h3>

  <div class="user-comment" style="margin-top:25px;">
    <table  style="margin:5px 0px 5px 0px">
    <tr>
      <td><h4>Tumwine Ivnan&nbsp;&nbsp; - &nbsp;&nbsp;</h4></td>
      <td><i class="fas fa-calendar"></i> March 15, 2021</td>
    </tr>
    </table>
    <div class="comment-body" style="margin-bottom:10px; text-align:justify; padding-left:10px;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>

    <div class="user-comment" style="margin-top:25px;">
    <table  style="margin:5px 0px 5px 0px">
    <tr>
      <td><h4>Tumwine Ivnan&nbsp;&nbsp; - &nbsp;&nbsp;</h4></td>
      <td><i class="fas fa-calendar"></i> March 15, 2021</td>
    </tr>
    </table>
    <div class="comment-body" style="margin-bottom:10px; text-align:justify; padding-left:10px;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>

  <hr>

  <h3 style="margin:20px 0px;">LEAVE A REPLY</h3>


  <form action="#comments" method="post" enctype="multipart/form-data">
            <input type="text" name="name" value="" class="text-input comment-input" placeholder="Your name....">
             <input type="email" name="email" value="" class="text-input comment-input" placeholder="Your email adrress....">
            <textarea rows="4" name="message"  class="text-input comment-input" placeholder="Your message...."></textarea>
            <button type="submit" name="add-comment" class="btn btn-big comment-btn">
            Comment
           </button>
    </form>

  </div> 


    </div>
    <div class="sidebar contact-us-details">
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
