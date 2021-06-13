<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Periksa</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fec89a;">
  <div class="container">
    <a class="navbar-brand" href="#"><b>Rumah Sakit Medika</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link active" href="index.php">Rekam Medis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pasien.php">Data Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="periksa.php">Data Periksa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid"><br>
        <h3 align="center">Data Periksa Medika</h3><br>
        <a href="create_periksa.php"><button type="button">Tambah Data</button></a>
        <a href="print_periksa.php" target="_blank"><button type="button">Cetak Data</button></a><br>
        <br>

        <table class="table table-bordered" style="background-color: #fffff;">
            <thead>
                <tr>
                    <th>ID PERIKSA</th>
                    <th>TANGGAL PERIKSA</th>
                    <th>ID PASIEN</th>
                    <th>DIAGNOSA</th>
                    <th>BIAYA PERIKSA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $model->tampil_data_periksa();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $data->id_periksa ?></td>
                    <td><?= $data->tgl_periksa ?></td>
                    <td><?= $data->id_pasien ?></td>
                    <td><?= $data->diagnosa ?></td>
                    <td><?= $data->biaya ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_periksa.php?id=<?=$data->id_periksa?>"><button type="button">Edit</button></a>
                        <a name="delete" id="delete" href="process.php?id=<?=$data->id_periksa?>"><button type="button">Delete</button></a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Pasien</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>