<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.table {
		font-family: sans-serif;
		color: #444;
		border-collapse: collapse;
		width: 50%;
		border: 1px solid #f2f5f7;
	}
	.table tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
	}
	
	.table, th, td {
		padding: 8px 20px;
		text-align: center;
	}
	
	.table tr:hover {
		background-color: #f5f5f5;
	}
	</style>
</head>
<body>

	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>No Telp</th>
			<th>Email</th>	
            <th>Aksi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($host,"SELECT * FROM biodata")or die(mysql_error());
		
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['no_tlp']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	<!-- echo $data['nama']; -->
</body>
</html>