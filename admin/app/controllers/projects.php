
<?php 

   include(ROOT_PATH . "/admin/app/database/db.php");
   include(ROOT_PATH . "/admin/app/helpers/ValidateProject.php");
   include(ROOT_PATH . "/admin/app/helpers/middleware.php");

   $services = selectAll("services");

   $table = "projects";

   $projects =  selectAll($table);

   $errors = array();
   $id="";
   $tittle="";
   $client="";
   $location="";
   $body="";
   $duration="";
   $value="";
   $service_id="";
   $published ="";


   if (isset($_GET["published"]) && isset($_GET["p_id"])) {

    adminOnly();

    $published =$_GET["published"];
    $p_id = $_GET["p_id"];
    $count = update($table, $p_id ,["published" => $published]);
    $_SESSION["message"] = "Projects published state changed";
    $_SESSION["type"] = "success";
    header("location: " . BASE_URL . "/admin/projects/index.php" );
    exit();

  }

   if(isset($_POST["add-project"])){

    adminOnly();

    $errors = ValidateProject($_POST);

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
     	unset($_POST["add-project"]);
      $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
      $_POST["body"]=htmlentities($_POST["body"]);
      $projects_id = create($table, $_POST);
      $_SESSION['message'] = "Projects added successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/projects/index.php" );
      exit();
   }

     else {
       $tittle=$_POST["tittle"];
       $client=$_POST["client"];
       $location=$_POST["location"];
       $body=$_POST["body"];
       $duration=$_POST["duration"];
       $value=$_POST["value"];
       $service_id=$_POST["service_id"];     
       $published = isset($_POST["published"]) ? 1 : 0;
     }

   }


   if (isset($_GET["id"])) {

      adminOnly();

      $id=$_GET["id"];
      $project = selectOne($table, ["id" => $_GET["id"]]);
      $tittle=$project["tittle"];
      $client=$project["client"];
      $location=$project["location"];
      $body=$project["body"];
      $duration=$project["duration"];
      $value=$project["value"];
      $service_id=$project["service_id"]; 
      $published = $project["published"];
    }


   if (isset($_POST["update-project"])) {

     adminOnly();

     $errors = ValidateProject($_POST);

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
      unset($_POST["update-project"], $_POST["id"]);
      $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
      $_POST["body"]=htmlentities($_POST["body"]);
      $count = update($table, $id, $_POST);
      $_SESSION['message'] = "Projects updated successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/projects/index.php" );
      exit();
   
   }

     else {
       $tittle=$_POST["tittle"];
       $client=$_POST["client"];
       $location=$_POST["location"];
       $body=$_POST["body"];
       $duration=$_POST["duration"];
       $value=$_POST["value"];
       $service_id=$_POST["service_id"];     
       $published = isset($_POST["published"]) ? 1 : 0;
          }
   }


   if (isset($_GET["delete_id"])) {

     adminOnly();
     
     $count = delete($table, $_GET["delete_id"]);
     $_SESSION['message'] = "Projects deleted successfully";
     $_SESSION['type'] = "success";
     header("location: " . BASE_URL . "/admin/projects/index.php" );
     exit();
   }

