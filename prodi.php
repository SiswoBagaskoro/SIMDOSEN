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
          <a class="nav-link link_aktif" href="prodi.php">PRODI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">DOSEN</a>
        </li>  
        
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <h3>ISILAH DATA BERIKUT</h3>
  <p>Try to submit the form.</p>
    
  <form action="#" method="post">
    <div class="mb-3 mt-3">
      <label for="nama_fakultas" class="form-label">NAMA FAKULTAS:</label>
      <input type="text" class="form-control" id="nama_fakultas" placeholder="Enter nama fakultas" name="nama_fakultas" required>
     
    </div>
    <div class="mb-3">
      <label for="kode_prodi" class="form-label">KODE PRODI:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter kode prodi" name="kode_prodi" required>
    
    </div>
    <div class="mb-3">
      <label for="prodi" class="form-label">NAMA PRODI:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter prodi" name="prodi" required>
     </div>
  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
  </form>
</div>
<br>
<table cellpadding="10" cellspacing="0" width="100%">
  <tr>
  <th>NO</th>
  <th>FAKULTAS</th>
  <th>KODE PRODI</th>
  <th>NAMA PRODI</th>
</tr>
  <?php 
$coon=mysqli_connect("localhost","root","","simdosen");
$q=mysqli_query($coon,"SELECT * FROM  tabelprodi");
$i=1;
while ($row=mysqli_fetch_assoc($q)):
   ?>
<tr>

  <td><?=$i; ?></td>
  <td><?= $row["fakultas"];?></td>
  <td><?= $row["kodeprodi"];?></td>
  <td><?= $row["namaprodi"];?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>

</table>


</body>
</html>

<?php 
if (isset($_POST["kirim"])):
  $coon=mysqli_connect("localhost","root","","simdosen");
  $nama_fakultas=$_POST["nama_fakultas"];
  $kode_prodi=$_POST["kode_prodi"];
  $prodi=$_POST["prodi"];
  mysqli_query($coon,"INSERT INTO tabelprodi VALUES ('$nama_fakultas','$kode_prodi','$prodi');");
endif;



 ?>