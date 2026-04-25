<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Gaji Karyawan</title>
  <style>
    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
      text-align: center;
    }

    table,
    div {
      display: flex;
      justify-content: center;
    }

    .btn {
      padding-block: 4px;
      padding-inline: 12px;
      font-size: larger;
      font-weight: bold;
      color: current;
      background-color: current;
      border: none;
      border-radius: 5px;
      transition: all 0.3s;
    }

    .btn:hover {
      opacity: 50%;
    }
  </style>
</head>
<body>
  <h2>Input Data Gaji Karyawan</h2>
  <hr>
  <form action="./Output.php" method="post">
    <table>
      <tr>
        <td><strong>Nama</strong></td>
        <td>: <input type="text" name="nama"></td>
      </tr>
      <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td>:
          <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
          <input type="radio" name="jk" value="Perempuan"> Perempuan
        </td>
      </tr>
      <tr>
        <td><strong>Posisi jabatan</strong></td>
        <td>:
          <select name="jabatan">
            <option value="Manajer">Manajer</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Staf IT">Staf IT</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><strong>Divisi</strong></td>
        <td>:
          <select name="divisi">
            <option value="A0">A0</option>
            <option value="A1">A1</option>
            <option value="B0">B0</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C0">C0</option>
            <option value="C1">C1</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><strong>Tanggal Penggajian</strong></td>
        <td>: <input type="date" name="tgl"></td>
      </tr>
      <tr>
        <td><strong>Jumlah Gaji</strong></td>
        <td>: <input type="number" name="gaji"></td>
      </tr>
    </table>
    <hr>
    <div>
      <input type="submit" value="Submit" class="btn" style="background-color: green;color: whitesmoke;">
      <input type="reset" value="Cancel" class="btn" style="background-color: yellow;color: #444444;margin-left: 16px;">
    </div>
  </form>
</body>
</html>