<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
  <script type="text/javascript" src="../bootstrap-3.3.7-dist/js/jquery.js"></script>
  <script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<?php

include ('koneksi.php');
$id = $_GET['id'];
$query = $db->prepare("SELECT * FROM penerbit WHERE id = $id");
$query->execute();
$data = $query->fetch();

?>
<html>
<head>
	<title>Daftar Buku Penerbit</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script type="text/javascript" src="..//js/jquery.js"></script>
  <script type="text/javascript" src=../"js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<section class="col-lg-12">
		<div class="table-responsive">
			<div class="page-header">
			<div class="panel panel-primary">
			 <div class="panel-heading"><h2>RINCIAN BUKU PENERBIT</h2></div>
			 <form enctype="multipart/form-data" action="aksi_create.php" method="POST">
			</div><table class="table table-border">
	<tr>
		<td>Nama Penerbit</td>
		<td>:</td>
		<td><?php print $data['nama']; ?></td>
	</tr>
	
</table>