<?php 

require 'function.php';
$produk = query("SELECT * FROM produk");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>CRUD!</title>
  </head>
  <body>
    <div class="card " id="asuransi">
        <!-- header -->
        <div class="section header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="card-body" id="asuransi">
                        <h1 class="text-center">Daftar Asuransi</h1>
                            <!-- tambah -->
                            <br><br>
                            <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                    <a href="tambah_data.php" type="button" class="btn btn-primary">Tambah Data</a>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            </div>
                            </form>
                            <br>
      <!-- close search -->
      <!-- table -->
                    <div class="table-responsive" >
                            <table class="table" cellpadding="10" border="1" cellspacing="0">
                                    <tr class="active">
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Jumlah Produk</th>
                                    <th>Keterangan</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($produk as $row) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td>
                                        <a href="ubah_data.php?id=<?=$row["id"]; ?>"><button class="btn btn-primary" value="submit">Ubah</button></a> | 
                                        <a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-primary" value="submit">Hapus</button></a>
                                    <td><?=$row["nama_produk"];?></td>
                                    <td>Rp.<?=$row["harga"];?></td>
                                    <td><?=$row["jumlah"];?></td>
                                    <td><?=$row["keterangan"];?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                         </table>
                     </div>
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>