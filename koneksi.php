<?php

//KONFIGURASI DATABASE

$host = "localhost";
$dbname = "perpus";
$username ="root";
$password ="";

try {
	// BUAT OBJECT PDO baru dan simpan ke variable $db
	$db = new PDO("mysql:host={$host};dbname={$dbname}" , $username, $password);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $db;
}catch (PDOException $exception){
	die("Connection error: " . $exception->getMessage());
}