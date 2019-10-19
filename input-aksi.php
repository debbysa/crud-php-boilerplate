<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];

mysqli_query($host,"INSERT INTO biodata(nama,no_tlp,email) VALUES('$nama','$no_tlp','$email')");

header("location:index.php?pesan=input");
?>