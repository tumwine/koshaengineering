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

    <title>Admin Section - Manage Services</title>
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
      <h2 class="page-tittle">Manage Services</h2>

       <?php include(ROOT_PATH . "/admin/app/include/message.php");?>

      <table>
        <head>
          <th>SN</th>
          <th>Name</th>
          <th colspan="2">Action</th>
        </head>
        <tbody>
          <?php foreach ($services as $key => $service): ?>

          <tr>
            <td><?php echo $key + 1 ?></td>
            <td><a><?php echo $service["name"] ?></a></td>
            <td><a href="edit.php?id=<?php echo $service["id"] ?>" class="edit">edit</a></td>
            <td><a href="index.php?delete_id=<?php echo $service["id"] ?>" class="delete">delete</a></td>
            <?php if ($service["published"]): ?>
              <td><a href="edit.php?published=0&p_id=<?php echo $service["id"] ?>" class="unpublish">unpublish</a></td>
            <?php else: ?>  
              <td><a href="edit.php?published=1&p_id=<?php echo $service["id"] ?>" class="publish">publish</a></td>
            <?php endif ?>
            </tr>
          </tr>

            <?php endforeach; ?>


        </tbody>
      </table>
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