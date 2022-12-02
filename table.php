<?php
  $server = "localhost";
  $user="root";
  $pass="";
  $database="dbmahasiswa";

  $connect =  mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($connect));

  if(isset($_POST['bsubmit'])){
    $save = mysqli_query($connect,"INSERT INTO mahasiswa (namadepanmhs,namabelakangmhs,nimmhs,email,prodi,semester,alamat,alat,keperluan)
                          VALUES ('$_POST[tnama]',
                          '$_POST[tbelakang]',
                          '$_POST[tnim]',
                          '$_POST[temail]',
                          '$_POST[tprostud]',
                          '$_POST[tsemester]',
                          '$_POST[talamat]',
                          '$_POST[tbarang]',
                          '$_POST[tkeperluan]')
                          ");
    if($save){
      echo"<script>
          alert('Form anda telah ditambahkan');
          document.location='table.php';
      </script>";
    }
    else{
      echo"<script>
      alert('Form anda salah !!');
      document.location='table.php';
      </script>";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Check Form</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Fakultas Ilmu Komputer</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link">Register Form</a></li>
        <li class="nav-item"><a href="table.php" class="nav-link">Check Form</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
  </div>
<div class="container">
<div class="card-body">
        <h2>Silahkan cek nama anda di bawah ini untuk memastikan apakah form yang anda buat telah di kirim.</h2>
        <table class="table table-bordered table-striped">
          <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Program Studi</th>
            <th>Semester</th>
            <th>Alamat</th>
            <th>Nama Barang</th>
            <th>Keperluan</th>
          </tr>

          <?php
            $no = 1;
            $view=mysqli_query($connect,"SELECT * FROM mahasiswa ORDER BY idmhs desc");
            while($data = mysqli_fetch_array($view)):
          ?>
          <tr>
            <th><?=$no++;?></th>
            <th><?=$data['namadepanmhs'];?></th>
            <th><?=$data['namabelakangmhs'];?></th>
            <th><?=$data['nimmhs'];?></th>
            <th><?=$data['email'];?></th>
            <th><?=$data['prodi'];?></th>
            <th><?=$data['semester'];?></th>
            <th><?=$data['alamat'];?></th>
            <th><?=$data['alat'];?></th>
            <th><?=$data['keperluan'];?></th>
          </tr>
        <?php endwhile;//closing endwhile?>
        </table>

  </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017–2022 Lembaga Peminjaman Barang FILKOM</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>   
</body>
<script src="js/bootstrap.min.js"></script>
</html>
