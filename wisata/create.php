<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Wisata</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>NO</th>
                    <td><input type="text" name="no" placeholder="No" required></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="pass" name="nama" placeholder="Nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="pass" name="alamat" placeholder="Alamat" required></td>
                </tr>
                <tr>
                    <th>OpenTime</th>
                    <td><input type="time" name="opentime" placeholder="OpenTime" required></td>
                </tr>
                <tr>
                    <th>Ringkasan</th>
                    <td><input type="text" name="ringkasan" placeholder="Ringkasan" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>