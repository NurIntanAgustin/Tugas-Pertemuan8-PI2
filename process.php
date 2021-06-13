<?php
include 'model.php';
if (isset($_POST['submit_simpan_pasien'])) {
 $id_pasien = $_POST['id_pasien'];
 $nama_pasien = $_POST['nama_pasien'];
 $alamat_pasien = $_POST['alamat_pasien'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $usia = $_POST['usia'];
 $tgl_daftar = $_POST['tgl_daftar'];
 $model = new Model();
 $model->insert_pasien($id_pasien, $nama_pasien, $alamat_pasien, $jenis_kelamin, $usia, $tgl_daftar);
 header('location:pasien.php');
}
if (isset($_POST['submit_edit_pasien'])) {
 $id_pasien = $_POST['id_pasien'];
 $nama_pasien = $_POST['nama_pasien'];
 $alamat_pasien = $_POST['alamat_pasien'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $usia = $_POST['usia'];
 $tgl_daftar = $_POST['tgl_daftar'];
 $model = new Model();
 $model->update_pasien($id_pasien, $nama_pasien, $alamat_pasien, $jenis_kelamin, $usia, $tgl_daftar);
 header('location:pasien.php');
}
if (isset($_GET['id'])) {
 $id_pasien = $_GET['id'];
 $model = new Model();
 $model->delete_pasien($id_pasien);
 header('location:pasien.php');
}
//periksa
if (isset($_POST['submit_simpan_periksa'])) {
 $id_periksa = $_POST['id_periksa'];
 $tgl_periksa = $_POST['tgl_periksa'];
 $id_pasien = $_POST['id_pasien'];
 $diagnosa = $_POST['diagnosa'];
 $biaya = $_POST['biaya'];
 $model = new Model();
 $model->insert_periksa($id_periksa, $tgl_periksa, $id_pasien, $diagnosa, $biaya);
 header('location:periksa.php');
}
if (isset($_POST['submit_edit_periksa'])) {
 $id_periksa = $_POST['id_periksa'];
 $tgl_periksa = $_POST['tgl_periksa'];
 $id_pasien = $_POST['id_pasien'];
 $diagnosa = $_POST['diagnosa'];
 $biaya = $_POST['biaya'];
 $model = new Model();
 $model->update_periksa($id_periksa, $tgl_periksa, $id_pasien, $diagnosa, $biaya);
 header('location:periksa.php');
}
if (isset($_GET['id'])) {
 $id_periksa = $_GET['id'];
 $model = new Model();
 $model->delete_periksa($id_periksa);
 header('location:periksa.php');
}