<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email']; 

mysqli_query($host,"UPDATE biodata SET nama='$nama', no_tlp='$no_tlp', email='$email' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>