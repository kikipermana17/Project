<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $no = $data['no'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $opentime = $data['opentime'];
    $ringkasan = $data['ringkasan'];
}
?>
    <fieldset>
        <legend>Edit Data dosen</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                 </tr>
                <tr>
                    <th>NO</th>
                    <td><input type="text" name="no" placeholder="No" value="<?php echo $no; ?>" require></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="pass" name="nama" placeholder="Nama" value="<?php echo $nama; ?>" require></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="pass" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" require></td>
                </tr>
                <tr>
                    <th>OpenTime</th>
                    <td><input type="time" name="opentime" placeholder="OpenTime" value="<?php echo $opentime; ?>" require></td>
                </tr>
                <tr>
                    <th>Ringkasan</th>
                    <td><input type="text" name="ringkasan" placeholder="Ringkasan" value="<?php echo $ringkasan; ?>" require></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>