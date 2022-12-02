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
    <title>Reservation Form</title>
    <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
<div class="container-fluid">
    
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Reservation form</h2>
          <p class="lead">Ini adalah form peminjaman barang FILKOM UB .</p>
        </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Data Peminjam Barang</h4>
            <form method="post" action="">
              <div class="row g-3">

                <div class="col-sm-6">
                  <label>Nama depan</label>
                  <input type="text" name ="tnama" class="form-control" placeholder=""required="">
                  <div class="invalid-feedback">
                    Nama depan harap diisi.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label>Nama belakang</label>
                  <input type="text" name="tbelakang" class="form-control" placeholder=""required="">
                  <div class="invalid-feedback">
                    Nama belakang harap diisi.
                  </div>
                </div>
                
                <div class="col-12">
                  <label>NIM</label>
                  <input type="text" name ="tnim" class="form-control" placeholder=""required="">
                  <div class="invalid-feedback">
                    NIM harap diisi.
                  </div>
                </div>

                <div class="col-12">
                  <label>Email <span class="text-muted">(Optional)</span></label>
                  <input name="temail" class="form-control" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <!-- <div class="col-sm-6">
                  <label>Program Studi</label>
                  <input name="tprostud" class="form-control" placeholder="Teknik Informatika" required="">
                  <div class="invalid-feedback">
                    Please select a valid program studi.
                  </div>
                </div> -->
                
                <div class="col-md-6">
                  <label>Program Studi</label>
                  <select class="form-select" name="tprostud" required>
                    <option value="">Choose...</option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Komputer</option>
                    <option>Sistem Informasi</option>
                    <option>Teknologi Informasi</option>
                    <option>Pendidikan Teknologi Informasi</option>
                  </select>
                  <div class="invalid-feedback">
                    Tolong dipilih program studinya !!.
                  </div>
                </div>

                <div class="col-md-6">
                  <label>Semester</label>
                  <select class="form-select" name="tsemester" required>
                    <option value="">Choose...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
                  <div class="invalid-feedback">
                    Tolong dipilih semesternya !!.
                  </div>
                </div>
<!-- 
                <div class="col-sm-6">
                  <label>Semester</label>
                  <input name="tsemester" class="form-control" placeholder="3" required="">
                  <div class="invalid-feedback">
                    Please select a valid program studi.
                  </div>
                </div> -->
               
               <div class="col-12">
                  <label>Address</label>
                  <input type="text" class="form-control"  name ="talamat" placeholder="1234 Main St" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
                <div class="col-12">
                  <label>Nama Barang</label>
                  <input type="text" class="form-control" name="tbarang" placeholder="Projector" required="">
                  <div class="invalid-feedback">
                    Silahkan isi data barang.
                  </div>
                </div>
                <div class="col-12">
                  <label for="keperluan" class="form-label">Keperluan</label>
                  <input type="text" class="form-control" name="tkeperluan" placeholder="Presentasi Sidang" required="">
                  <div class="invalid-feedback">
                    Silahkan isi tujuan peminjaman.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Saya bersedia mengganti rugi apabila barang tersebut hilang</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Adapun data yang diisikan pada for diatas adalah benar</label>
              </div>

              <hr class="my-4">
              <button class="btn btn-success" name="bsubmit" type="submit">Submit</button>
              <button class="btn btn-danger" name="breset" type="reset">Kosongkan</button>
              <hr class="my-4">
            </form>
          </div>
</div>
      </main>




      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017–2022 Lembaga Peminjaman Barang FILKOM</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
  

</body>
<script src="js/bootstrap.min.js"></script>
</body>
</html>