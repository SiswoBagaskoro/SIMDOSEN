<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="hura.css?<?= time();?>">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="prodi.php">PRODI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_aktif" href="#">DOSEN</a>
        </li>  
        
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <h3>DATA DIRI DOSEN</h3>
  <p>Try to submit the form.</p>
    
  <form action="#" method="post">
    <div class="mb-3 mt-3">
      <label for="nama_dosen" class="form-label">NAMA DOSEN:</label>
      <input type="text" class="form-control" id="nama_fakultas" placeholder="Enter nama_dosen" name="nama_dosen" required>
     
    </div>
    <div class="mb-3">
      <label for="nidn_dosen" class="form-label">NIDN DOSEN:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter nidn dosen" name="nidn_dosen" required>
    
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">ALAMAT:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter alamat" name="alamat" required>
     </div>

    <div class="mb-3">
      <label for="no_hp" class="form-label">NO HP:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter no hp" name="no_hp" required>   
    </div>

    <div class="mb-3">
      <label for="kode_prodi" class="form-label">KODE PRODI:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter kode prodi" name="kode_prodi" required>
    </div>
  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
  </form>
</div>
<br>
<table cellpadding="10" cellspacing="0" width="100%">
  <tr>
  <th>NO</th>
  <th>NAMA DOSEN</th>
  <th>NIDN DOSEN</th>
  <th>ALAMAT</th>
  <th>NO HP</th>
  <th>KODE PRODI</th>
</tr>
  <?php 
$coon=mysqli_connect("localhost","root","","simdosen");
$q=mysqli_query($coon,"SELECT * FROM  tabeldosen");
$i=1;
while ($row=mysqli_fetch_assoc($q)):
   ?>
<tr>

  <td><?=$i; ?></td>
  <td><?= $row["namadosen"];?></td>
  <td><?= $row["idndosen"];?></td>
  <td><?= $row["alamat"];?></td>
  <td><?= $row["nohp"];?></td>
  <td><?= $row["kodeprodi"];?></td>
  
</tr>
<?php $i++; ?>
<?php endwhile; ?>

</table>


</body>
</html>

<?php 
if (isset($_POST["kirim"])):
  $coon=mysqli_connect("localhost","root","","simdosen");
  $nama_dosen=$_POST["nama_dosen"];
  $nidn_dosen=$_POST["nidn_dosen"];
  $alamat=$_POST["alamat"];
  $no_hp=$_POST["no_hp"];
  $kode_prodi=$_POST["kode_prodi"];
  mysqli_query($coon,"INSERT INTO tabeldosen VALUES ('$nama_dosen','$nidn_dosen','$no_hp','$alamat','$kode_prodi');");
endif;



 ?>


</body>
</html>