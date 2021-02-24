<?php
require 'function.php';

// cek apakah tombol pada tambah sudah di gunakan atau blm
if (isset($_POST["input"])) {
    
    // debug program
      // var_dump($_POST);
      // var_dump($_FILES);
      // die;
     // cek data berhasil ditambahkan atau gagal
       if ( tambah ($_POST) > 0) {
        echo "
          <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'daftar_dosen.php';
          </script>
          ";
       } else{
       echo "<script>
          alert('data gagal ditambahkan');
          document.location.href = 'tambah_dosen.php';
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
                    <h1>Tambah Data Produk</h1>
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
                                
                                    <div class="col-lg-12">
                                        <h3 class="page-header" style="margin-top:-5px;">
                                            Input Data Produk
                                        </h3>
                                    </div>
                                </div>

                                <div class="row">    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input class="form-control" name="nama_produk" placeholder="Nama Produk" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" placeholder="Harga" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" placeholder="Jumlah Barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan Barang</label>
                                            <input class="form-control" name="Keterangan" placeholder="Barang Digunakan untuk" required>
                                        </div>
                                        <br>
                                <button class="btn btn-primary" name="input" value="submit" type="submit">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>             
            </div>
        </div>
      </div>    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>