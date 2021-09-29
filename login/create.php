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
        <legend>LOGIN</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" placeholder="Nama" required></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="password" placeholder="Password" required></td>
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