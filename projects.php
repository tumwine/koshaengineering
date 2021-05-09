<?php include("path.php");?>
<?php include(ROOT_PATH . "/admin/app/database/db.php");  ?>
<?php  

  $services = getDistinctServices();

  if (isset($_GET["s_id"])) 
   {
     $projects = getPublishedProjectsByServiceId($_GET["s_id"]);
   }

   else {
     $projects = getPublishedProjects();
   }

   

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

    <title>Projects | KOSHA Enginering Consultants</title>
</head>   

<body>

  <?php  include(ROOT_PATH . "/app/include/header.php");?>

<div class="page-wrapper">
  
 <div class="intro"> 
  <div class="intro-content center-div">
    <div class="intro-tittle">
      <h1>PROJECTS</h1>
      <hr>
    </div>
  </div>
  <div class="page-location center-div">
    HOME&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;PROJECTS
  </div>
 </div>

 <div class="project-content">

  <a name="projects"></a>

  <div class="project-tabs">
   <ul class="flex-row">
     <li><a href="projects.php#projects" class="active">SHOW ALL</a></li>

     <?php foreach ($services as  $service): ?>
     <li>
      <a href="<?php echo BASE_URL . "/projects.php?s_id=" . $service["service_id"]."#projects"?>"><?php echo $service["name"];?></a>
     </li>
     <?php endforeach; ?>

   </ul>
  </div> 

  <div class="projects flex-row">

    <?php foreach ($projects as  $project): ?>
    <div class="project">
      <div class="project-tittle">
        <h4>
        <a href="project-info.php?id=<?php echo $project["id"]?>"><?php echo $project["tittle"]; ?></a> 
        </h4>
      </div>
       <div class="project-date">
        <?php echo $project["created_at"]; ?>
      </div>
    </div>
     <?php endforeach; ?>

  </div>

 <div class="pagination-tab flex-row">
  <div class="pagination-tabs">
      <a href="#"  class="active">1</a>
      <a href="#">2</a>
      <a href="#">3</a> 
  </div> 
  <div class="pagination-tabs">
      <a>NEXT</a>
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
