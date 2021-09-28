<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->show($_GET['id']) as $data) {
    $id = $data['id'];
    $no = $data['no'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $opentime = $data['opentime'];
    $ringkasan = $data['ringkasan'];
}
?>
    <fieldset>
        <legend>Show Data wisata</legend>
        <table>
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="no" placeholder="ID" value="<?php echo $data['id']; ?>" readonly></td>
                </tr>
                <tr>
                    <th>NO</th>
                    <td><input type="text" name="no" placeholder="No" value="<?php echo $data['no']; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="pass" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="pass" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" readonly></td>
                </tr>
                <tr>
                    <th>OpenTime</th>
                    <td><input type="time" name="opentime" placeholder="OpenTime" value="<?php echo $data['opentime']; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Ringkasan</th>
                    <td><input type="text" name="ringkasan" placeholder="Ringkasan" value="<?php echo $data['ringkasan']; ?>" readonly></td>
                </tr>
        </table>
    </fieldset>
</body>

</html>