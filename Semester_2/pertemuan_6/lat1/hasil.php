<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Registrasi</title>
</head>
<body>
  <h2>Data Registrasi</h2>
  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <td>Nama</td>
      <td><?= $_POST['nama'] ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?= $_POST['alamat'] ?></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><?= $_POST['tempat'] ?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><?= $_POST['tgl'] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?= $_POST['jk'] ?></td>
    </tr>
    <tr>
      <td>Pendidikan</td>
      <td><?= $_POST['pendidikan'] ?></td>
    </tr>
  </table>
  <br><a href="./regis.php">Back To Regis</a>
</body>
</html>