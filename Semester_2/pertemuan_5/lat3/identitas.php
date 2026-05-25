<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Identitas</title>
</head>
<body>
  <h1>Masukan Identitas Anda</h1>

  <form action="" method="post">
    <pre>
      Isikan Nama : <input type="text" name="nama">
      Isikan No. Telp : <input type="text" name="notelp">
      Isikan Alamat : <textarea name="alamat" rows="5" cols="40"></textarea>

      <input type="submit" value="TAMPIL">
      <input type="reset" value="BATAL">
    </pre>
  </form>

  <?php

    if (!empty($_POST['nama'])) {

      $nama = $_POST['nama'];
      $notelp = $_POST['notelp'];
      $alamat = $_POST['alamat'];

      echo "<hr>";

      if (!empty($nama)) echo "Nama : <strong>$nama</strong><br>";
      if (!empty($notelp)) echo "No Telp : <strong>$notelp</strong><br>";
      if (!empty($alamat)) echo "Alamat : <strong>$alamat</strong><br>";
    }

  ?>
</body>
</html>