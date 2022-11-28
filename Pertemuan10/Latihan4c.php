<?php 

$ASEAN =[
  "Indonesia" => "D.K.I.jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "Bandar Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "manila",
  "Myanmar" => "Naypyidaw",
];
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <h1> Daftar ASEAN dan Ibukota </h1>
    <?php 
    foreach ($ASEAN as $a => $b) : ?>
    <li><?= "$a:$b " ?></li>
    <?php endforeach ?>
  </body>
  </html>