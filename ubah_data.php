<?php
require 'function.php';


// ambil data di url menggunakan $_GET[]
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$dosen = query("SELECT * FROM produk WHERE id =$id")[0];


// cek apakah tombol pada tambah sudah di gunakan atau blm
if (isset($_POST["submit"])) {

   // cek data berhasil diubah atau gagal
     if ( ubah ($_POST) > 0) {
      echo "
        <script>
          alert('data berhasil diubah');
          document.location.href = 'daftar_dosen.php';
        </script>
        ";
     } else{
     echo "<script>
        alert('data gagal diubah');
        document.location.href = 'daftar_dosen.php';
      </script>
      ";
      }
    }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>CRUD!</title>
  </head>
  <body>
  <div class="container-fluid" id="page-content" >
    <div class="card">
            <div class="card-header text-center">
                    <h1>Tambah Data Dosen</h1>
             </div>
            <div class="card-body">    
                <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                        
                                <div class="panel panel-default">
                                <!-- Default panel contents -->
                                    <h4 class="card-tittle">Isi dengan lengkap</h4>
                                    <br>
                                    <div class="form-group" id="form_tambah">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                
                                    <div class="col-lg-8">
                                        <h3 class="page-header" style="margin-top:-5px;">
                                            Input Data Dosen
                                        </h3>
                                    </div>
                                </div>

                                <div class="row">    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NRD</label>
                                            <input class="form-control" id="send" name="nrd" placeholder="NRD" value="<?=$dosen["nrd"];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Dosen</label>
                                            <input class="form-control" name="kode_dosen" placeholder="Kode Dosen" readonly=readonly value="<?=$dosen["kode_dosen"];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" placeholder="Nama dosen" value="<?=$dosen["nama"];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" required>
                                                <option value="">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                <br>
                    <button class="btn btn-primary" name="submit" value="submit" type="submit">Submit</button>
              </ul>          
            </div>
            </form>
          </div>

          </div>
        </div>
      </div>             
            </div>
                <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script>
       // datepicker
       $(function(){
          $("#datepicker").datepicker({
            format: 'yyyy/mm/dd',
            autoclose: true,
            todayHighlight: true,
            });
         });
         </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>