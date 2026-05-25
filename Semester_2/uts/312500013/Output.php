<?php

  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $prodi = $_POST["prodi"];
  $jk = $_POST["jk"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Peserta</title>
  <style>
    th,
    td {
      padding: 12px;
    }
  </style>
</head>
<body>
  <h1>Data Peserta</h1>

  <table border="1">
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Prodi</th>
      <th>JK</th>
    </tr>
    <tr>
      <td><?= $nama ?></td>
      <td><?= $nim ?></td>
      <td><?= $prodi ?></td>
      <td><?= $jk ?></td>
    </tr>
  </table>
</body>
</html>
