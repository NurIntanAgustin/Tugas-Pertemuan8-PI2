<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
        text-align: center;
        }
        table,
        td,
        th {
        border: 1px solid #fb5607;
        text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th,
        td {
        padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Laporan Data Periksa</h1>
    <table>
        <thead>
        <tr>
                    <th>ID PERIKSA</th>
                    <th>TANGGAL PERIKSA</th>
                    <th>ID PASIEN</th>
                    <th>DIAGNOSA</th>
                    <th>BIAYA PERIKSA</th>
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
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel periksa.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>