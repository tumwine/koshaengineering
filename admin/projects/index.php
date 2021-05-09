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

    <title>Admin Section - Manage Projects</title>
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
      <h2 class="page-tittle">Manage Projects</h2>

        <?php include(ROOT_PATH . "/admin/app/include/message.php");?>

       <table>
        <head>
          <th>SN</th>
          <th>Tittle</th>
          <th>Client</th>
          <th colspan="3">Action</th>
        </head>
        <tbody>

          <?php foreach ($projects as $key => $project): ?>

          <tr>
            <td><?php echo $key + 1 ?></td>
            <td><a><?php echo $project["tittle"] ?></a></td>
            <td><a><?php echo $project["client"] ?></a></td>
            <td><a href="edit.php?id=<?php echo $project["id"] ?>" class="edit">edit</a></td>
            <td><a href="index.php?delete_id=<?php echo $project["id"] ?>" class="delete">delete</a></td>
            <?php if ($project["published"]): ?>
              <td><a href="edit.php?published=0&p_id=<?php echo $project["id"] ?>" class="unpublish">unpublish</a></td>
            <?php else: ?>  
              <td><a href="edit.php?published=1&p_id=<?php echo $project["id"] ?>" class="publish">publish</a></td>
            <?php endif ?>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


    
   <!--jquery library-->
   <script src="../assets/js/jquery.js"></script>

   <!--custom javascript-->
   <script src="../assets/js/admin.js"></script>

</body>
</html> 