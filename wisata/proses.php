<?php
include '../database.php';
$dosen = new Dosen();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];    
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $opentime = $_POST['opentime'];
    $ringkasan = $_POST['ringkasan'];

    if ($aksi == "create") {
        $dosen->create($no, $nama, $alamat, $opentime, $ringkasan);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id, $no, $nama, $alamat, $opentime, $ringkasan);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}