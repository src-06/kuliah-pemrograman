<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input</title>
  <style>
    th,
    td {
      padding: 12px;
    }
    button {
      margin-inline: 2px;
    }
  </style>
</head>
<body>
  <form action="Output.php" method="post">
    <h1>FORM INPUT</h1>

    <table border="1">
      <tr>
        <th>Nama</th>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <th>NIM</th>
        <td><input type="text" name="nim"></td>
      </tr>
      <tr>
        <th>Prodi</th>
        <td>
          <select name="prodi">
            <option value="TRPL">TRPL</option>
            <option value="BisDig">BisDig</option>
            <option value="LogBis">LogBis</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>JK</th>
        <td>
          <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
          <input type="radio" name="jk" value="Perempuan"> Perempuan
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit">Simpan</button>
          <button type="reset">Kembali</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
