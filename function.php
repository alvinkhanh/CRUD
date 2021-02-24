<?php
// database koneksi
$conn = mysqli_connect("localhost","root","","arkademy");

// ambil datanya
function query ($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	// looping pengambilan data
	while ($row = mysqli_fetch_assoc($result)) {
		# code pengambilan data dari dalam db(penambahan element baru di tiap array)
		$rows[] = $row;
	}
	return $rows;
}

// fungsi tambah data 
function tambah($data) {
	// ambil data dari tiap element dalam form
 	global $conn;
 	$nama = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

	 // query insert data
	// untuk mempermudah dan terlihat lebih enak
	$query = "INSERT INTO  produk
	            VALUES
	          ('','$nama','$harga','$jumlah','$keterangan')
	          ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// hapus & ubah data
function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM produk WHERE id = $id ");

	return mysqli_affected_rows($conn);
}

// ubah data mahasiswa
function ubah($data) {
	// ambil data dari tiap element dalam form
 	global $conn;
 	$id = $data["id"];
 	$nama = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

 // query update data
// untuk mengeupdate data
$query = "UPDATE produk SET
          nama_produk = '$nama',
          harga = '$harga',
          jumlah = '$jumlah',
          keterangan = '$keterangan',
          WHERE id = $id
          ";
// mengembalikan data ke form
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
}


?>