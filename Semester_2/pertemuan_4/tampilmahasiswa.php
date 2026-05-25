<?php

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$jeniskel = isset($_POST['jeniskel']) ? $_POST['jeniskel'] : '';
$pekerjaan = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';
$hobi = isset($_POST['hobi']) ? $_POST['hobi'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>
  <table border="1" cellpadding="10" bgcolor="cyan" align="center">
    <tr>
      <td colspan="2" align="center"><b>Data Mahasiswa</b></td>
    </tr>

    <tr>
      <td>Nama</td>
      <td><?= htmlspecialchars($nama) ?></td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td><?= htmlspecialchars($alamat) ?></td>
    </tr>

    <tr>
      <td>Jenis Kelamin</td>
      <td><?= htmlspecialchars($jeniskel) ?></td>
    </tr>

    <tr>
      <td>Pekerjaan</td>
      <td><?= htmlspecialchars($pekerjaan) ?></td>
    </tr>

    <tr>
      <td>Hobi</td>
      <td>
        <?php
          if (!empty($hobi)) echo htmlspecialchars(implode(', ', $hobi));
          else echo "Tidak ada hobi";
        ?>
      </td>
    </tr>
  </table>

  <br>

  <div style="text-align: center;">
    <a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
  </div>
</body>
</html>