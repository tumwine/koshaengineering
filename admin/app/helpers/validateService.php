<?php 

function ValidateService($service){
  
  $errors = array();
     if (empty($service["name"])) {
      array_push($errors,"name is required");
     } 

    $existingService = selectOne("services", ["name" => $service["name"]]);

    if ($existingService) {

     if (isset($service["update-service"]) && $existingService["id"] != $service["id"]) {
        array_push($errors,"Service with that name already exists.");
     }

     if (isset($service["add-service"])) {
        array_push($errors,"Service with that name already exists.");
     }
     
   }

      return $errors;
    }
