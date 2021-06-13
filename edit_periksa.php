<?php
$id_periksa = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_periksa($id_periksa);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Periksa</title>
</head>

<body>
    <h1>Edit Data Periksa</h1>
    <a href="periksa.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID PERIKSA</label>
        <br>
        <input type="text" name="id_periksa" value="<?php echo $data->id_periksa ?>">
        <br>
        <label>TANGGAL PERIKSA</label>
        <br>
        <input type="date" name="tgl_periksa" value="<?php echo $data->tgl_periksa ?>">
        <br>
        <label>ID PASIEN</label>
        <br>
        <input type="text" name="id_pasien" value="<?php echo $data->id_pasien ?>">
        <br>
        <label>DIAGNOSA</label>
        <br>
        <input type="text" name="diagnosa" value="<?php echo $data->diagnosa ?>">
        <br>
        <label>BIAYA</label>
        <br>
        <input type="text" name="biaya" value="<?php echo $data->biaya ?>">
        <br><br>
        <button type="submit" name="submit_edit_periksa">Submit</button>
    </form>
</body>

</html>