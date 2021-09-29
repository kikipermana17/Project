<?php
class Log extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datadosen = mysqli_query($this->koneksi, "select * from info_login");
        // var_dump($datadosen);
        return $datadosen;
    }

    // Menambah Data
    public function create($nama, $username, $password)
    {
        mysqli_query(
            $this->koneksi,
            "insert into info_login values(null, '$nama', '$username', '$password')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from info_login where id='$id'"
        );
        return $datadosen;
    }


    
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from info_login where id='$id'"
        );
        return $datadosen;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $username, $password)
    {
        mysqli_query(
            $this->koneksi,
            "update info_login set nama='$nama', username='$username', 'password=$password', where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from info_login where id='$id'");
    }
}