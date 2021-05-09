
<?php 

   include(ROOT_PATH . "/admin/app/database/db.php");
   include(ROOT_PATH . "/admin/app/helpers/ValidateService.php");
   include(ROOT_PATH . "/admin/app/helpers/middleware.php");

   $table = "services";

   $services =  selectAll($table);

   $errors = array();
   $id="";
   $name="";
   $body="";
   $published ="";


   if (isset($_GET["published"]) && isset($_GET["p_id"])) {
    adminOnly();

    $published =$_GET["published"];
    $p_id = $_GET["p_id"];
    $count = update($table, $p_id ,["published" => $published]);
    $_SESSION["message"] = "Service published state changed";
    $_SESSION["type"] = "success";
    header("location: " . BASE_URL . "/admin/services/index.php" );
    exit();

  }

   if(isset($_POST["add-service"])){

    adminOnly();

    $errors = ValidateService($_POST);

    if (!empty($_FILES["image"]["name"])) {
    $image_name = time() . "_" . $_FILES["image"]["name"];
    $destination = ROOT_PATH . "/admin/assets/images/" . $image_name;
    $fileType = pathinfo($destination,PATHINFO_EXTENSION);
    $result = move_uploaded_file($_FILES["image"]["tmp_name"], $destination);

    $allowTypes = array('png','jpeg','jpg');
        if(in_array($fileType, $allowTypes))
        {

    if ($result) 
      {
      $_POST["image"] = $image_name;
      } 

    else {
      array_push($errors,"failed to upload image");
      }

      }

        else
        {
          array_push($errors,"Only png, jpeg and jpg are allowed");
        }

  } 


  else {
    array_push($errors,"Image is required");
  }

      
     if (count($errors) === 0) {
     	unset($_POST["add-service"]);
      $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
      $_POST["body"]=htmlentities($_POST["body"]);
      $service_id = create($table, $_POST);
      $_SESSION['message'] = "Service added successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/services/index.php" );
      exit();
   }

     else {
     $name=$_POST["name"];
	   $body=$_POST["body"];
     $published = isset($_POST["published"]) ? 1 : 0;
     }

   }


   if (isset($_GET["id"])) {

      adminOnly();

      $id=$_GET["id"];
      $service = selectOne($table, ["id" => $_GET["id"]]);
      $name=$service["name"];
      $body=$service["body"];
      $published = $service["published"];
    }


   if (isset($_POST["update-service"])) {

     $errors = ValidateService($_POST);

     $id = $_POST["id"];


    if (!empty($_FILES["image"]["name"])) {
    $image_name = time() . "_" . $_FILES["image"]["name"];
    $destination = ROOT_PATH . "/admin/assets/images/" . $image_name;
    $fileType = pathinfo($destination,PATHINFO_EXTENSION);
    $result = move_uploaded_file($_FILES["image"]["tmp_name"], $destination);

    $allowTypes = array('png','jpeg','jpg');
        if(in_array($fileType, $allowTypes))
        {

    if ($result) 
      {
      $_POST["image"] = $image_name;
      } 

    else {
      array_push($errors,"failed to upload image");
      }

      }

        else
        {
          array_push($errors,"Only png, jpeg and jpg are allowed");
        }

  } 


  else {
    array_push($errors,"Image is required");
  }

     if (count($errors) === 0) {
      unset($_POST["update-service"], $_POST["id"]);
      $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
      $_POST["body"]=htmlentities($_POST["body"]);
      $count = update($table, $id, $_POST);
      $_SESSION['message'] = "Service updated successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/services/index.php" );
      exit();
   
   }

     else {
     $name=$_POST["name"];
     $body=$_POST["body"];
     $published = isset($_POST["published"]) ? 1 : 0;
          }
   }


   if (isset($_GET["delete_id"])) {
    
     adminOnly();

     $count = delete($table, $_GET["delete_id"]);
     $_SESSION['message'] = "Service deleted successfully";
     $_SESSION['type'] = "success";
     header("location: " . BASE_URL . "/admin/services/index.php" );
     exit();
   }

