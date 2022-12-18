<?php
require 'Function.php';

$id = $_GET["id"];

$cosmetic = query("SELECT * FROM cosmetic WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
	
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data cosmetic</title>
</head>
<body>
	<h1>Ubah data cosmetic</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $cosmetic["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $cosmetic["gambar"]; ?>">
		<ul>
			<li>
				<label for="jenis">Jenis : </label>
				<input type="text" name="jenis" id="jenis" required value="<?= $cosmetic["jenis"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $cosmetic["nama"]; ?>">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" value="<?= $cosmetic["harga"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $cosmetic['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>