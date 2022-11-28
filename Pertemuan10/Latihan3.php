<?php 
$mahasiswa =[
  ["Joni", "12345", "sistem Infrmasi", "Joni@gmail.com"],
  ["Doni", "65431", "sistem Infrmasi", "Doni@gmail.com"],
  ["Angga", "78954", "sistem Infrmasi", "Angga@gmail.com"],
  ["Rio", "89546", "sistem Infrmasi", "Rio@gmail.com"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
    <li><?= $mhs[0]; ?></li>
    <li><?= $mhs[1]; ?></li>
    <li><?= $mhs[2]; ?></li>
    <li><?= $mhs[3]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>