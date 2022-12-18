<?php 
require 'Function.php';

if( isset($_POST["submit"])) {

  if( tambah($_POST) > 0 ) {
    echo "
      <scrip> 
        alert('data berhasil ditambahkan!');
        document.location,href = 'index.php';
      </scrip>  
    "; 
  } else {
    echo "
      <scrip>
        alert('data gagal ditambahkan!');
        document.location,href = 'index.php';
      </scrip>"; 
    
  }
}
?>

<!DOCTYPE html>
<head>
  <title>Tambah Data Cosmetic</title>
</head>
<body>
  <h1>Tambah data cosmetic</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="jenis">Jenis : </label>
        <input type="text" name="jenis" id="jenis" required>
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
      </li>
      <li>
        <label for="harga">Harga : </label>
        <input type="text" name="harga" id="harga">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
      </li>
        <button type="submit" name="submit">Tambah</button>
      </li>
    </ul>

  </form>
  
</body>
</html>