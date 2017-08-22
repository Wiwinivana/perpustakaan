<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
  <script type="text/javascript" src="../bootstrap-3.3.7-dist/js/jquery.js"></script>
  <script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<?php

include ('koneksi.php');
$id = $_GET['id'];
$query = $db->prepare("SELECT * FROM penulis WHERE id = $id");
$query->execute();
$data = $query->fetch();

?>
<html>
<head>
	<title>Daftar Buku Penulis</title>
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
			 <div class="panel-heading"><h2>RINCIAN BUKU PENULIS</h2></div>
			 <form enctype="multipart/form-data" action="aksi_create.php" method="POST">
			</div><table class="table table-border">
	<tr>
		<td>Nama Penulis</td>
		<td>:</td>
		<td><?php print $data['nama']; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php print $data['id_jenis_kelamin']; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php print $data['alamat']; ?></td>
	</tr>

</table>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCAkkAQcLkoFLG6LIvt7sYWt0r7Nfgxnac"></script>

<script type="text/javascript">

 (function() {

 window.onload = function() {

 var map;

 var locations = [

    <?php        

  $host="localhost";

  $username="root";

  $password="";

  $database="perpus";


   $connection=mysql_connect ($host, $username, $password);

   $db_selected = mysql_select_db($database, $connection);
 
    $sql = "SELECT * FROM penulis";

     $result = mysql_query($sql);

    while($data = mysql_fetch_object($result)) {

      ?>

    [<?=$data->lat;?>, <?=$data->lng;?>, '<?=$data->nama;?>', '<?=$data->gambar;?>'],

    <?php }    ?>        

    ];

   

    //Parameter Google maps

     var options = {

      zoom: 10, //level zoom maps

       center: new google.maps.LatLng(-6.537124, 107.446965), //kordinat tengah maps

       mapTypeId: google.maps.MapTypeId.ROADMAP

      };

     

      // Buat maps pada id peta 

     var map = new google.maps.Map(document.getElementById('peta'), options);

    

    // Tambahkan Marker 

    var infowindow = new google.maps.InfoWindow();

 

    var marker, i;

    /* kode untuk menampilkan banyak marker */

     for (i = 0; i < locations.length; i++) {  

      marker = new google.maps.Marker({

       position: new google.maps.LatLng(locations[i][0], locations[i][1]),

        map: map,
        animation:google.maps.Animation.BOUNCE,
        icon: 'icon.png'

       });
      

    /* menambahkan event clik untuk menampikan infowindows dengan isi sesuai dgn marker yang di klik */        

      google.maps.event.addListener(marker, 'click', (function(marker, i) {

        return function() {

             infowindow.setContent('<img src="' + locations[i][3] + '" width="50" /><br/><b>' + locations[i][2] + '</b>');

            infowindow.open(map, marker);

           }

         })(marker, i));

      }

     };

  })();

   </script>

    

   <!-- Style untuk Peta -->

   <style>

   #peta {

      border:1px solid #000;

       width:1100px;

        height:595px;

 }

 </style>

 

 <div align="center">  

   <div id="peta"></div>

 </div>