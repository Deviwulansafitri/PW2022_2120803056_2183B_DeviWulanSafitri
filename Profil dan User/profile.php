<?php


require 'Function.php';
$cosmetic = query("SELECT * FROM cosmetic");



if (isset($_POST["cari"])) {
  $cosmetic = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Profile</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="profil">
        <a href="user.php"> User </a>
      </div>

      <h2>Cosmetic</h2>
    </div>

    <div class="cari">
      <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
      </form>
    </div>

    <table>
      <tr>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
      </tr>

      <?php foreach ($cosmetic as $cosmetic) : ?>
        <tr>
          <td>
          <img src="img/<?= $cosmetic["gambar"]; ?>" width="60" height="80"> 
          </td>
          <td><?= $cosmetic["jenis"]; ?></td>
          <td><?= $cosmetic["nama"]; ?></td>
          <td><?= $cosmetic["harga"]; ?></td>
        </tr>
      <?php endforeach; ?>

    </table>

  </div>
</body>

</html>