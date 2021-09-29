<?php
include '../database.php';
$log = new Log();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];    
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($aksi == "create") {
        $log->create($nama, $username, $password);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $log->update($id, $nama, $username, $password);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $log->delete($id);
        header("location:index.php");
    }

}