<?php

require("connect.php");

session_start();

function executeQuery($sql, $data){
	global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat("s", count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []){
	global $conn;
	$sql = "SELECT * FROM $table";
	if (empty($conditions)) {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}

	else{
        $i = 0;
        foreach ($conditions as $key => $value) {

        	if ($i === 0) {
        		$sql = $sql . " WHERE $key=?";
        	} else {
        		$sql = $sql . " AND $key=?";
        	}
        	 $i++;
       }

        $stmt = executeQuery($sql, $conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}
	
}

function selectOne($table, $conditions){
	global $conn;
	$sql = "SELECT * FROM $table";

        $i = 0;
        foreach ($conditions as $key => $value) {

        	if ($i === 0) {
        		$sql = $sql . " WHERE $key=?";
        	} else {
        		$sql = $sql . " AND $key=?";
        	}
        	 $i++;
        }	

        $sql = $sql . " LIMIT 1";  

        $stmt = executeQuery($sql, $conditions);
		$records = $stmt->get_result()->fetch_assoc();
		return $records;
}

function create($table, $data){
	global $conn;

	$sql = "INSERT INTO $table SET ";

	$i = 0;
        foreach ($data as $key => $value) {

        	if ($i === 0) {
        		$sql = $sql . " $key=?";
        	} else {
        		$sql = $sql . ", $key=?";
        	}
        	 $i++;
        }

        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;
}

function update($table, $id, $data){
	global $conn;

	$sql = "UPDATE $table SET ";

	$i = 0;
        foreach ($data as $key => $value) {

        	if ($i === 0) {
        		$sql = $sql . " $key=?";
        	} else {
        		$sql = $sql . ", $key=?";
        	}
        	 $i++;
        }

        $sql = $sql . " WHERE id=?";
        $data["id"] =  $id;

        $stmt = executeQuery($sql, $data);
        return $stmt->affected_rows;
}

function delete($table, $id){
	global $conn;

	$sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ["id" => $id]);
    return $stmt->affected_rows;
}

function getPublishedServices() {

    global $conn;

    $sql = "SELECT * FROM services WHERE published=?";

    $stmt = executeQuery($sql, ["published" => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

}

function getDistinctServices() {

    global $conn;

    $sql = "SELECT DISTINCT s.name, p.service_id FROM services AS s JOIN projects AS p ON p.service_id=s.id WHERE p.published=?";

    $stmt = executeQuery($sql, ["published" => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getPublishedProjects() {

    global $conn;

    $sql = "SELECT * FROM projects WHERE published=? ORDER BY created_at DESC";

    $stmt = executeQuery($sql, ["published" => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getPublishedProjectsByServiceId($service_id) {

    global $conn;

    $sql = "SELECT * FROM projects WHERE published=? AND service_id =? ORDER BY created_at DESC";

    $stmt = executeQuery($sql, ["published" => 1, "service_id" => $service_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

}



?>