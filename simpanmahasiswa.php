<?php
// include koneksi
include "DB.php";

// buat sql
$sql= "INSERT INTO mahasiswa (nim,nama,alamat,jkl,agama, email,pwd,created_at,update_at)
 VALUES ('1234568', 'Muhammad', 'Kisaran', 'PRIA', 'Islam', 'arya90@gmail.com', '123456',
 current_timestamp(), '2024-04-2205:04:49.000000')";

//  proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL error');
if($q) {
    echo "Data Berhasil disimpan";
}else {
    echo "Gagal menyimpan data!";
}

?>