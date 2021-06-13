<?php
$id_pasien = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_pasien($id_pasien);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Pasien</title>
</head>

<body>
    <h1>Edit Data Pasien</h1>
    <a href="pasien.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID PASIEN</label>
        <br>
        <input type="text" name="id_pasien" value="<?php echo $data->id_pasien ?>">
        <br>
        <label>NAMA PASIEN</label>
        <br>
        <input type="text" name="nama_pasien" value="<?php echo $data->nama_pasien ?>">
        <br>
        <label>ALAMAT PASIEN</label>
        <br>
        <input type="text" name="alamat_pasien" value="<?php echo $data->alamat_pasien ?>">
        <br>
        <label>JENIS KELAMIN</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php echo $data->jenis_kelamin ?>">
        <br>
        <label>USIA</label>
        <br>
        <input type="text" name="usia" value="<?php echo $data->usia ?>">
        <br>
        <label>TANGGAL DAFTAR</label>
        <br>
        <input type="date" name="tgl_daftar" value="<?php echo $data->tgl_daftar ?>">
        <br><br>
        <button type="submit" name="submit_edit_pasien">Submit</button>
    </form>
</body>

</html>