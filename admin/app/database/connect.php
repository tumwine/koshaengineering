<?php

$host = "y5svr1t2r5xudqeq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "p0gjwr3u733ssxe0";
$pass = "xwguz2m7u4qvux83";
$db_name ="sv2waxv7b9cokxkb";

$conn = new MySQLi($host,$user,$pass,$db_name);

if($conn->connect_error) {
	die("Database connection error".$conn->connect_error);
}
