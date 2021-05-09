<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/admin/app/controllers/users.php");

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

    <title>Admin Section - Edit User</title>
</head>   

<body>
    
    <?php include(ROOT_PATH . "/admin/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">
  
  <?php include(ROOT_PATH . "/admin/app/include/adminsidebar.php");?>
  
  <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big">Add User</a>
      <a href="index.php" class="btn btn-big">Manage Users</a>
    </div>

    <div class="content">
      <h2 class="page-tittle">Edit User</h2>

      <?php include(ROOT_PATH . "/admin/app/helpers/formErrors.php");?>

      <form action="edit.php" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <div>
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
        </div>
        <div>
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $email;?>" class="text-input">
        </div>
        <div>
          <label>Pasword</label>
          <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
        </div>
        <div>
          <label>Pasword Confirmation</label>
          <input type="password" name="passwordConf" value="<?php echo $passwordConf;?>" class="text-input">
        </div>

        <div>
        <label>Privilages</label><br>

             <?php if (isset($role) && $role == "admin" ) : ?>

              <label>
              <input type="radio" id="admin" name="role" value="admin" checked>
              Admin
              </label>
             
             <?php else: ?> 
               <label>
              <input type="radio" id="admin" name="role" value="admin">
              Admin
              </label>

            <?php endif; ?>

           <?php if (isset($role) && $role == "page-manager" ) : ?>

              <label>
              <input type="radio" id="page-manager" name="role" value="page-manager" checked>
              Page-manager
              </label>
             
             <?php else: ?> 
               <label>
              <input type="radio" id="page-manager" name="role" value="page-manager">
              Page-manager
              </label>

            <?php endif; ?>
        
        <div>
          <button type="submit" name="update-service" class="btn btn-big">Edit User</button>
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