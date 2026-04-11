<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Mahasiswa</title>
</head>
<body bgcolor="green">
  <form action="tampilmahasiswa.php" method="post">
    <b>Pengelolaan Data Mahasiswa</b>

    <br><br>

    <pre>
      Nama    : <input type="text" name="nama" size="25" maxlength="50">
      Alamat  : <input type="text" name="alamat" size="25" maxlength="50">
    </pre>

    <p>
      Jenis Kelamin :
      <input type="radio" name="jeniskel" value="Laki-laki">Laki-laki
      <input type="radio" name="jeniskel" value="Perempuan">Perempuan
    </p>

    <p>
      Pekerjaan:
      <select name="pekerjaan">
        <option value="">-- Pilih ---</option>
        <option value="Pelajar">Pelajar</option>
        <option value="Karyawan">Karyawan</option>
        <option value="Lain-lain">Lain-lain</option>
      </select>
    </p>

    <p>
      Hobi:
      <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
      <input type="checkbox" name="hobi[]" value="Musik">Musik
      <input type="checkbox" name="hobi[]" value="Jalan-Jalan">Jalan-jalan
    </p>

    <p>
      <input type="submit" value="Kirim">
      <input type="reset" value="Batal">
    </p>
  </form>
</body>
</html>