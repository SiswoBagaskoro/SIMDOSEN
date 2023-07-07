
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
          <a class="nav-link link_aktif" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php">PRODI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">DOSEN</a>
        </li>  
        
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>SELAMAT DATANG</h3>
</div>

</body>
</html>