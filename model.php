<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    //tabel pasien
    public function insert_pasien($id_pasien, $nama_pasien, $alamat_pasien, $jenis_kelamin, $usia, $tgl_daftar)
    {
        $sql = "INSERT INTO tbl_pasien (id_pasien, nama_pasien, alamat_pasien, jenis_kelamin, usia, tgl_daftar) 
        VALUES ('$id_pasien', '$nama_pasien', '$alamat_pasien', '$jenis_kelamin', '$usia', '$tgl_daftar')";
        $this->conn->query($sql);
    }
    public function tampil_data_pasien()
    {
        $sql = "SELECT * FROM tbl_pasien";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_pasien($id)
    {
        $sql = "SELECT * FROM tbl_pasien WHERE id_pasien='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_pasien($id_pasien, $nama_pasien, $alamat_pasien, $jenis_kelamin, $usia, $tgl_daftar)
    {
        $sql = "UPDATE tbl_pasien SET nama_pasien='$nama_pasien', alamat_pasien='$alamat_pasien', jenis_kelamin='$jenis_kelamin', usia='$usia', tgl_daftar='$tgl_daftar' WHERE id_pasien='$id_pasien'";
        $this->conn->query($sql);
    }
    public function delete_pasien($pasien_id)
    {
        $sql = "DELETE FROM tbl_pasien WHERE id_pasien='$pasien_id'";
        $this->conn->query($sql);
    }
    //tabel periksa
    public function insert_periksa($id_periksa, $tgl_periksa, $id_pasien, $diagnosa, $biaya)
    {
        $sql = "INSERT INTO tbl_periksa (id_periksa, tgl_periksa, id_pasien, diagnosa, biaya) 
        VALUES ('$id_periksa', '$tgl_periksa', '$id_pasien', '$diagnosa', '$biaya')";
        $this->conn->query($sql);
    }
    public function tampil_data_periksa()
    {
        $sql = "SELECT * FROM tbl_periksa";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_periksa($id)
    {
        $sql = "SELECT * FROM tbl_periksa WHERE id_periksa='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_periksa($id_periksa, $tgl_periksa, $id_pasien, $diagnosa, $biaya)
    {
        $sql = "UPDATE tbl_periksa SET tgl_periksa='$tgl_periksa', id_pasien='$id_pasien', diagnosa='$diagnosa', biaya='$biaya' WHERE id_periksa='$id_periksa'";
        $this->conn->query($sql);
    }
    public function delete_periksa($periksa_id)
    {
        $sql = "DELETE FROM tbl_periksa WHERE id_periksa='$periksa_id'";
        $this->conn->query($sql);
    }

    //rekammedis
    public function tampil_data()
    {
        $sql = "SELECT tbl_pasien.*, tgl_periksa, diagnosa FROM tbl_pasien INNER JOIN tbl_periksa ON tbl_pasien.id_pasien = tbl_periksa.id_pasien"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
    }
        if (!empty($baris)) {
            return $baris;
        }
    }
}