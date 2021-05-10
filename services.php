<?php include("path.php");?>
<?php include(ROOT_PATH . "/admin/app/database/db.php");  ?>
<?php  

   $services = getPublishedServices();

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

    <title>Services | KOSHA Enginering Consultants</title>
</head>   

<body>

  <?php  include(ROOT_PATH . "/app/include/header.php");?>

<div class="page-wrapper">
  
 <div class="intro"> 
  <div class="intro-content center-div">
    <div class="intro-tittle">
      <h1>SERVICES</h1>
      <hr>
    </div>
  </div>
  <div class="page-location center-div">
    HOME&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;SERVICES
  </div>
 </div> 

 <div class="services-content">
  <div class="brief-info">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="services flex-row">

  <?php foreach ($services as $service): ?>
     <div class="service">
      <div class="service-img">
      <img src="<?php echo BASE_URL . "/admin/assets/images/" . $service["image"];?> ">
      </div>
      <div class="brief-info">
        <h4><?php echo $service["name"]; ?></h4>
        <div class="service-info">
          <?php echo html_entity_decode(substr($service["body"], 0, 200) . "..."); ?> 
        </div>
      </div>
      <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  <?php endforeach; ?>

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
