<?php

include('koneksi.php');

$id = $_GET['id'];

$nama = $_POST['nama'];
$id_jenis_kelamin = $_POST['id_jenis_kelamin'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

print $nama.'<br>';
print $id_jenis_kelamin.'<br>';
print $alamat.'<br>';
print $lat.'<br>';
print $lng.'<br>';

$query = $db->prepare("UPDATE penulis SET nama = '$nama', id_jenis_kelamin = '$id_jenis_kelamin', alamat = '$alamat', lat = '$lat', lng = '$lng' WHERE id=$id");


if($query->execute()){
	header("Location: index.php");
}

?>