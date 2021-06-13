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
    <h1>Laporan Data Pasien</h1>
    <table>
        <thead>
        <tr>
                    <th>ID PASIEN</th>
                    <th>NAMA PASIEN</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>USIA</th>
                    <th>TANGGAL DAFTAR</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data_pasien();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                    <td><?= $data->id_pasien ?></td>
                    <td><?= $data->nama_pasien ?></td>
                    <td><?= $data->alamat_pasien ?></td>
                    <td><?= $data->jenis_kelamin ?></td>
                    <td><?= $data->usia ?></td>
                    <td><?= $data->tgl_daftar ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel pasien.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>