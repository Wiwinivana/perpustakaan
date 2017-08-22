<?php
/*
Author : Muhammad Nur Yasir Utomo
Email : yasirutomo@gmail.com
Web : http://www.yasirblog.com 
*/
include ('koneksi.php');
//data dari lokasi

$nama = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

echo "$alamat | $lat | $lng";

$aksi = $_POST['aksi'];
$id = $_POST['id'];

 $sql = "INSERT INTO penulis(alamat,lat,lng)
  VALUES('$alamats','$lat','$lng')";

$result = mysql_query($sql) or die(mysql_error());
echo '<br/><br/><a href="peta2.php"><< Tambah Lokasi Lagi</a> | <a href="tampil.php">Lihat Semua Lokasi >></a>';
?>
