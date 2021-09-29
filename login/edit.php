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
$log = new Log();
foreach ($log->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];
}
?>
    <fieldset>
        <legend>Edit Data dosen</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="pass" name="nama" placeholder="Nama" value="<?php echo $nama; ?>" require></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="pass" name="username" placeholder="Username" value="<?php echo $username; ?>" require></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="password" placeholder="Password" value="<?php echo $password; ?>" require></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>