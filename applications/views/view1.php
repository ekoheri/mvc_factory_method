<html>
<head>
<title>Welcome</title>
</head>
<body>
<h1>Welcome to <?php echo $nama;?> MVC</h1>
<h2>Daftar Mahasiswa</h2>
<table border="1">
<tr>
	<th>NIM</th>
	<th>Nama</th>
	<th>Jurusan</th>	
</tr>
<?php 
foreach($mahasiswa as $mhs) {
?>
<tr>
	<td><?php echo $mhs['nim'];?></td>
	<td><?php echo $mhs['nama'];?></td>
	<td><?php echo $mhs['jurusan'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
