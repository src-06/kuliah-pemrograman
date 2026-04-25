<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Penggajian</title>
  <style>
    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
      text-align: center;
    }

    div {
      display: flex;
      justify-content: center;
      margin-top: 16px;
    }

    .btn {
      padding-block: 4px;
      padding-inline: 12px;
      font-size: larger;
      font-weight: bold;
      color: whitesmoke;
      background-color: blue;
      text-decoration: none;
      border-radius: 5px;
      transition: all 0.3s;
    }

    .btn:hover {
      opacity: 50%;
    }
  </style>
</head>
<body>
  <h2>Data Penggajian</h2>
  <div>
    <table border="1" cellpadding="5" cellspacing="0">
      <tr>
        <td><strong>Nama</strong></td>
        <td><?= $_POST['nama'] ?></td>
      </tr>
      <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td><?= $_POST['jk'] ?></td>
      </tr>
      <tr>
        <td><strong>Posisi Jabatan</strong></td>
        <td><?= $_POST['jabatan'] ?></td>
      </tr>
      <tr>
        <td><strong>Divisi</strong></td>
        <td><?= $_POST['divisi'] ?></td>
      </tr>
      <tr>
        <td><strong>Tanggal Penggajian</strong></td>
        <td><?= $_POST['tgl'] ?></td>
      </tr>
      <tr>
        <td><strong>Gaji Yang Diterima</strong></td>
        <td>Rp. <?= $_POST['gaji'] ?></td>
      </tr>
    </table>
  </div>
  <div><a href="./Input.php" class="btn">Kembali</a></div>
</body>
</html>