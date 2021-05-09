<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/admin/app/controllers/services.php");

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

    <title>Admin Section - Edit Service</title>
</head>   

<body>
    
    <?php include(ROOT_PATH . "/admin/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">
  
  <?php include(ROOT_PATH . "/admin/app/include/adminsidebar.php");?>
  
  <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big">Add Service</a>
      <a href="index.php" class="btn btn-big">Manage Services</a>
    </div>

    <div class="content">
      <h2 class="page-tittle">Edit Service</h2>

    <?php include(ROOT_PATH . "/admin/app/helpers/formErrors.php");?>

      <form action="edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <div>
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $name;?>"  class="text-input">
        </div>

        <div>
           <label>Image</label>
           <input type="file" name="image" class="text-input">
         </div>

        <div>
          <label>Body</label>
          <textarea name="body" id="body"><?php echo $body;?></textarea>
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
          <button type="submit" name="update-service" class="btn btn-big">Edit Service</button>
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