<?php include("../path.php");?>
<?php include(ROOT_PATH . "/admin/app/controllers/users.php");?>

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
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Login | KOSHA Enginering Consultants</title>
</head>   

<body>

  <div class="page-wrapper center-div">
     <div class="auth-content">
      <form action="login.php" method="post">
        <h2 class="form-tittle">KOSHA ADMIN LOGIN</h2>

         <?php include(ROOT_PATH . "/admin/app/helpers/formErrors.php");?>

        <div>
          <label>Username</label>
          <input type="text" name="username" class="text-input" value="<?php echo $username;?>">
        </div>
        <div>
          <label>Pasword</label>
          <input type="password" name="password" class="text-input" value="<?php echo $password;?>">
        </div>
        <div>
          <button type="submit" name="login-btn" class="btn btn-bg">Login</button>
        </div>
      </form>
     </div>
  </div>

</body>
</html> 
