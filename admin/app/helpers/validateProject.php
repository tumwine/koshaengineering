<?php 

function ValidateProject($project){
  
  $errors = array();
     if (empty($project["tittle"])) {
      array_push($errors,"Tittle is required");
     } 

     if (empty($project["client"])) {
      array_push($errors,"Client is required");
     }

     if (empty($project["location"])) {
      array_push($errors,"Location is required");
     }

     if (empty($project["body"])) {
      array_push($errors,"Descritption is required");
     }

     if (empty($project["duration"])) {
      array_push($errors,"Duration is required");
     }

      if (empty($project["value"])) {
      array_push($errors,"Value is required");
     }

     if (empty($project["service_id"])) {
      array_push($errors,"Service is required");
     }

    $existingProject = selectOne("projects", ["tittle" => $project["tittle"]]);

    if ($existingProject) {

     if (isset($project["update-project"]) && $existingProject["id"] != $project["id"]) {
        array_push($errors,"Project with that tittle already exists.");
     }

     if (isset($project["add-project"])) {
        array_push($errors,"Project with that tittle already exists.");
     }
     
   }

      return $errors;
    }
