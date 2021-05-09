<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/admin/app/controllers/projects.php");

adminOnly();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UT-F">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!--font awesome-->
    <link rel="stylesheet" href="../assets/css/fonts.css">  
    <link rel="stylesheet" href="../assets/css/all.css">

     <!--custom style-->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin Section - Add Project</title>
</head>   

<body>

  <?php include(ROOT_PATH . "/admin/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">
  
  <?php include(ROOT_PATH . "/admin/app/include/adminsidebar.php");?>

  <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big">Add Project</a>
      <a href="index.php" class="btn btn-big">Manage Projects</a>
    </div>

    <div class="content">
      <h2 class="page-tittle">Add Project</h2>

       <?php include(ROOT_PATH . "/admin/app/helpers/formErrors.php");?>

       <form action="create.php" method="post" enctype="multipart/form-data">

        <div>
          <label>Tittle</label>
          <input type="text" name="tittle" value="<?php echo $tittle;?>" class="text-input">
        </div>

        <div>
          <label>Client</label>
          <input type="text" name="client" value="<?php echo $client;?>" class="text-input">
        </div>

        <div>
           <label>Image</label>
           <input type="file" name="image" class="text-input">
         </div>

         <div>
          <label>Location</label>
          <input type="text" name="location" value="<?php echo $location;?>" class="text-input">
        </div>

        <div>
          <label>Duration</label>
          <input type="text" name="duration" value="<?php echo $duration;?>" class="text-input">
        </div>

        <div>
          <label>Value</label>
          <input type="number" name="value" value="<?php echo $value;?>" class="text-input">
        </div>

        <div>
          <label>Description</label>
          <textarea name="body" id="body"><?php echo $body;?></textarea>
        </div>
         
        <div>
          <label>Service</label>
        <select name="service_id" class="text-input">       
          <option value=""></option>
         <?php foreach ($services as $key => $service): ?>
            <?php if (!empty($service_id) && $service_id == $service["id"]): ?>
            <option selected value="<?php echo $service["id"] ?>"><?php echo $service["name"] ?></option>   
            <?php else: ?>
            <option value="<?php echo $service["id"] ?>"><?php echo $service["name"] ?></option>
            <?php endif; ?>
         <?php endforeach; ?>
        </select>
        </div>

        <div>
          <?php if (empty($published)): ?>
          <label>
            <input type="checkbox" name="published">
            Publish
          </label>
            
          <?php else: ?>
            <label>
            <input type="checkbox" name="published" checked>
            Publish
          </label>
            
          <?php endif ?>
        </div>

        <div>
          <button type="submit" name="add-project" class="btn btn-big">Add Project</button>
        </div>
        
      </form>

    </div>
  </div>
</div>
    
   <!--jquery library-->
   <script src="../assets/js/jquery.js"></script>

   <!--ckeditor-->
   <script src="../assets/js/ckeditor.js"></script>

   <!--custom javascript-->
   <script src="../assets/js/admin.js"></script>

</body>
</html> 