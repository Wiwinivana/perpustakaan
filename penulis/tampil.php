<?php
/*
Author : Muhammad Nur Yasir Utomo
Email : yasirutomo@gmail.com
Web : http://www.yasirblog.com 
*/
include ('koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>List Maps</title>
  </head>
  <body>
    <a href="peta2.php">Input Lokasi</a> | 
    <a href="tampil.php">Lihat Daftar Lokasi </a><br/><br/>
      <table border="1" >
        <tr>
          <td>No</td>
          <td>Alamat</td>
          <td>Peta</td>
        </tr>
        
          <?php
          $cari = mysql_query("select * from penulis");
          
          while($dapat = mysql_fetch_array($cari)){
            echo "
              <tr>
               <td>$dapat[id]</td>
               <td>$dapat[alamat]</td>
               <td>
                 <a href='tampil_map.php?idlokasi=$dapat[id]'>Lihat Map</a>
               </td>
              </tr>
            ";
          }
      ?>
      
      </table>
  </body>
</html>
