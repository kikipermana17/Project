<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>
    <center><label>Tempat Wisata</label></center>
    <fieldset>
        <a href="create.php">Tambah Data Wisata</a>
       <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
            include '../database.php';
            $log = new Log();
            $no = 1;
            //var_dump($dosen->index());
            foreach ($log->index() as $data) {
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td><form action="proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="hidden" name="aksi" value="delete">
                <button type="delete" name="delete" onclick = "return confrim('Apakah Anda Yakin Mau Menghapus data ini ?')">
                Delete
            </button>
            </form>
        </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </fieldset>
</body>
</html>