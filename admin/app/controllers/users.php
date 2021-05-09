
<?php 

   include(ROOT_PATH . "/admin/app/database/db.php");
   include(ROOT_PATH . "/admin/app/helpers/validateUser.php");
   include(ROOT_PATH . "/admin/app/helpers/middleware.php");

   $table = "users";

   $users =  selectAll($table);

   $errors = array();
   $id="";
   $username="";
   $email="";
   $password="";
   $passwordConf="";
   $role="";

   
   function loginUser($user){
      $_SESSION['id'] = $user["id"];
      $_SESSION['username'] = $user["username"];
      $_SESSION['role'] = $user["role"];
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/dashboard.php" );
      exit();
   }


   if(isset($_POST["register-btn"])){

      adminOnly();

      $errors = ValidateUser($_POST);

     if (count($errors) === 0) {
     	unset($_POST["passwordConf"], $_POST["register-btn"]);
      $_POST["password"]=password_hash($_POST["password"], PASSWORD_DEFAULT);
      $user_id = create($table, $_POST);
      $_SESSION['message'] = "User added successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/users/index.php" );
      exit();
   }

     else {
     $username=$_POST["username"];
	   $email=$_POST["email"];
	   $password=$_POST["password"];
	   $passwordConf=$_POST["passwordConf"];
     $role=$_POST["role"];
     }

   }


   if (isset($_GET["id"])) {
      adminOnly();

      $id=$_GET["id"];
      $user = selectOne($table, ["id" => $_GET["id"]]);
      $username = $user["username"];
      $role = $user["role"];
      $email = $user["email"];
   }


   if (isset($_POST["update-user"])) {

     adminOnly();

     $errors = ValidateUser($_POST);

     $id = $_POST["id"];

     if (count($errors) === 0) {
      unset($_POST["passwordConf"], $_POST["update-user"], $_POST["id"]);
      $_POST["password"]=password_hash($_POST["password"], PASSWORD_DEFAULT);
      $count = update($table, $id, $_POST);
      $_SESSION['message'] = "User updated successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/users/index.php" );
      exit();
   
   }

     else {
     $username=$_POST["username"];
     $email=$_POST["email"];
     $password=$_POST["password"];
     $passwordConf=$_POST["passwordConf"];
     $role=$_POST["role"];
     }
   }

   if(isset($_POST["login-btn"])){

     $errors = ValidateLogin($_POST);
                                                                      
     if (count($errors) === 0){

     $user = selectOne($table, ["username" => $_POST["username"]]);

     if ($user && password_verify($_POST["password"], $user["password"])) {
      loginUser($user);

     } 

     else {
       array_push($errors, "wrong credentials");
     }
      
     }

     $username=$_POST["username"];
     $password=$_POST["password"];
   }

   if (isset($_GET["delete_id"])) {

     adminOnly();
     
     $count = delete($table, $_GET["delete_id"]);
     $_SESSION['message'] = "User deleted successfully";
     $_SESSION['type'] = "success";
     header("location: " . BASE_URL . "/admin/users/index.php" );
     exit();
   }

?>  
