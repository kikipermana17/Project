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
                <th>Alamat</th>
                <th>Opentime</th>
                <th>Ringkasan</th>
                <th colspan="4">Aksi</th>
            </tr>
            <?php
            include '../database.php';
            $dosen = new Dosen();
            $no = 1;
            //var_dump($dosen->index());
            foreach ($dosen->index() as $data) {
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['opentime']; ?></td>
                    <td><?php echo $data['ringkasan']; ?></td>
                    <td></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td><form action="proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="hidden" name="aksi" value="delete">
                <button type="submit" name="save" onclick = "return confrim('Apakah Anda Yakin Mau Menghapus data ini ?')">Delete
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