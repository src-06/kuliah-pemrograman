<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
</head>
<body>
  <h2>Form Registrasi</h2>
  <p>Isi Data Dibawah ini:</p>
  <form action="hasil.php" method="post">
    <table>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat" cols="30" rows="4"></textarea></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat"></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="tgl"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
          <input type="radio" name="jk" value="Perempuan"> Perempuan
        </td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>
          <select name="pendidikan">
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S1">S2</option>
          </select>
        </td>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
          </td>
        </tr>
    </table>
  </form>
</body>
</html>