<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Pasien</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="pasien.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID PASIEN</label>
        <br>
        <input type="text" name="id_pasien">
        <br>
        <label>NAMA PASIEN</label>
        <br>
        <input type="text" name="nama_pasien">
        <br>
        <label>ALAMAT</label>
        <br>
        <input type="text" name="alamat_pasien">
        <br>
        <label>JENIS KELAMIN</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br>
        <label>USIA</label>
        <br>
        <input type="text" name="usia">
        <br>
        <label>TANGGAL DAFTAR</label>
        <br>
        <input type="date" name="tgl_daftar">
        <br><br>
        <button type="submit" name="submit_simpan_pasien">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>