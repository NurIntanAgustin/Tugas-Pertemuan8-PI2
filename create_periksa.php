<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Periksa</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="periksa.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID PERIKSA</label>
        <br>
        <input type="text" name="id_periksa">
        <br>
        <label>TANGGAL PERIKSA</label>
        <br>
        <input type="date" name="tgl_periksa">
        <br>
        <label>ID PASIEN</label>
        <br>
        <input type="text" name="id_pasien">
        <br>
        <label>DIAGNOSA</label>
        <br>
        <input type="text" name="diagnosa">
        <br>
        <label>BIAYA</label>
        <br>
        <input type="text" name="biaya">
        <br><br>
        <button type="submit" name="submit_simpan_periksa">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>