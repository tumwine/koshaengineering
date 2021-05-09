<?php include("../path.php");?>
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
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/all.css">

     <!--custom style-->
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Admin Section - Manage Users</title>
</head>   

<body>
    
   <header>
        <div class="logo">
         <a href="../index.php">
            <h1 class="logo-text">
             <span>KOSHA</span>&nbsp;ADMIN</h1></a>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">

                <?php if(isset($_SESSION['id'])): ?>
            <li>
                <a href="#">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
                </a>    
                <ul>
                   <li><a href="<?php echo(BASE_URL . "/admin/logout.php") ?>" class="logout">Logout</a></li>
                </ul>
            </li>
               <?php endif; ?>
        </ul>
    </header>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">
  
  <?php include(ROOT_PATH . "/admin/app/include/adminsidebar.php");?>
  
  <div class="admin-content">
    <div class="content">
      <h2 class="page-tittle">Dashboard</h2>
       <?php include(ROOT_PATH . "/admin/app/include/message.php");?>
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