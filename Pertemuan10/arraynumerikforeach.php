<?php 
$mahasiswa =["judul", "12345", "sistem Infrmasi", "dyan@gmail.com"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) { ?>
    <li><?php echo $mhs; ?></li>
  <?php }?>
  </ul>
</body>
</html>