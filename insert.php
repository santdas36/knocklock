<?php

$username = "2649093_subscribe";
$password = "55wtmHf2wV7QR4J";
$database = "2649093_subscribe";
$mysqli = new mysqli("fdb19.awardspace.net", $username, $password, $database);

date_default_timezone_set("Asia/Kolkata");

$name = $_GET['name'];
$key = $_GET['key'];
$status = $_GET['status'];
$time = date('h:ia - jS, M', time());
$query = "INSERT INTO `knocklock` (`id`, `name`, `key`, `status`, `date`) VALUES (NULL, '{$name}', '{$key}', '{$status}', '{$time}')";

if ($mysqli->query($query) === True) {
echo"New record created successfully";
}
else{
echo"Error: ". $query ."<br>". $mysqli->error;
}

$mysqli->close();

?>