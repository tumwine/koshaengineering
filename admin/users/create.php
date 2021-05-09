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

    <title>Admin Section - Add User</title>
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
      <h2 class="page-tittle">Add User</h2>

     <?php include(ROOT_PATH . "/admin/app/helpers/formErrors.php");?>

      <form action="create.php" method="post">
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
        <label>
        <input type="radio" id="admin" name="role" value="admin">
        Admin
        </label>  
        <label>
        <input type="radio" id="page-manager" name="role" value="page-manager" checked>
         Page-manager
        </label>
        </div>
        
        <div>
          <button type="submit" name="register-btn" class="btn btn-big">Add User</button>
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