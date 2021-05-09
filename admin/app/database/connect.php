<?php

$host = "frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "ifinzti6izhcdvuft";
$pass = "lk3i92t824ynskd1";
$db_name ="xd2qzki57tr4ghm0";

$conn = new MySQLi($host,$user,$pass,$db_name);

if($conn->connect_error) {
	die("Database connection error".$conn->connect_error);
}
